@props([
    'title',
    'description',
])

<div class="flex w-full flex-col">
    <h1 class="text-2xl font-bold tracking-tight text-ink">{{ $title }}</h1>
    <p class="mt-2 text-sm leading-relaxed text-ink/60">{{ $description }}</p>
</div>
