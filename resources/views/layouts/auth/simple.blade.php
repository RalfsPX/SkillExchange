<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ filled($title ?? null) ? $title.' - SkillExchange' : 'SkillExchange' }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        @fonts

        {{-- @fluxAppearance is deliberately omitted: it toggles Flux into dark
             mode from the visitor's system preference, and these screens are
             always the light brand palette. --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="auth-brand min-h-screen bg-cream text-ink font-sans antialiased selection:bg-ember selection:text-cream">

        {{-- Ambient background, matching the landing page --}}
        <div aria-hidden="true" class="pointer-events-none fixed inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-32 h-[38rem] w-[38rem] rounded-full bg-ember/10 blur-3xl"></div>
            <div class="absolute top-1/3 -left-40 h-[32rem] w-[32rem] rounded-full bg-ink/[0.07] blur-3xl"></div>
            <div class="absolute inset-0 opacity-[0.55]"
                 style="background-image:radial-gradient(circle at 1px 1px, rgba(57,62,65,0.13) 1px, transparent 0); background-size:28px 28px;"></div>
        </div>

        <div class="relative flex min-h-svh flex-col items-center justify-center gap-7 px-6 py-12">

            {{-- Wordmark --}}
            <a href="{{ route('home') }}"
               class="group flex items-center gap-2.5 rounded-xl focus:outline-none focus-visible:ring-2 focus-visible:ring-ember focus-visible:ring-offset-4 focus-visible:ring-offset-cream">
                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-ember shadow-lg shadow-ember/30 transition-transform duration-300 group-hover:-rotate-6">
                    <svg viewBox="0 0 24 24" fill="none" class="h-5 w-5 text-cream" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 8h14m-4-4 4 4-4 4"/>
                        <path d="M21 16H7m4-4-4 4 4 4"/>
                    </svg>
                </span>
                <span class="text-lg font-bold tracking-tight text-ink">Skill<span class="text-ember">Exchange</span></span>
            </a>

            {{-- Card, framed like the trade card on the landing page --}}
            <div class="relative w-full max-w-md">
                <div class="absolute -top-5 -right-5 hidden h-28 w-28 rounded-3xl border-2 border-dashed border-ember/25 sm:block"></div>
                <div class="absolute -bottom-7 -left-6 hidden h-20 w-20 rounded-full bg-ink/5 sm:block"></div>

                <div class="relative rounded-[2rem] border border-ink/10 bg-white/70 p-2.5 shadow-2xl shadow-ink/10 backdrop-blur-sm">
                    <div class="rounded-[1.6rem] bg-white px-7 py-8 sm:px-9 sm:py-10">
                        {{ $slot }}
                    </div>
                </div>
            </div>

            {{-- Back to landing --}}
            <a href="{{ route('home') }}"
               class="group inline-flex items-center gap-1.5 text-sm font-medium text-ink/50 transition-colors hover:text-ember">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"
                     class="h-3.5 w-3.5 transition-transform duration-200 group-hover:-translate-x-0.5">
                    <path d="M19 12H5m6 6-6-6 6-6"/>
                </svg>
                {{ __('Back to home') }}
            </a>
        </div>

        @persist('toast')
            <flux:toast.group>
                <flux:toast />
            </flux:toast.group>
        @endpersist

        <x-brand-loader />

        @fluxScripts
    </body>
</html>
