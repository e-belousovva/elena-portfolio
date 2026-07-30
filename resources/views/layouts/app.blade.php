<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', __('portfolio.title'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    @livewireStyles
</head>
<body x-data="{ mobileOpen: false }">

<header class="fixed top-0 left-0 right-0 z-50 bg-[#0A0A0F]/90 backdrop-blur-xl border-b border-white/5">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex items-center justify-between h-16 gap-3">
            <a href="{{ route('home') }}" class="flex items-center gap-2 sm:gap-3 min-w-0 group">
                <span class="brand-mark" aria-hidden="true">
                    <span>&lt;/&gt;</span>
                </span>
                <span class="leading-tight min-w-0">
                    <span class="block text-sm font-semibold text-white truncate">
                        {{ __('portfolio.nav.brand') }}
                    </span>
                    <span class="hidden sm:block text-[11px] font-mono text-white/40 tracking-wide truncate">
                        {{ __('portfolio.nav.brand_role') }}
                    </span>
                </span>
            </a>

            <nav class="hidden md:flex items-center gap-6">
                <a href="{{ route('home') }}#about" class="text-sm text-white/50 hover:text-white transition-colors font-mono">{{ __('portfolio.nav.about') }}</a>
                <a href="{{ route('home') }}#experience" class="text-sm text-white/50 hover:text-white transition-colors font-mono">{{ __('portfolio.nav.experience') }}</a>
                <a href="{{ route('home') }}#projects" class="text-sm text-white/50 hover:text-white transition-colors font-mono">{{ __('portfolio.nav.projects') }}</a>
                <a href="{{ route('home') }}#contact" class="text-sm text-white/50 hover:text-white transition-colors font-mono">{{ __('portfolio.nav.contact') }}</a>
            </nav>

            <div class="flex items-center gap-2 sm:gap-3 shrink-0">
                <div class="lang-switch {{ app()->getLocale() === 'en' ? 'is-en' : '' }}" aria-label="Language">
                    <span class="lang-switch__thumb" aria-hidden="true"></span>
                    <a
                        href="{{ route('locale.switch', 'ru') }}"
                        class="{{ app()->getLocale() === 'ru' ? 'is-active' : '' }}"
                        hreflang="ru"
                    >RU</a>
                    <a
                        href="{{ route('locale.switch', 'en') }}"
                        class="{{ app()->getLocale() === 'en' ? 'is-active' : '' }}"
                        hreflang="en"
                    >EN</a>
                </div>

                <a href="{{ route('resume.download') }}" class="hidden md:inline-flex btn-primary text-sm py-2 px-5">
                    {{ __('portfolio.nav.download_cv') }}
                </a>

                <button
                    type="button"
                    class="menu-toggle md:hidden"
                    @click="mobileOpen = !mobileOpen"
                    :aria-expanded="mobileOpen.toString()"
                    aria-label="Menu"
                >
                    <span class="menu-toggle__bar" :class="{ 'is-open': mobileOpen }"></span>
                </button>
            </div>
        </div>

        <nav
            x-show="mobileOpen"
            x-cloak
            x-transition
            class="md:hidden border-t border-white/5 py-3"
        >
            <a href="{{ route('home') }}#about" @click="mobileOpen = false" class="mobile-nav-link">{{ __('portfolio.nav.about') }}</a>
            <a href="{{ route('home') }}#experience" @click="mobileOpen = false" class="mobile-nav-link">{{ __('portfolio.nav.experience') }}</a>
            <a href="{{ route('home') }}#projects" @click="mobileOpen = false" class="mobile-nav-link">{{ __('portfolio.nav.projects') }}</a>
            <a href="{{ route('home') }}#contact" @click="mobileOpen = false" class="mobile-nav-link">{{ __('portfolio.nav.contact') }}</a>
            <a href="{{ route('resume.download') }}" @click="mobileOpen = false" class="btn-primary text-sm py-2.5 px-5 mt-3 w-full">
                {{ __('portfolio.nav.download_cv') }}
            </a>
        </nav>
    </div>
</header>

<main class="pt-16">
    @isset($header)
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-6">
            {{ $header }}
        </div>
    @endisset

    @hasSection('content')
        @yield('content')
    @else
        {{ $slot ?? '' }}
    @endif
</main>

<footer class="border-t border-white/5 py-8 bg-[#0A0A0F]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <span class="text-xs font-mono text-white/30">© 2026</span>
                <span class="text-xs font-mono text-white/50">{{ __('portfolio.hero.whoami') }}</span>
                <span class="text-xs font-mono text-white/30">•</span>
                <span class="text-xs font-mono text-teal">{{ __('portfolio.footer.role') }}</span>
            </div>
            <div class="flex items-center gap-6">
                <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="text-white/30 hover:text-white transition-colors text-sm font-mono">{{ __('portfolio.footer.github') }}</a>
                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="text-white/30 hover:text-white transition-colors text-sm font-mono">{{ __('portfolio.footer.linkedin') }}</a>
                <a href="mailto:lena_helen_b@mail.ru" class="text-white/30 hover:text-white transition-colors text-sm font-mono">{{ __('portfolio.footer.email') }}</a>
            </div>
        </div>
    </div>
</footer>

@livewireScripts
@stack('scripts')
</body>
</html>
