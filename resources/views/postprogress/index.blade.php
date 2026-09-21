<x-layouts::app title="In Progress">
    <div class="mx-auto w-full max-w-3xl p-6 lg:p-8">
        <flux:heading size="xl" level="1">In Progress</flux:heading>
        <flux:text class="mt-2">Exchanges you're currently part of.</flux:text>

        @if ($matches->isEmpty())
            <flux:callout class="mt-8" icon="arrow-path" heading="Nothing in progress yet." />
        @else
            <div class="mt-8 space-y-4">
                @foreach ($matches as $match)
                    @php($isSender = $match->user_id === auth()->id())
                    @php($otherUsername = $isSender ? $match->post->user->username : $match->user->username)
                    <flux:card class="space-y-3" wire:key="match-{{ $match->id }}">
                        <div class="flex items-start justify-between gap-3">
                            <div>
                                <flux:text size="sm" class="text-zinc-500">
                                    With {{ $otherUsername }} &middot; {{ $match->created_at->diffForHumans() }}
                                </flux:text>
                                <a href="{{ route('posts.progress.show', $match) }}" class="underline">
                                    <flux:heading size="lg">{{ $match->post->offering_skill }}</flux:heading>
                                </a>
                            </div>
                            <flux:badge size="sm"
                                :color="$match->post->status === \App\PostStatus::COMPLETED ? 'green' : 'amber'">
                                {{ $match->post->status->label() }}
                            </flux:badge>
                        </div>

                        <flux:text size="sm" class="text-zinc-500">Looking for: {{ $match->post->looking_skill }}</flux:text>
                    </flux:card>
                @endforeach
            </div>
        @endif
    </div>
</x-layouts::app>
