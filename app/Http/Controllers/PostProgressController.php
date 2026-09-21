<?php

namespace App\Http\Controllers;

use App\Models\PostOffer;
use App\PostOfferStatus;
use App\PostStatus;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    public function complete(Request $request, PostOffer $offer): RedirectResponse
    {
        $user = $request->user();

        DB::transaction(function () use ($offer, $user) {
            $offer = PostOffer::with('post')->lockForUpdate()->findOrFail($offer->id);

            Gate::forUser($user)->authorize('complete', $offer);

            $offer->completeOffers()->create(['user_id' => $user->id]);

            if ($offer->completeOffers()->count() === 2) {
                $offer->post->status = PostStatus::COMPLETED;
                $offer->post->save();
            }
        });

        return back();
    }
}
