<?php

namespace App\Services\ImageIntelligence;

use App\Models\Image;
use App\Models\ImageIntelligenceRecord;
use App\Models\ImageIntelligenceTerm;

class ImageIntelligenceTermProjectionService
{
    public function syncForImage(Image $image, ImageIntelligenceRecord $record): void
    {
        if (! $this->isProjectableStatus($record)) {
            return;
        }

        $terms = $this->projectTerms($record);

        ImageIntelligenceTerm::query()
            ->where('image_id', $image->id)
            ->delete();

        if ($terms === []) {
            return;
        }

        $timestamp = now();
        $rows = array_map(function (array $term) use ($image, $timestamp): array {
            return [
                'image_id' => (int) $image->id,
                'user_id' => $image->user_id ? (int) $image->user_id : null,
                'source' => $term['source'],
                'term' => $term['term'],
                'normalized_term' => $term['normalized_term'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ];
        }, $terms);

        ImageIntelligenceTerm::query()->insert($rows);
    }

    /**
     * @return array<int, array{source: string, term: string, normalized_term: string}>
     */
    public function termsForImage(Image $image): array
    {
        $image->loadMissing('intelligenceTerms:id,image_id,source,term,normalized_term');

        return $image->intelligenceTerms
            ->sortBy(fn (ImageIntelligenceTerm $term) => sprintf('%010d:%s', (int) ($term->id ?? 0), (string) $term->normalized_term))
            ->map(function (ImageIntelligenceTerm $term): ?array {
                $displayTerm = $this->normalizeDisplayTerm((string) $term->term);
                $normalizedTerm = $this->normalizeNormalizedTerm((string) $term->normalized_term, $displayTerm);

                if ($displayTerm === '' || $normalizedTerm === '') {
                    return null;
                }

                return [
                    'source' => $this->normalizeSource((string) $term->source),
                    'term' => $displayTerm,
                    'normalized_term' => $normalizedTerm,
                ];
            })
            ->filter()
            ->unique('normalized_term')
            ->values()
            ->all();
    }

    /**
     * @return array<int, array{source: string, term: string, normalized_term: string}>
     */
    private function projectTerms(ImageIntelligenceRecord $record): array
    {
        $projected = [];
        $reserved = [];

        foreach ([
            'label' => $record->labels ?? [],
            'keyword' => $record->keywords ?? [],
        ] as $source => $values) {
            foreach ($this->normalizeTerms($values) as $term) {
                if (in_array($term['normalized_term'], $reserved, true)) {
                    continue;
                }

                $reserved[] = $term['normalized_term'];
                $projected[] = [
                    'source' => $this->normalizeSource($source),
                    'term' => $term['term'],
                    'normalized_term' => $term['normalized_term'],
                ];
            }
        }

        return $projected;
    }

    /**
     * @param  iterable<mixed>|mixed  $values
     * @return array<int, array{term: string, normalized_term: string}>
     */
    private function normalizeTerms($values): array
    {
        return collect(is_iterable($values) ? $values : [])
            ->map(fn (mixed $value): array => $this->normalizeTermPayload((string) $value))
            ->filter(fn (array $term) => $term['term'] !== '' && $term['normalized_term'] !== '')
            ->unique('normalized_term')
            ->values()
            ->all();
    }

    private function isProjectableStatus(ImageIntelligenceRecord $record): bool
    {
        $status = strtolower(trim((string) $record->status));

        return $status === '' || in_array($status, ['ready', 'success', 'completed'], true);
    }

    /**
     * @return array{term: string, normalized_term: string}
     */
    private function normalizeTermPayload(string $value): array
    {
        $term = $this->normalizeDisplayTerm($value);

        return [
            'term' => $term,
            'normalized_term' => $this->normalizeNormalizedTerm('', $term),
        ];
    }

    private function normalizeDisplayTerm(string $value): string
    {
        $term = preg_replace('/\s+/u', ' ', trim($value)) ?: '';
        $term = mb_substr($term, 0, 120);

        return trim($term);
    }

    private function normalizeNormalizedTerm(string $normalized, string $fallback = ''): string
    {
        $value = $normalized !== '' ? $normalized : $fallback;

        return mb_strtolower($this->normalizeDisplayTerm($value));
    }

    private function normalizeSource(string $source): string
    {
        $normalized = mb_strtolower(trim($source));
        $normalized = mb_substr($normalized, 0, 32);

        return $normalized !== '' ? $normalized : 'label';
    }
}
