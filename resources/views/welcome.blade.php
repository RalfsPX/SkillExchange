<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('Trade skills, not money') }} - SkillExchange</title>
        <meta name="description" content="SkillExchange is where people swap what they know. Offer a skill, ask for one back, and trade with someone who needs exactly what you have.">

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        @fonts

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-cream text-ink font-sans antialiased selection:bg-ember selection:text-cream">

        {{-- ================= Ambient background ================= --}}
        <div aria-hidden="true" class="pointer-events-none fixed inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-32 h-[38rem] w-[38rem] rounded-full bg-ember/10 blur-3xl"></div>
            <div class="absolute top-1/3 -left-40 h-[32rem] w-[32rem] rounded-full bg-ink/[0.07] blur-3xl"></div>
            <div class="absolute inset-0 opacity-[0.55]"
                 style="background-image:radial-gradient(circle at 1px 1px, rgba(57,62,65,0.13) 1px, transparent 0); background-size:28px 28px;"></div>
        </div>

        <div class="relative">

            {{-- ================= Nav ================= --}}
            <header class="sticky top-0 z-50 border-b border-ink/5 bg-cream/80 backdrop-blur-xl">
                <nav class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-6 py-4 lg:px-10">

                    <a href="#top" class="group flex items-center gap-2.5 rounded-xl focus:outline-none focus-visible:ring-2 focus-visible:ring-ember focus-visible:ring-offset-4 focus-visible:ring-offset-cream">
                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-ember shadow-lg shadow-ember/30 transition-transform duration-300 group-hover:-rotate-6 sm:h-10 sm:w-10">
                            <svg viewBox="0 0 24 24" fill="none" class="h-5 w-5 text-cream" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 8h14m-4-4 4 4-4 4"/>
                                <path d="M21 16H7m4-4-4 4 4 4"/>
                            </svg>
                        </span>
                        <span class="text-base font-bold tracking-tight whitespace-nowrap text-ink sm:text-lg">Skill<span class="text-ember">Exchange</span></span>
                    </a>

                    <div class="hidden items-center gap-8 text-sm font-medium text-ink/70 md:flex">
                        <a href="#how" class="transition-colors hover:text-ember">How it works</a>
                        <a href="#skills" class="transition-colors hover:text-ember">Skills</a>
                        <a href="#why" class="transition-colors hover:text-ember">Why barter</a>
                    </div>

                    <div class="flex items-center gap-2.5 sm:gap-3">
                        {{-- Login --}}
                        <a href="{{ route('login') }}" data-brand-loader-link
                           class="rounded-full px-3 py-2.5 text-sm font-semibold whitespace-nowrap text-ink transition-all duration-200 hover:bg-ink/[0.07] focus:outline-none focus-visible:ring-2 focus-visible:ring-ink focus-visible:ring-offset-2 focus-visible:ring-offset-cream sm:px-5">
                            Log in
                        </a>

                        {{-- Sign up --}}
                        <a href="{{ route('register') }}" data-brand-loader-link
                           class="group relative inline-flex items-center gap-1.5 overflow-hidden rounded-full bg-ember px-4 py-2.5 text-sm font-semibold whitespace-nowrap text-cream shadow-lg shadow-ember/35 transition-all duration-200 hover:-translate-y-0.5 hover:bg-ember-600 hover:shadow-xl hover:shadow-ember/45 active:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-ember focus-visible:ring-offset-2 focus-visible:ring-offset-cream sm:px-6">
                            <span class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/25 to-transparent transition-transform duration-700 group-hover:translate-x-full"></span>
                            <span class="relative">Sign up</span>
                        </a>
                    </div>
                </nav>
            </header>

            {{-- ================= Hero ================= --}}
            <section id="top" class="mx-auto max-w-7xl px-6 pt-16 pb-20 lg:px-10 lg:pt-24 lg:pb-28">
                <div class="grid items-center gap-16 lg:grid-cols-[1.05fr_1fr] lg:gap-20">

                    {{-- Copy --}}
                    <div>
                        <h1 class="text-5xl leading-[1.03] font-bold tracking-tight text-ink sm:text-6xl lg:text-7xl">
                            Trade what<br class="hidden sm:block"> you know for
                            <span class="text-ember [-webkit-box-decoration-break:clone] [box-decoration-break:clone] bg-[image:linear-gradient(to_top,rgba(233,79,55,0.22)_0.14em,transparent_0.14em)]">what you need.</span>
                        </h1>

                        <p class="mt-7 max-w-xl text-lg leading-relaxed text-ink/70 sm:text-xl">
                            You can build websites. Someone else can shoot photos, fix a bike, or teach you Spanish.
                            SkillExchange pairs you up so you both walk away richer — without either of you opening a wallet.
                        </p>

                        {{-- CTAs --}}
                        <div class="mt-10 flex flex-col gap-4 sm:flex-row sm:items-center">
                            <a href="{{ route('register') }}" data-brand-loader-link
                               class="group relative inline-flex items-center justify-center gap-2.5 overflow-hidden rounded-full bg-ember px-9 py-4 text-base font-bold text-cream shadow-xl shadow-ember/40 transition-all duration-200 hover:-translate-y-1 hover:bg-ember-600 hover:shadow-2xl hover:shadow-ember/50 active:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-ember focus-visible:ring-offset-4 focus-visible:ring-offset-cream">
                                <span class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/30 to-transparent transition-transform duration-700 group-hover:translate-x-full"></span>
                                <span class="relative">Create your free account</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                     class="relative h-4 w-4 transition-transform duration-200 group-hover:translate-x-1">
                                    <path d="M5 12h14M13 6l6 6-6 6"/>
                                </svg>
                            </a>

                            <a href="{{ route('login') }}" data-brand-loader-link
                               class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-ink/15 bg-cream px-9 py-4 text-base font-bold text-ink transition-all duration-200 hover:-translate-y-1 hover:border-ink hover:bg-ink hover:text-cream hover:shadow-xl hover:shadow-ink/25 active:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-ink focus-visible:ring-offset-4 focus-visible:ring-offset-cream">
                                I already have an account
                            </a>
                        </div>

                        {{-- Trust strip --}}
                        <div class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-3 text-sm font-medium text-ink/55">
                            <span class="inline-flex items-center gap-2">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-ember"><path d="M20 6 9 17l-5-5"/></svg>
                                Free forever
                            </span>
                            <span class="inline-flex items-center gap-2">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-ember"><path d="M20 6 9 17l-5-5"/></svg>
                                No card required
                            </span>
                            <span class="inline-flex items-center gap-2">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-ember"><path d="M20 6 9 17l-5-5"/></svg>
                                Rated after every trade
                            </span>
                        </div>
                    </div>

                    {{-- Hero visual: a live-looking trade card --}}
                    <div class="relative lg:pl-6">
                        <div class="absolute -top-6 -right-4 hidden h-32 w-32 rounded-3xl border-2 border-dashed border-ember/25 lg:block"></div>
                        <div class="absolute -bottom-8 -left-2 hidden h-24 w-24 rounded-full bg-ink/5 lg:block"></div>

                        <div class="relative rounded-[2rem] border border-ink/10 bg-white/70 p-3 shadow-2xl shadow-ink/10 backdrop-blur-sm">
                            <div class="rounded-[1.5rem] bg-cream p-7 sm:p-8">

                                {{-- Card head --}}
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <span class="flex h-11 w-11 items-center justify-center rounded-full bg-ink text-sm font-bold text-cream">MK</span>
                                        <div>
                                            <p class="text-sm font-bold text-ink">Mara K.</p>
                                            <p class="text-xs font-medium text-ink/50">Posted 2 hours ago</p>
                                        </div>
                                    </div>
                                    <span class="rounded-full bg-ember/10 px-3 py-1 text-[0.7rem] font-bold tracking-wide text-ember uppercase">Open</span>
                                </div>

                                {{-- The swap --}}
                                <div class="mt-7 space-y-3">
                                    <div class="rounded-2xl border border-ink/10 bg-white p-4">
                                        <p class="text-[0.7rem] font-bold tracking-widest text-ink/45 uppercase">Offering</p>
                                        <p class="mt-1.5 text-lg font-bold text-ink">Portrait photography</p>
                                    </div>

                                    <div class="flex justify-center">
                                        <span class="flex h-10 w-10 items-center justify-center rounded-full bg-ember text-cream shadow-lg shadow-ember/35">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                                <path d="M7 3v18m-4-4 4 4 4-4"/><path d="M17 21V3m-4 4 4-4 4 4"/>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="rounded-2xl border-2 border-ember/30 bg-ember/[0.06] p-4">
                                        <p class="text-[0.7rem] font-bold tracking-widest text-ember uppercase">Looking for</p>
                                        <p class="mt-1.5 text-lg font-bold text-ink">A portfolio website</p>
                                    </div>
                                </div>

                                {{-- Card foot --}}
                                <div class="mt-7 flex items-center justify-between border-t border-ink/10 pt-5">
                                    <div class="flex items-center gap-1" aria-label="Rated 5 out of 5">
                                        @for ($i = 0; $i < 5; $i++)
                                            <svg viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 text-ember"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8-5.2-2.7-5.2 2.7 1-5.8L1.5 7.7l5.9-.9L10 1.5z"/></svg>
                                        @endfor
                                        <span class="ml-1.5 text-xs font-semibold text-ink/55">12 trades</span>
                                    </div>
                                    <span class="rounded-full bg-ink px-4 py-2 text-xs font-bold text-cream">Send offer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ================= How it works ================= --}}
            <section id="how" class="mx-auto max-w-7xl px-6 py-20 lg:px-10 lg:py-28">
                <div class="max-w-2xl">
                    <p class="text-xs font-bold tracking-[0.2em] text-ember uppercase">How it works</p>
                    <h2 class="mt-4 text-4xl font-bold tracking-tight text-ink sm:text-5xl">Three steps, zero invoices.</h2>
                    <p class="mt-5 text-lg text-ink/65">Every exchange follows the same simple loop — so you always know where you stand.</p>
                </div>

                <div class="mt-16 grid gap-6 md:grid-cols-3">
                    @php
                        $steps = [
                            ['title' => 'Post your trade', 'body' => 'Say what you are offering and what you want in return. It takes about a minute.', 'icon' => 'M12 5v14M5 12h14'],
                            ['title' => 'Get offers', 'body' => 'People who need your skill reach out. Read their profile, check their rating, pick the right match.', 'icon' => 'M4 4h16v12H5.2L4 17.6V4z'],
                            ['title' => 'Trade and review', 'body' => 'Do the work, mark it complete, and leave each other a rating that builds your reputation.', 'icon' => 'M20 6 9 17l-5-5'],
                        ];
                    @endphp

                    @foreach ($steps as $step)
                        <div class="group rounded-3xl border border-ink/10 bg-white/60 p-8 transition-all duration-300 hover:-translate-y-1.5 hover:border-ember/35 hover:bg-white hover:shadow-2xl hover:shadow-ink/10">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-ember/10 text-ember transition-all duration-300 group-hover:bg-ember group-hover:text-cream group-hover:shadow-lg group-hover:shadow-ember/35">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                    <path d="{{ $step['icon'] }}"/>
                                </svg>
                            </span>

                            <h3 class="mt-6 text-xl font-bold text-ink">{{ $step['title'] }}</h3>
                            <p class="mt-3 leading-relaxed text-ink/65">{{ $step['body'] }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

            {{-- ================= Skills marquee ================= --}}
            <section id="skills" class="border-y border-ink/10 bg-ink py-16">
                <div class="mx-auto max-w-7xl px-6 lg:px-10">
                    <div class="flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">
                        <div class="max-w-md">
                            <h2 class="text-3xl font-bold tracking-tight text-cream sm:text-4xl">Every skill counts.</h2>
                            <p class="mt-4 text-cream/60">Design, code, music, carpentry, languages, cooking — if someone wants it, it is worth something.</p>
                        </div>

                        <div class="flex max-w-xl flex-wrap gap-2.5">
                            @foreach (['Web development', 'Photography', 'Spanish lessons', 'Guitar', 'Logo design', 'Bike repair', 'Copywriting', 'Baking', 'Video editing', 'Tutoring', 'Woodwork', 'Yoga'] as $i => $skill)
                                <span class="rounded-full border px-4 py-2 text-sm font-semibold transition-colors duration-200 {{ $i % 4 === 0 ? 'border-ember bg-ember text-cream' : 'border-cream/20 text-cream/80 hover:border-cream/45 hover:text-cream' }}">
                                    {{ $skill }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            {{-- ================= Why barter ================= --}}
            <section id="why" class="mx-auto max-w-7xl px-6 py-20 lg:px-10 lg:py-28">
                <div class="grid gap-14 lg:grid-cols-2 lg:gap-20">
                    <div>
                        <p class="text-xs font-bold tracking-[0.2em] text-ember uppercase">Why barter</p>
                        <h2 class="mt-4 text-4xl font-bold tracking-tight text-ink sm:text-5xl">
                            The best rate you will ever get is <span class="text-ember">an even swap.</span>
                        </h2>
                        <p class="mt-6 text-lg leading-relaxed text-ink/65">
                            Freelance rates price most people out of the help they need. But almost everyone has something
                            to trade. SkillExchange turns that into a straightforward deal between two people.
                        </p>

                        <a href="{{ route('register') }}" data-brand-loader-link
                           class="group mt-9 inline-flex items-center gap-2.5 rounded-full bg-ink px-8 py-4 text-base font-bold text-cream shadow-xl shadow-ink/25 transition-all duration-200 hover:-translate-y-1 hover:bg-ink-700 hover:shadow-2xl hover:shadow-ink/35 active:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-ink focus-visible:ring-offset-4 focus-visible:ring-offset-cream">
                            Start trading
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                        </a>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        @php
                            $perks = [
                                ['t' => 'Reputation you own', 'b' => 'Every completed trade adds a rating to your profile, so good partners are easy to spot.'],
                                ['t' => 'Clear status at a glance', 'b' => 'Open, in progress, complete. You always know what is waiting on you.'],
                                ['t' => 'You choose the match', 'b' => 'Offers come to you. Accept the one that fits and decline the rest, no hard feelings.'],
                                ['t' => 'Nothing to pay', 'b' => 'No fees, no subscription, no commission on your trades. Ever.'],
                            ];
                        @endphp

                        @foreach ($perks as $perk)
                            <div class="rounded-2xl border border-ink/10 bg-white/60 p-6 transition-all duration-300 hover:-translate-y-1 hover:border-ember/30 hover:bg-white hover:shadow-xl hover:shadow-ink/10">
                                <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-ember text-cream shadow-md shadow-ember/30">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M20 6 9 17l-5-5"/></svg>
                                </span>
                                <h3 class="mt-4 font-bold text-ink">{{ $perk['t'] }}</h3>
                                <p class="mt-2 text-sm leading-relaxed text-ink/60">{{ $perk['b'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- ================= Final CTA ================= --}}
            <section class="mx-auto max-w-7xl px-6 pb-24 lg:px-10">
                <div class="relative overflow-hidden rounded-[2.5rem] bg-ember px-8 py-16 text-center shadow-2xl shadow-ember/30 sm:px-16 sm:py-20">
                    <div aria-hidden="true" class="pointer-events-none absolute inset-0">
                        <div class="absolute -top-24 -left-16 h-72 w-72 rounded-full bg-white/10 blur-2xl"></div>
                        <div class="absolute -right-20 -bottom-28 h-80 w-80 rounded-full bg-ink/15 blur-2xl"></div>
                    </div>

                    <div class="relative mx-auto max-w-2xl">
                        <h2 class="text-4xl font-bold tracking-tight text-cream sm:text-5xl">
                            Someone out there needs exactly what you can do.
                        </h2>
                        <p class="mt-5 text-lg text-cream/85">
                            Make an account, post your first trade, and find out who.
                        </p>

                        <div class="mt-10 flex flex-col justify-center gap-4 sm:flex-row">
                            <a href="{{ route('register') }}" data-brand-loader-link
                               class="group inline-flex items-center justify-center gap-2.5 rounded-full bg-cream px-9 py-4 text-base font-bold text-ember shadow-xl shadow-ink/25 transition-all duration-200 hover:-translate-y-1 hover:bg-white hover:shadow-2xl active:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-cream focus-visible:ring-offset-4 focus-visible:ring-offset-ember">
                                Sign up free
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                            </a>

                            <a href="{{ route('login') }}" data-brand-loader-link
                               class="inline-flex items-center justify-center rounded-full border-2 border-cream/45 px-9 py-4 text-base font-bold text-cream transition-all duration-200 hover:-translate-y-1 hover:border-cream hover:bg-cream/15 active:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-cream focus-visible:ring-offset-4 focus-visible:ring-offset-ember">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ================= Footer ================= --}}
            <footer class="border-t border-ink/10">
                <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-6 px-6 py-10 sm:flex-row lg:px-10">
                    <div class="flex items-center gap-2.5">
                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-ember">
                            <svg viewBox="0 0 24 24" fill="none" class="h-4 w-4 text-cream" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 8h14m-4-4 4 4-4 4"/><path d="M21 16H7m4-4-4 4 4 4"/>
                            </svg>
                        </span>
                        <span class="font-bold tracking-tight text-ink">Skill<span class="text-ember">Exchange</span></span>
                    </div>

                    <p class="text-sm text-ink/50">&copy; {{ date('Y') }} SkillExchange. Trade freely.</p>

                    <div class="flex items-center gap-5 text-sm font-semibold">
                        <a href="{{ route('login') }}" data-brand-loader-link class="text-ink/65 transition-colors hover:text-ember">Log in</a>
                        <a href="{{ route('register') }}" data-brand-loader-link class="text-ember transition-colors hover:text-ember-600">Sign up</a>
                    </div>
                </div>
            </footer>
        </div>

        <x-brand-loader />
    </body>
</html>
