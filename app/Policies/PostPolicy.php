<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use App\PostOfferStatus;
use App\PostStatus;

class PostPolicy
{
    public function view(User $user, Post $post): bool
    {
        return $post->status === PostStatus::AVAILABLE
            || $user->id === $post->user_id
            || $post->offers()->where('user_id', $user->id)->where('status', PostOfferStatus::ACCEPTED)->exists();
    }

    public function update(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }

    public function delete(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }
}
