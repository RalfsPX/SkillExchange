@props(['rating', 'max' => 5])

<div {{ $attributes->merge(['class' => 'flex items-center gap-0.5']) }}>
    @for ($i = 1; $i <= $max; $i++)
        @if ($i <= round($rating))
            <flux:icon.star variant="solid" class="size-4 text-amber-400" />
        @else
            <flux:icon.star variant="outline" class="size-4 text-zinc-300 dark:text-zinc-600" />
        @endif
    @endfor
</div>
