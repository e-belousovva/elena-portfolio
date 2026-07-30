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
