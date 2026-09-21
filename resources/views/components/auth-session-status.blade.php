@props([
    'status',
])

@if ($status)
    <div {{ $attributes->merge(['class' => 'rounded-xl border border-ember/25 bg-ember/[0.07] px-4 py-3 text-sm font-medium text-ember']) }}>
        {{ $status }}
    </div>
@endif
