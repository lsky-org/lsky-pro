<?php

namespace App\Services\ImageIntelligence;

use App\Models\Image;
use App\Models\Tag;
use Illuminate\Support\Collection;

class ImageTagVisibilityBridgeService
{
    public function __construct(
        private readonly ImageIntelligenceTermProjectionService $termProjectionService
    ) {
    }

    public function decorate(Image $image, bool $overrideTagsRelation = true): Image
    {
        $image->loadMissing('tags:id,name', 'intelligenceTerms:id,image_id,source,term,normalized_term');

        $manualTags = $this->buildManualTags($image);
        $intelligenceTags = $this->buildIntelligenceTags($image, $manualTags);
        $visibleTags = $manualTags->concat($intelligenceTags)->values();

        $image->setRelation('manual_tags', $manualTags);
        $image->setRelation('intelligence_tags', $intelligenceTags);
        $image->setRelation('visible_tags', $visibleTags);

        if ($overrideTagsRelation) {
            $image->setRelation('tags', $visibleTags);
        }

        return $image;
    }

    /**
     * @return Collection<int, Tag>
     */
    private function buildManualTags(Image $image): Collection
    {
        $manualSource = $image->relationLoaded('manual_tags')
            ? collect($image->getRelation('manual_tags'))
            : collect($image->tags);

        return $manualSource
            ->map(function (Tag $tag): Tag {
                return $this->makeStructuredTag(
                    $tag->id ? (int) $tag->id : null,
                    (string) $tag->name,
                    'manual',
                    'tag'
                );
            })
            ->values();
    }

    /**
     * @param  Collection<int, Tag>  $manualTags
     * @return Collection<int, Tag>
     */
    private function buildIntelligenceTags(Image $image, Collection $manualTags): Collection
    {
        $reserved = $manualTags
            ->map(fn (Tag $tag) => $this->normalizeName((string) $tag->name))
            ->filter()
            ->values()
            ->all();

        $tags = collect();

        foreach ($this->termProjectionService->termsForImage($image) as $term) {
            $normalized = $term['normalized_term'];
            if ($normalized === '' || in_array($normalized, $reserved, true)) {
                continue;
            }

            $reserved[] = $normalized;
            $tags->push($this->makeStructuredTag(null, $term['term'], 'intelligence', $term['source']));
        }

        return $tags->values();
    }

    private function normalizeName(string $value): string
    {
        return mb_strtolower(trim($value));
    }

    private function makeStructuredTag(?int $id, string $name, string $source, string $origin): Tag
    {
        $tag = new Tag();
        $tag->setAttribute('id', $id);
        $tag->setAttribute('name', trim($name));
        $tag->setAttribute('source', $source);
        $tag->setAttribute('origin', $origin);
        $tag->setVisible(['id', 'name', 'source', 'origin']);
        $tag->exists = false;

        return $tag;
    }
}
