<?php

namespace App\Services;

use App\Models\Image;
use App\Models\User;
use App\Services\ImageIntelligence\ImageTagVisibilityBridgeService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

class AiSearchService
{
    public function __construct(
        private readonly ImageTagVisibilityBridgeService $tagVisibilityBridge
    ) {
    }

    public function search(User $user, ?int $spaceId, string $query): LengthAwarePaginator
    {
        $q = trim($query);
        if ($q === '') {
            return $this->emptyResult($user, $spaceId);
        }

        $imagesQuery = $user->images()
            ->select([
                'images.id', 'images.user_id', 'images.album_id', 'images.group_id', 'images.strategy_id',
                'images.space_id', 'images.key', 'images.path', 'images.name', 'images.origin_name',
                'images.alias_name', 'images.size', 'images.mimetype', 'images.extension', 'images.md5',
                'images.sha1', 'images.width', 'images.height', 'images.permission', 'images.ocr_text',
                'images.review_status', 'images.review_reason', 'images.reviewed_at', 'images.reviewed_by',
                'images.created_at',
            ])
            ->when(! is_null($spaceId), function ($builder) use ($spaceId) {
                $builder->where('images.space_id', $spaceId);
            })
            ->with([
                'group:id,configs',
                'strategy:id,key,configs',
                'album:id,user_id,name,intro,image_num,created_at,updated_at',
                'tags:id,name',
                'intelligenceRecord:image_id,status,source,labels,keywords,analyzed_at',
                'intelligenceTerms:id,image_id,source,term,normalized_term',
            ]);

        $this->applyVisibilitySearch($imagesQuery, $q);

        $images = $imagesQuery
            ->paginate(40)
            ->withQueryString();

        $images->getCollection()->each(function (Image $image) {
            $this->tagVisibilityBridge->decorate($image);
            $image->human_date = $image->created_at->diffForHumans();
            $image->date = $image->created_at->format('Y-m-d H:i:s');
            $image->append(['pathname', 'links'])->setVisible([
                'album', 'key', 'name', 'pathname', 'origin_name', 'size', 'mimetype', 'extension', 'md5', 'sha1',
                'width', 'height', 'review_status', 'review_reason', 'reviewed_at', 'reviewed_by', 'links',
                'ocr_text', 'tags', 'manual_tags', 'intelligence_tags', 'visible_tags', 'human_date', 'date', 'ai_score',
            ]);
        });

        return $images;
    }

    public function applyVisibilitySearch(Builder|Relation $query, string $queryText): bool
    {
        $q = trim($queryText);
        if ($q === '') {
            return false;
        }

        $like = '%'.$q.'%';
        $normalized = mb_strtolower($q);
        $normalizedLike = '%'.$normalized.'%';

        $query->leftJoin('image_intelligence_records', 'image_intelligence_records.image_id', '=', 'images.id')
            ->selectRaw($this->scoreSql().' AS ai_score', $this->scoreBindings($q, $like, $normalized, $normalizedLike))
            ->where(function (Builder $builder) use ($q, $like, $normalized, $normalizedLike) {
                $this->applySearchFilters($builder, $q, $like, $normalized, $normalizedLike);
            })
            ->orderByDesc('ai_score')
            ->orderByDesc('images.created_at');

        return true;
    }

    private function scoreSql(): string
    {
        return <<<'SQL'
(
    (CASE WHEN images.origin_name = ? OR images.alias_name = ? THEN 120 ELSE 0 END) +
    (CASE WHEN images.origin_name LIKE ? OR images.alias_name LIKE ? THEN 60 ELSE 0 END) +
    (CASE WHEN COALESCE(image_intelligence_records.caption, '') LIKE ? THEN 45 ELSE 0 END) +
    (CASE WHEN COALESCE(image_intelligence_records.summary, '') LIKE ? THEN 35 ELSE 0 END) +
    (CASE WHEN COALESCE(image_intelligence_records.prompt_hint, '') LIKE ? THEN 40 ELSE 0 END) +
    (CASE WHEN EXISTS (
        SELECT 1 FROM image_intelligence_terms iit
        WHERE iit.image_id = images.id AND iit.normalized_term = ?
    ) THEN 38 ELSE 0 END) +
    (CASE WHEN EXISTS (
        SELECT 1 FROM image_intelligence_terms iit
        WHERE iit.image_id = images.id AND iit.normalized_term LIKE ?
    ) THEN 34 ELSE 0 END) +
    (CASE WHEN COALESCE(image_intelligence_records.ocr_text, COALESCE(images.ocr_text, '')) LIKE ? THEN 30 ELSE 0 END) +
    (CASE WHEN EXISTS (
        SELECT 1 FROM image_tag it
        INNER JOIN tags t ON t.id = it.tag_id
        WHERE it.image_id = images.id AND t.name = ?
    ) THEN 40 ELSE 0 END) +
    (CASE WHEN EXISTS (
        SELECT 1 FROM image_tag it
        INNER JOIN tags t ON t.id = it.tag_id
        WHERE it.image_id = images.id AND t.name LIKE ?
    ) THEN 35 ELSE 0 END)
)
SQL;
    }

    /**
     * @return array<int, string>
     */
    private function scoreBindings(string $query, string $like, string $normalized, string $normalizedLike): array
    {
        return [
            $query,
            $query,
            $like,
            $like,
            $like,
            $like,
            $like,
            $normalized,
            $normalizedLike,
            $like,
            $query,
            $like,
        ];
    }

    private function applySearchFilters(
        Builder $builder,
        string $query,
        string $like,
        string $normalized,
        string $normalizedLike
    ): void
    {
        $builder->where('images.origin_name', 'like', $like)
            ->orWhere('images.alias_name', 'like', $like)
            ->orWhere('image_intelligence_records.caption', 'like', $like)
            ->orWhere('image_intelligence_records.summary', 'like', $like)
            ->orWhere('image_intelligence_records.prompt_hint', 'like', $like)
            ->orWhereExists(function ($exists) use ($normalized) {
                $exists->selectRaw('1')
                    ->from('image_intelligence_terms as iit')
                    ->whereColumn('iit.image_id', 'images.id')
                    ->where('iit.normalized_term', '=', $normalized);
            })
            ->orWhereExists(function ($exists) use ($normalizedLike) {
                $exists->selectRaw('1')
                    ->from('image_intelligence_terms as iit')
                    ->whereColumn('iit.image_id', 'images.id')
                    ->where('iit.normalized_term', 'like', $normalizedLike);
            })
            ->orWhereRaw('COALESCE(image_intelligence_records.ocr_text, COALESCE(images.ocr_text, ?)) LIKE ?', ['', $like])
            ->orWhereExists(function ($exists) use ($query) {
                $exists->selectRaw('1')
                    ->from('image_tag as it')
                    ->join('tags as t', 't.id', '=', 'it.tag_id')
                    ->whereColumn('it.image_id', 'images.id')
                    ->where('t.name', '=', $query);
            })
            ->orWhereExists(function ($exists) use ($like) {
                $exists->selectRaw('1')
                    ->from('image_tag as it')
                    ->join('tags as t', 't.id', '=', 'it.tag_id')
                    ->whereColumn('it.image_id', 'images.id')
                    ->where('t.name', 'like', $like);
            });
    }

    private function emptyResult(User $user, ?int $spaceId): LengthAwarePaginator
    {
        return $user->images()
            ->when(! is_null($spaceId), function ($builder) use ($spaceId) {
                $builder->where('images.space_id', $spaceId);
            })
            ->whereRaw('1 = 0')
            ->paginate(40)
            ->withQueryString();
    }
}
