<?php

namespace App\Enums;

final class ImageReviewStatus
{
    const Pending = 'review_pending';
    const Approved = 'review_approved';
    const Rejected = 'review_rejected';

    public static function values(): array
    {
        return [
            self::Pending,
            self::Approved,
            self::Rejected,
        ];
    }
}
