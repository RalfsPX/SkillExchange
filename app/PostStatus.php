<?php

namespace App;

enum PostStatus: string
{
    case AVAILABLE = 'available';
    case IN_PROGRESS = 'in_progress';
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';

    public function label(): string
    {
        return ucfirst(str_replace('_', ' ', $this->value));
    }
}
