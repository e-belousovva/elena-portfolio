@extends('layouts.app')

@section('title', __('portfolio.title'))

@section('content')

<section class="min-h-screen flex items-center relative overflow-hidden bg-[#0A0A0F]">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-20 right-20 w-96 h-96 bg-[#4A90D9]/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-64 h-64 bg-[#00D4AA]/5 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10 py-12">
        <div class="max-w-4xl">
            <div class="glass p-6 mb-8 font-mono text-sm" style="background: rgba(0, 0, 0, 0.5);">
                <div class="text-white/30">$ whoami</div>
                <div class="text-teal mt-1">{{ __('portfolio.hero.whoami') }}</div>
                <div class="text-white/30 mt-2">$ role</div>
                <div class="text-blue mt-1">{{ __('portfolio.hero.role') }}</div>
                <div class="text-white/30 mt-2">$ experience</div>
                <div class="text-white mt-1">{{ __('portfolio.hero.experience_line', ['years' => 5]) }}</div>
                <div class="text-white/30 mt-2">$ skills</div>
                <div class="flex flex-wrap gap-2 mt-1">
                    <span class="tech-tag">PHP 8</span>
                    <span class="tech-tag">Laravel</span>
                    <span class="tech-tag tech-tag-teal">Symfony</span>
                    <span class="tech-tag">PostgreSQL</span>
                    <span class="tech-tag tech-tag-purple">Kubernetes</span>
                    <span class="tech-tag tech-tag-teal">Docker</span>
                    <span class="tech-tag">Redis</span>
                    <span class="tech-tag tech-tag-purple">RabbitMQ</span>
                    <span class="tech-tag tech-tag-teal">WebSocket</span>
                    <span class="tech-tag">REST API</span>
                </div>
                <div class="text-white/30 mt-2">$ projects</div>
                <div class="text-white mt-1">{{ __('portfolio.hero.projects_line') }}</div>
                <div class="text-white/30 mt-2">$ available_for_work</div>
                <div class="text-teal mt-1">{{ __('portfolio.hero.available') }}</div>
                <div class="text-white/30 mt-2">$ echo "{{ __('portfolio.hero.echo_cmd') }}"</div>
                <div class="text-white/50 mt-1 typing-cursor">{{ __('portfolio.hero.echo_result') }}</div>
            </div>

            <div class="hero-actions">
                <a href="#projects" class="btn-primary">{{ __('portfolio.hero.btn_projects') }}</a>
                <a href="#contact" class="btn-outline">{{ __('portfolio.hero.btn_contact') }}</a>
                <a href="{{ route('resume.download') }}" class="btn-outline">{{ __('portfolio.hero.btn_cv') }}</a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12 pt-8 border-t border-white/5">
                <div>
                    <div class="counter" x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 5) count++ }, 200)">
                        <span x-text="count"></span>+
                    </div>
                    <div class="text-xs text-white/40 font-mono">{{ __('portfolio.hero.stat_years') }}</div>
                </div>
                <div>
                    <div class="counter" x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 10) count++ }, 100)">
                        <span x-text="count"></span>+
                    </div>
                    <div class="text-xs text-white/40 font-mono">{{ __('portfolio.hero.stat_projects') }}</div>
                </div>
                <div>
                    <div class="counter" x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 3) count++ }, 300)">
                        <span x-text="count"></span>
                    </div>
                    <div class="text-xs text-white/40 font-mono">{{ __('portfolio.hero.stat_teams') }}</div>
                </div>
                <div>
                    <div class="counter" x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 85) count++ }, 20)">
                        <span x-text="count"></span>%
                    </div>
                    <div class="text-xs text-white/40 font-mono">{{ __('portfolio.hero.stat_coverage') }}</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-24 bg-[#111118]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <span class="text-teal font-mono text-sm">#</span>
                <h2 class="text-2xl font-bold font-mono">{{ __('portfolio.about.title') }}</h2>
                <div class="flex-1 h-px bg-gradient-to-r from-white/10 to-transparent"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                <div class="md:col-span-3">
                    <p class="text-white/70 text-lg leading-relaxed mb-4">
                        {{ __('portfolio.about.p1_before') }}<span class="text-white font-medium">{{ __('portfolio.about.p1_role') }}</span>{{ __('portfolio.about.p1_after') }}
                    </p>
                    <p class="text-white/50 leading-relaxed mb-4">
                        {{ __('portfolio.about.p2') }}
                    </p>
                    <p class="text-white/50 leading-relaxed">
                        {{ __('portfolio.about.p3') }}
                    </p>

                    <div class="flex flex-wrap gap-6 mt-6">
                        <div>
                            <div class="text-xs text-white/30 font-mono">{{ __('portfolio.about.location_label') }}</div>
                            <div class="text-sm text-white/70">{{ __('portfolio.about.location') }}</div>
                        </div>
                        <div>
                            <div class="text-xs text-white/30 font-mono">{{ __('portfolio.about.email_label') }}</div>
                            <div class="text-sm text-white/70">lena_helen_b@mail.ru</div>
                        </div>
                        <div>
                            <div class="text-xs text-white/30 font-mono">{{ __('portfolio.about.phone_label') }}</div>
                            <div class="text-sm text-white/70">+375 (44) 778-02-52</div>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <div class="glass p-6">
                        <div class="text-xs text-white/30 font-mono mb-2">{{ __('portfolio.about.stack_title') }}</div>
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-white/50">PHP 8</span>
                                <span class="text-teal">★★★★★</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-white/50">Laravel</span>
                                <span class="text-teal">★★★★★</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-white/50">PostgreSQL</span>
                                <span class="text-teal">★★★★★</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-white/50">Docker / K8s</span>
                                <span class="text-teal">★★★★☆</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-white/50">RabbitMQ</span>
                                <span class="text-teal">★★★★☆</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="experience" class="py-24 bg-[#0A0A0F]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <span class="text-teal font-mono text-sm">#</span>
                <h2 class="text-2xl font-bold font-mono">{{ __('portfolio.experience.title') }}</h2>
                <div class="flex-1 h-px bg-gradient-to-r from-white/10 to-transparent"></div>
            </div>

            <div class="space-y-8">
                @php
                    $jobs = [
                        'innopolis' => [
                            'badge' => 'tech-tag-teal',
                            'tags' => ['PHP 8', 'Laravel', 'PostgreSQL', 'Kubernetes', 'Docker', 'Keycloak', 'RabbitMQ', 'WebSocket', 'MLflow', 'MinIO'],
                        ],
                        'indev' => [
                            'badge' => 'tech-tag-purple',
                            'tags' => ['PHP 8', 'Laravel', 'PostgreSQL', 'Redis', 'Docker', 'RabbitMQ'],
                        ],
                        'coda' => [
                            'badge' => '',
                            'tags' => ['PHP 8', 'Symfony 5/6', 'PostgreSQL', 'MySQL', 'Docker', 'PHPUnit'],
                        ],
                        'bright' => [
                            'badge' => 'tech-tag-teal',
                            'tags' => ['PHP 8', 'Laravel', 'PostgreSQL', 'MySQL', 'Redis', 'Docker', 'Swagger'],
                        ],
                    ];
                @endphp

                @foreach ($jobs as $jobKey => $meta)
                    @php
                        $job = trans('portfolio.experience.jobs.'.$jobKey);
                    @endphp
                    <div class="glass p-6">
                        <div class="flex flex-wrap items-start justify-between gap-4">
                            <div>
                                <div class="text-xs text-teal font-mono">{{ $job['period'] }}</div>
                                <h3 class="text-xl font-bold">{{ $job['role'] }}</h3>
                                <div class="text-white/50 font-mono text-sm">{{ $job['company'] }}</div>
                            </div>
                            <span class="tech-tag {{ $meta['badge'] }}">{{ $job['badge'] }}</span>
                        </div>

                        <div class="mt-4 flex flex-wrap gap-1.5">
                            @foreach ($meta['tags'] as $tag)
                                <span class="tech-tag {{ in_array($tag, ['MLflow'], true) ? 'tech-tag-purple' : '' }} {{ in_array($tag, ['MinIO', 'PHPUnit'], true) ? 'tech-tag-teal' : '' }}">{{ $tag }}</span>
                            @endforeach
                        </div>

                        <ul class="mt-4 space-y-2 text-sm text-white/60 leading-relaxed">
                            @foreach ($job['points'] as $point)
                                <li>• {{ $point }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- ======================================== -->
<!-- ПРОЕКТЫ (ПОЛНЫЙ СПИСОК) -->
<!-- ======================================== -->
<section id="projects" class="py-24 bg-[#111118]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <span class="text-teal font-mono text-sm">#</span>
                <h2 class="text-2xl font-bold font-mono">{{ __('portfolio.projects.title') }}</h2>
                <div class="flex-1 h-px bg-gradient-to-r from-white/10 to-transparent"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @php
                    $projectMeta = [
                        'mlops' => [
                            'icon' => '🧠',
                            'border' => 'border-teal',
                            'tags' => [
                                ['PHP 8'], ['Laravel'], ['Kubernetes'], ['Keycloak'], ['RabbitMQ'], ['WebSocket'],
                                ['MLflow', 'teal'], ['MinIO', 'purple'],
                            ],
                        ],
                        'cms' => [
                            'icon' => '📝',
                            'border' => 'border-blue',
                            'tags' => [
                                ['PHP 8'], ['Laravel'], ['PostgreSQL'], ['Redis'], ['RabbitMQ'],
                                ['PHPUnit', 'teal'],
                            ],
                        ],
                        'promo' => [
                            'icon' => '🍫',
                            'border' => 'border-gold',
                            'tags' => [
                                ['PHP'], ['Laravel'],
                                ['SSO OAuth2', 'teal'],
                            ],
                        ],
                        'energy' => [
                            'icon' => '⚡',
                            'border' => 'border-orange',
                            'tags' => [
                                ['PHP'], ['Laravel'], ['PostgreSQL'], ['REST API'],
                            ],
                        ],
                        'office' => [
                            'icon' => '🏢',
                            'border' => 'border-purple',
                            'tags' => [
                                ['PHP 8'], ['Symfony 5/6'], ['PostgreSQL'], ['MySQL'],
                                ['PHPUnit', 'teal'],
                            ],
                        ],
                        'cars' => [
                            'icon' => '🚗',
                            'border' => 'border-yellow',
                            'tags' => [
                                ['PHP'], ['Laravel'], ['PostgreSQL'],
                                ['PHPUnit', 'teal'],
                            ],
                        ],
                        'alfa' => [
                            'icon' => '💳',
                            'border' => 'border-teal',
                            'tags' => [
                                ['PHP'], ['Laravel'], ['PostgreSQL'], ['MySQL'], ['Excel'],
                            ],
                        ],
                        'law' => [
                            'icon' => '📜',
                            'border' => 'border-red',
                            'tags' => [
                                ['PHP 8'], ['Laravel'], ['PostgreSQL'], ['Swagger'], ['Docker'],
                            ],
                        ],
                        'bank' => [
                            'icon' => '🏦',
                            'border' => 'border-green',
                            'tags' => [
                                ['PHP'], ['Laravel'], ['MySQL'], ['Redis'],
                                ['Blade', 'teal'],
                            ],
                        ],
                        'kz' => [
                            'icon' => '🏗️',
                            'border' => 'border-pink',
                            'tags' => [
                                ['PHP'], ['Laravel'], ['PostgreSQL'], ['Redis'],
                                ['Blade', 'teal'],
                            ],
                        ],
                        'edu' => [
                            'icon' => '🎓',
                            'border' => 'border-cyan',
                            'tags' => [
                                ['PHP'], ['Laravel'], ['MySQL'], ['REST API'],
                                ['Swagger', 'teal'],
                            ],
                        ],
                    ];
                @endphp

                @foreach ($projectMeta as $key => $meta)
                    @php
                        $project = trans('portfolio.projects.items.'.$key);
                    @endphp
                    <div class="glass p-6 group border-l-2 {{ $meta['border'] }}">
                        <div class="flex items-start justify-between">
                            <span class="text-3xl">{{ $meta['icon'] }}</span>
                            <span class="text-xs text-teal font-mono">{{ $project['period'] }}</span>
                        </div>
                        <h3 class="text-lg font-bold mt-3">{{ $project['name'] }}</h3>
                        <p class="text-sm text-white/50 mt-1">{{ $project['desc'] }}</p>
                        <div class="flex flex-wrap gap-1.5 mt-3">
                            @foreach ($meta['tags'] as $tag)
                                <span @class([
                                    'tech-tag',
                                    'tech-tag-teal' => ($tag[1] ?? null) === 'teal',
                                    'tech-tag-purple' => ($tag[1] ?? null) === 'purple',
                                ])>{{ $tag[0] }}</span>
                            @endforeach
                        </div>
                        <ul class="mt-3 space-y-1 text-xs text-white/50">
                            @foreach ($project['points'] as $point)
                                <li>• {{ $point }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- УСЛУГИ / ЧТО МОГУ РАЗРАБОТАТЬ --}}
<section
    id="services"
    class="scroll-mt-20 py-24 bg-[#0A0A0F]"
    x-data="portfolioCases(@js(__('portfolio.cases.items')))"
>
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex items-center gap-3 mb-4">
            <span class="text-teal font-mono text-sm">#</span>
            <h2 class="text-2xl font-bold font-mono">{{ __('portfolio.cases.title') }}</h2>
            <div class="flex-1 h-px bg-gradient-to-r from-white/10 to-transparent"></div>
        </div>

        <p class="text-white/40 text-sm mb-8">{{ __('portfolio.cases.lead') }}</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <template x-for="(item, index) in cases" :key="index">
                <article
                    class="glass p-4 group cursor-pointer hover:border-teal/30 transition-all duration-300"
                    :class="item.empty && 'case-card--empty'"
                    @click="openModal(index)"
                    @keydown.enter.prevent="openModal(index)"
                    tabindex="0"
                    role="button"
                >
                    <div class="case-media-frame relative aspect-[16/10] overflow-hidden rounded-xl bg-[#111118]">
                        <template x-if="item.empty">
                            <div class="case-empty-slot">
                                <span class="case-empty-slot__label font-mono" x-text="item.emptyLabel"></span>
                                <p class="case-empty-slot__hint" x-text="item.emptyHint"></p>
                            </div>
                        </template>
                        <template x-if="!item.empty && isVideo(mediaSrc(item))">
                            <video
                                class="case-media"
                                :src="mediaSrc(item)"
                                muted
                                loop
                                playsinline
                                autoplay
                                preload="metadata"
                            ></video>
                        </template>
                        <template x-if="!item.empty && !isVideo(mediaSrc(item))">
                            <img
                                :src="mediaSrc(item)"
                                :alt="item.title"
                                class="case-media"
                                loading="lazy"
                            >
                        </template>
                        <div x-show="!item.empty" class="pointer-events-none absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-[#0A0A0F]/80 to-transparent"></div>
                        <div class="absolute bottom-3 left-3 right-3 flex items-end justify-between">
                            <span class="font-mono text-xs text-teal" x-text="item.year"></span>
                            <span class="font-mono text-xs text-white/30" x-text="item.type"></span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex items-start justify-between gap-3">
                            <h3 class="text-lg font-bold text-white" x-text="item.title"></h3>
                            <span class="shrink-0 rounded-full bg-teal/10 px-2 py-0.5 font-mono text-xs text-teal" x-text="item.category"></span>
                        </div>
                        <p class="mt-1 text-sm text-white/40" x-text="item.description"></p>
                        <div class="mt-3 flex flex-wrap gap-1.5">
                            <template x-for="tech in item.tech" :key="tech">
                                <span class="tech-tag" x-text="tech"></span>
                            </template>
                        </div>
                        <div class="mt-4 flex items-center gap-2">
                            <button
                                type="button"
                                class="btn-outline text-sm"
                                @click.stop="openModal(index, 'desktop')"
                            >
                                {{ __('portfolio.cases.view') }}
                            </button>
                            <button
                                type="button"
                                class="case-device-btn"
                                x-show="!item.empty"
                                @click.stop="openModal(index, 'mobile')"
                                title="{{ __('portfolio.cases.preview_mobile') }}"
                                aria-label="{{ __('portfolio.cases.preview_mobile') }}"
                            >
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.5 1.5h3a1 1 0 011 1V3h-5v-.5a1 1 0 011-1zM8.5 3h7a1.5 1.5 0 011.5 1.5v15A1.5 1.5 0 0115.5 21h-7A1.5 1.5 0 017 19.5v-15A1.5 1.5 0 018.5 3zM10 18.5h4"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </article>
            </template>
        </div>

        <div class="mt-8 text-center">
            <a href="#contact" class="font-mono text-sm text-teal transition-colors hover:text-teal/80">
                {{ __('portfolio.cases.all_projects') }}
            </a>
        </div>
    </div>

    {{-- Модалка кейса --}}
    <div
        x-cloak
        x-show="open"
        x-transition.opacity.duration.200ms
        class="fixed inset-0 z-[100] flex items-center justify-center bg-[#0A0A0F]/95 p-4 backdrop-blur-xl"
        @keydown.escape.window="closeModal()"
        @click.self="closeModal()"
        role="dialog"
        aria-modal="true"
    >
        <div
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 translate-y-3"
            x-transition:enter-end="opacity-100 translate-y-0"
            class="glass relative max-h-[90vh] w-full max-w-3xl overflow-y-auto rounded-2xl border border-white/10 p-6"
            @click.stop
        >
            <button
                type="button"
                class="absolute right-4 top-4 text-white/50 transition-colors hover:text-white"
                @click="closeModal()"
                aria-label="Close"
            >
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <template x-if="currentCase">
                <div class="space-y-4 pr-6">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <span class="font-mono text-xs text-teal" x-text="currentCase.year"></span>
                            <h2 class="text-2xl font-bold text-white" x-text="currentCase.title"></h2>
                            <span class="text-sm text-white/40" x-text="currentCase.category"></span>
                        </div>
                        <span class="shrink-0 rounded-full bg-white/5 px-3 py-1 font-mono text-xs text-white/30" x-text="currentCase.type"></span>
                    </div>

                    {{-- Превью: desktop / mobile / empty slot --}}
                    <div class="rounded-xl border border-white/5 bg-[#111118] p-3 sm:p-4">
                        <template x-if="currentCase.empty">
                            <div class="case-empty-slot case-empty-slot--modal">
                                <span class="case-empty-slot__label font-mono" x-text="currentCase.emptyLabel"></span>
                                <p class="case-empty-slot__hint" x-text="currentCase.emptyHint"></p>
                            </div>
                        </template>

                        <div x-show="!currentCase.empty">
                            <div class="mb-3 flex items-center justify-between gap-3">
                                <span class="font-mono text-xs text-white/30" x-text="previewMode === 'mobile' ? '{{ __('portfolio.cases.preview_mobile') }}' : '{{ __('portfolio.cases.preview_desktop') }}'"></span>
                                <div class="flex items-center gap-1 rounded-full border border-white/10 bg-black/30 p-1">
                                    <button
                                        type="button"
                                        class="case-device-btn"
                                        :class="previewMode === 'desktop' && 'is-active'"
                                        @click="setPreviewMode('desktop')"
                                        title="{{ __('portfolio.cases.preview_desktop') }}"
                                        aria-label="{{ __('portfolio.cases.preview_desktop') }}"
                                    >
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 5.25h16.5A.75.75 0 0121 6v9.75a.75.75 0 01-.75.75H3.75a.75.75 0 01-.75-.75V6a.75.75 0 01.75-.75zM8.25 18.75h7.5M12 16.5v2.25"/>
                                        </svg>
                                    </button>
                                    <button
                                        type="button"
                                        class="case-device-btn"
                                        :class="previewMode === 'mobile' && 'is-active'"
                                        @click="setPreviewMode('mobile')"
                                        title="{{ __('portfolio.cases.preview_mobile') }}"
                                        aria-label="{{ __('portfolio.cases.preview_mobile') }}"
                                    >
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.5 1.5h3a1 1 0 011 1V3h-5v-.5a1 1 0 011-1zM8.5 3h7a1.5 1.5 0 011.5 1.5v15A1.5 1.5 0 0115.5 21h-7A1.5 1.5 0 017 19.5v-15A1.5 1.5 0 018.5 3zM10 18.5h4"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div x-show="previewMode === 'desktop'" class="overflow-hidden rounded-lg bg-[#0A0A0F]">
                                <template x-if="hasDemo && !iframeFailed">
                                    <iframe
                                        :src="currentCase.demoUrl"
                                        class="case-preview-desktop"
                                        title="Desktop preview"
                                        loading="lazy"
                                        x-on:error="iframeFailed = true"
                                    ></iframe>
                                </template>
                                <template x-if="(!hasDemo || iframeFailed) && isVideo(mediaSrc(currentCase, 'desktop'))">
                                    <video
                                        class="case-media case-media--modal"
                                        :src="mediaSrc(currentCase, 'desktop')"
                                        muted
                                        loop
                                        playsinline
                                        autoplay
                                        controls
                                        preload="metadata"
                                    ></video>
                                </template>
                                <template x-if="(!hasDemo || iframeFailed) && !isVideo(mediaSrc(currentCase, 'desktop')) && mediaSrc(currentCase, 'desktop')">
                                    <img :src="mediaSrc(currentCase, 'desktop')" :alt="currentCase.title" class="case-media case-media--modal">
                                </template>
                            </div>

                            <div x-show="previewMode === 'mobile'" class="flex justify-center py-2">
                                <div class="phone-frame">
                                    <div class="phone-frame__notch" aria-hidden="true"></div>
                                    <div class="phone-frame__screen">
                                        <template x-if="hasDemo && !iframeFailed">
                                            <iframe
                                                :src="currentCase.demoUrl"
                                                class="phone-frame__iframe"
                                                title="Mobile preview"
                                                loading="lazy"
                                                x-on:error="iframeFailed = true"
                                            ></iframe>
                                        </template>
                                        <template x-if="(!hasDemo || iframeFailed) && isVideo(mediaSrc(currentCase, 'mobile'))">
                                            <video
                                                class="phone-frame__image"
                                                :src="mediaSrc(currentCase, 'mobile')"
                                                muted
                                                loop
                                                playsinline
                                                autoplay
                                                preload="metadata"
                                            ></video>
                                        </template>
                                        <template x-if="(!hasDemo || iframeFailed) && !isVideo(mediaSrc(currentCase, 'mobile')) && mediaSrc(currentCase, 'mobile')">
                                            <img :src="mediaSrc(currentCase, 'mobile')" :alt="currentCase.title" class="phone-frame__image">
                                        </template>
                                    </div>
                                    <div class="phone-frame__home" aria-hidden="true"></div>
                                </div>
                            </div>

                            <p x-show="hasDemo && iframeFailed" class="mt-3 text-center font-mono text-xs text-white/35" x-cloak>
                                {{ __('portfolio.cases.iframe_fallback') }}
                            </p>
                        </div>
                    </div>

                    <p class="leading-relaxed text-white/60" x-text="currentCase.fullDescription"></p>

                    <div>
                        <span class="mb-2 block font-mono text-xs text-white/30">{{ __('portfolio.cases.tech') }}</span>
                        <div class="flex flex-wrap gap-1.5">
                            <template x-for="tech in currentCase.tech" :key="tech">
                                <span class="tech-tag" x-text="tech"></span>
                            </template>
                        </div>
                    </div>

                    <div>
                        <span class="mb-2 block font-mono text-xs text-white/30">{{ __('portfolio.cases.results') }}</span>
                        <ul class="space-y-1 text-sm text-white/50">
                            <template x-for="result in currentCase.results" :key="result">
                                <li x-text="'• ' + result"></li>
                            </template>
                        </ul>
                    </div>

                    <div class="flex flex-wrap gap-3 border-t border-white/5 pt-4">
                        <a
                            :href="currentCase.demoUrl || '#contact'"
                            class="btn-primary text-sm"
                            @click="closeModal()"
                        >{{ __('portfolio.cases.demo') }}</a>
                        <template x-if="currentCase.githubUrl && currentCase.githubUrl !== '#'">
                            <a
                                :href="currentCase.githubUrl"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="btn-outline text-sm"
                                @click.stop
                            >{{ __('portfolio.cases.github') }}</a>
                        </template>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>

<section id="contact" class="py-24 bg-[#0A0A0F]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="max-w-3xl mx-auto text-center">
            <div class="flex items-center gap-3 justify-center mb-8">
                <span class="text-teal font-mono text-sm">#</span>
                <h2 class="text-2xl font-bold font-mono">{{ __('portfolio.contact.title') }}</h2>
            </div>

            <p class="text-white/50 text-lg mb-8">
                {{ __('portfolio.contact.lead') }}
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="glass p-6">
                    <div class="text-2xl mb-2">📧</div>
                    <div class="text-sm text-white/70">{{ __('portfolio.contact.email') }}</div>
                    <a href="mailto:lena_helen_b@mail.ru" class="text-teal hover:underline text-sm font-mono">
                        lena_helen_b@mail.ru
                    </a>
                </div>
                <div class="glass p-6">
                    <div class="text-2xl mb-2">📱</div>
                    <div class="text-sm text-white/70">{{ __('portfolio.contact.phone') }}</div>
                    <a href="tel:+375447780252" class="text-teal hover:underline text-sm font-mono">
                        +375 (44) 778-02-52
                    </a>
                </div>
                <div class="glass p-6">
                    <div class="text-2xl mb-2">💬</div>
                    <div class="text-sm text-white/70">{{ __('portfolio.contact.telegram') }}</div>
                    <a href="https://t.me/B_Elena" target="_blank" rel="noopener noreferrer" class="text-teal hover:underline text-sm font-mono">
                        @B_Elena
                    </a>
                </div>
            </div>

            <div class="mt-8 glass p-6">
                <p class="text-sm text-white/40 font-mono">
                    $ echo "{{ __('portfolio.contact.echo_cmd') }}"<br>
                    <span class="text-teal">{{ __('portfolio.contact.echo_result') }}</span>
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
