{{--
    Brand transition loader.

    Add `data-brand-loader-link` to any anchor that should play the
    animation before navigating, and `data-brand-loader-form` to any
    form that should play it on submit.
--}}
<div id="brand-loader" class="brand-loader pointer-events-none fixed inset-0 z-[100] flex items-center justify-center bg-cream" aria-hidden="true">
    <div class="flex flex-col items-center gap-6">
        <div class="relative">
            {{-- Orbiting ring --}}
            <span class="brand-loader__ring absolute -inset-3.5 rounded-full border-2 border-ember/15 border-t-ember"></span>

            {{-- Spinning mark --}}
            <span class="brand-loader__mark flex h-16 w-16 items-center justify-center rounded-2xl bg-ember shadow-xl shadow-ember/40">
                <svg viewBox="0 0 24 24" fill="none" class="h-8 w-8 text-cream" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 8h14m-4-4 4 4-4 4"/>
                    <path d="M21 16H7m4-4-4 4 4 4"/>
                </svg>
            </span>
        </div>

        <span class="brand-loader__label text-sm font-bold tracking-tight text-ink">Skill<span class="text-ember">Exchange</span></span>
    </div>
</div>

<script>
    (function () {
        var loader = document.getElementById('brand-loader');

        if (! loader) {
            return;
        }

        var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        var hold = reduceMotion ? 0 : 850;
        var showing = false;

        function show() {
            if (showing) {
                return;
            }

            showing = true;
            loader.classList.add('is-visible');
        }

        function hide() {
            showing = false;
            loader.classList.remove('is-visible');
        }

        document.querySelectorAll('a[data-brand-loader-link]').forEach(function (link) {
            link.addEventListener('click', function (event) {
                // Let the browser handle modified clicks (new tab, download, etc.).
                if (event.metaKey || event.ctrlKey || event.shiftKey || event.altKey || event.button !== 0) {
                    return;
                }

                event.preventDefault();
                show();

                window.setTimeout(function () {
                    window.location.href = link.href;
                }, hold);
            });
        });

        document.querySelectorAll('form[data-brand-loader-form]').forEach(function (form) {
            form.addEventListener('submit', function () {
                show();
            });
        });

        // A page restored from the back/forward cache must not keep the overlay up.
        window.addEventListener('pageshow', hide);
    })();
</script>
