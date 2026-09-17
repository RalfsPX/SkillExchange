<?php

namespace App\Policies;

use App\Models\PostOffer;
use App\Models\User;
use App\PostOfferStatus;
use App\PostStatus;

class PostOfferPolicy
{
    // Only the user who sent an offer can cancel the post
    public function cancel(User $user, PostOffer $offer): bool
    {
        return $user->id === $offer->user_id && $offer->status === PostOfferStatus::PENDING;
    }

    // The author can rejected an offer
    public function reject(User $user, PostOffer $offer): bool
    {
        return $user->id === $offer->post->user_id && $offer->status === PostOfferStatus::PENDING;
    }

    // The author can accept an offer
    public function accept(User $user, PostOffer $offer): bool
    {
        return $user->id === $offer->post->user_id && $offer->status === PostOfferStatus::PENDING && $offer->post->status === PostStatus::AVAILABLE;
    }
}
