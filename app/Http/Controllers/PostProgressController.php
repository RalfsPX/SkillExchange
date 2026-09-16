<?php

namespace App\Http\Controllers;

use App\Models\PostOffer;
use App\PostOfferStatus;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostProgressController extends Controller
{
    public function index(): View
    {
        $matches = PostOffer::query()
            ->with(['post', 'user'])
            ->where('status', PostOfferStatus::ACCEPTED)
            ->where(function ($query) {
                $query->where('user_id', Auth::id())
                    ->orWhereRelation('post', 'user_id', Auth::id());
            })
            ->latest()
            ->get();

        return view('postprogress.index', compact('matches'));
    }

    public function show(PostOffer $offer): View
    {
        Gate::authorize('view', $offer);

        $offer->load(['post.user', 'user']);

        return view('postprogress.show', compact('offer'));
    }
}
