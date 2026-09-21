<x-layouts::app :title="$user->username">
    <div class="mx-auto w-full max-w-3xl p-6 lg:p-8">
        <flux:card class="space-y-4">
            <div class="flex items-center justify-between gap-4">
                <div class="flex items-center gap-4">
                    <flux:avatar size="lg" :name="$user->username" :initials="$user->initials()" />

                    <flux:heading size="xl" level="1">{{ $user->username }}</flux:heading>
                </div>

                <div class="flex flex-col items-end gap-1">
                    <flux:heading size="sm">Reputation</flux:heading>

                    <x-star-rating :rating="$user->reputation ?? 0" />

                    @if ($user->reputation === null)
                        <flux:text size="sm" class="text-zinc-500">No reviews yet</flux:text>
                    @endif
                </div>
            </div>

            @if ($user->bio)
                <flux:text class="whitespace-pre-line">{{ $user->bio }}</flux:text>
            @endif
        </flux:card>

        <flux:heading size="lg" class="mt-8">
            {{ $user->is(auth()->user()) ? 'Your posts' : $user->username.'\'s posts' }}
        </flux:heading>

        <div class="mt-4">
            <x-posts.results :posts="$posts" />
        </div>
    </div>
</x-layouts::app>
