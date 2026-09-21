<x-layouts::auth :title="__('Log in')">
    <div class="flex flex-col gap-7">
        <x-auth-header :title="__('Welcome back')" :description="__('Log in to pick up your trades where you left off.')" />

        <!-- Session Status -->
        <x-auth-session-status :status="session('status')" />

        <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-5" data-brand-loader-form>
            @csrf

            <!-- Email Address -->
            <flux:input
                name="email"
                :label="__('Email address')"
                :value="old('email')"
                type="email"
                required
                autofocus
                autocomplete="email"
                placeholder="email@example.com"
            />

            <!-- Password -->
            <div class="relative">
                <flux:input
                    name="password"
                    :label="__('Password')"
                    type="password"
                    required
                    autocomplete="current-password"
                    :placeholder="__('Password')"
                    viewable
                />

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" wire:navigate
                       class="absolute top-0 text-sm font-medium text-ember transition-colors end-0 hover:text-ember-600">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Remember Me -->
            <flux:checkbox name="remember" :label="__('Remember me')" :checked="old('remember')" />

            <button type="submit" data-test="login-button"
                    class="group relative mt-1 inline-flex w-full items-center justify-center gap-2.5 overflow-hidden rounded-xl bg-ember px-6 py-3.5 text-base font-bold text-cream shadow-lg shadow-ember/35 transition-all duration-200 hover:-translate-y-0.5 hover:bg-ember-600 hover:shadow-xl hover:shadow-ember/45 active:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-ember focus-visible:ring-offset-4 focus-visible:ring-offset-white">
                <span class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/25 to-transparent transition-transform duration-700 group-hover:translate-x-full"></span>
                <span class="relative">{{ __('Log in') }}</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                     class="relative h-4 w-4 transition-transform duration-200 group-hover:translate-x-1">
                    <path d="M5 12h14M13 6l6 6-6 6"/>
                </svg>
            </button>
        </form>

        <div class="border-t border-ink/10 pt-6 text-center text-sm text-ink/60">
            <span>{{ __('Don\'t have an account?') }}</span>
            <a href="{{ route('register') }}" wire:navigate class="font-semibold text-ember transition-colors hover:text-ember-600">
                {{ __('Sign up') }}
            </a>
        </div>
    </div>
</x-layouts::auth>
