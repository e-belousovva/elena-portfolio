<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        @page { margin: 22px 26px; }
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 10px;
            line-height: 1.45;
            color: #1e293b;
        }
        h1 {
            font-size: 20px;
            color: #0f172a;
            margin: 0 0 3px 0;
        }
        .subtitle {
            font-size: 11px;
            color: #0284c7;
            font-weight: bold;
            margin: 0 0 8px 0;
        }
        .contacts {
            font-size: 9px;
            color: #475569;
            margin: 0 0 12px 0;
            padding: 0 0 8px 0;
            border-bottom: 2px solid #0ea5e9;
        }
        .contacts span {
            display: inline-block;
            margin-right: 12px;
        }
        h2 {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            color: #0f172a;
            border-bottom: 1px solid #cbd5e1;
            padding: 0 0 4px 0;
            margin: 14px 0 8px 0;
        }
        .about {
            font-size: 10px;
            color: #334155;
            margin: 0 0 8px 0;
            text-align: justify;
        }
        .label {
            font-weight: bold;
            color: #0f172a;
            margin: 6px 0 3px 0;
        }
        .block {
            margin: 0 0 6px 12px;
        }
        .job {
            margin: 0 0 12px 0;
            page-break-inside: avoid;
        }
        .job-title {
            font-size: 11px;
            font-weight: bold;
            color: #0f172a;
            margin: 0 0 2px 0;
        }
        .job-meta {
            font-size: 9px;
            color: #64748b;
            margin: 0 0 4px 0;
        }
        .job-company {
            color: #0284c7;
            font-weight: bold;
        }
        .job-body {
            margin: 0 0 0 12px;
        }
        .stack {
            font-size: 9px;
            color: #475569;
            margin: 0 0 4px 0;
        }
        .subproject {
            font-weight: bold;
            color: #0f172a;
            font-size: 10px;
            margin: 6px 0 2px 0;
        }
        table.list {
            width: 100%;
            border-collapse: collapse;
            margin: 0 0 4px 0;
        }
        table.list td {
            vertical-align: top;
            padding: 1px 0 2px 0;
            font-size: 10px;
            color: #334155;
        }
        table.list td.bullet {
            width: 14px;
            color: #0284c7;
            font-weight: bold;
            padding-right: 4px;
        }
        table.list.nested {
            margin-left: 10px;
            width: calc(100% - 10px);
        }
        table.skills {
            width: 100%;
            border-collapse: collapse;
            margin: 2px 0 0 0;
        }
        table.skills td {
            padding: 4px 8px;
            border-bottom: 1px solid #e2e8f0;
            vertical-align: top;
            font-size: 9px;
        }
        table.skills td.cat {
            width: 30%;
            font-weight: bold;
            color: #0f172a;
            padding-left: 4px;
        }
        .edu, .lang-row {
            margin: 0 0 3px 12px;
            color: #334155;
        }
        .edu strong, .lang-row strong {
            color: #0f172a;
        }
    </style>
</head>
<body>
    @php
        $r = trans('resume');
    @endphp

    <h1>{{ $r['name'] }}</h1>
    <div class="subtitle">{{ $r['title'] }}</div>
    <div class="contacts">
        <span>{{ $r['location'] }}</span>
        <span>{{ $r['email'] }}</span>
        <span>{{ $r['phone'] }}</span>
        <span>Telegram: {{ $r['telegram'] }}</span>
    </div>

    <h2>{{ $r['about_title'] }}</h2>
    <p class="about">{{ $r['about'] }}</p>

    <div class="label">{{ $r['competencies_title'] }}:</div>
    <div class="block">
        <table class="list">
            @foreach ($r['competencies'] as $item)
                <tr>
                    <td class="bullet">•</td>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <h2>{{ $r['experience_title'] }}</h2>
    @foreach ($r['jobs'] as $job)
        <div class="job">
            <div class="job-title">{{ $job['role'] }}</div>
            <div class="job-meta">
                <span class="job-company">{{ $job['company'] }}</span>
                · {{ $job['period'] }}
            </div>

            <div class="job-body">
                @if (!empty($job['project']))
                    <div class="stack">
                        <span class="label" style="display:inline;">{{ $job['project_label'] ?? $r['project_label'] }}:</span>
                        {{ $job['project'] }}
                    </div>
                @endif

                @if (!empty($job['stack']))
                    <div class="stack">
                        <span class="label" style="display:inline;">{{ $r['stack_label'] }}:</span>
                        {{ $job['stack'] }}
                    </div>
                @endif

                @if (!empty($job['results']))
                    <div class="label">{{ $r['results_label'] }}:</div>
                    <table class="list">
                        @foreach ($job['results'] as $point)
                            <tr>
                                <td class="bullet">•</td>
                                <td>{{ $point }}</td>
                            </tr>
                        @endforeach
                    </table>
                @endif

                @if (!empty($job['other_projects']))
                    <div class="label">{{ $r['other_projects_label'] }}:</div>
                    <table class="list">
                        @foreach ($job['other_projects'] as $point)
                            <tr>
                                <td class="bullet">•</td>
                                <td>{{ $point }}</td>
                            </tr>
                        @endforeach
                    </table>
                @endif

                @if (!empty($job['projects']))
                    <div class="label">{{ $r['key_projects_label'] }}:</div>
                    @foreach ($job['projects'] as $project)
                        <div class="subproject">{{ $project['title'] }}</div>
                        <table class="list nested">
                            @foreach ($project['points'] as $point)
                                <tr>
                                    <td class="bullet">•</td>
                                    <td>{{ $point }}</td>
                                </tr>
                            @endforeach
                        </table>
                    @endforeach
                @endif
            </div>
        </div>
    @endforeach

    <h2>{{ $r['skills_title'] }}</h2>
    <table class="skills">
        @foreach ($r['skills'] as $category => $tech)
            <tr>
                <td class="cat">{{ $category }}</td>
                <td>{{ $tech }}</td>
            </tr>
        @endforeach
    </table>

    <h2>{{ $r['education_title'] }}</h2>
    <div class="edu"><strong>{{ $r['education']['school'] }}</strong></div>
    <div class="edu">{{ $r['education']['faculty'] }}</div>
    <div class="edu">{{ $r['education']['specialty'] }}</div>
    <div class="edu">{{ $r['education']['year'] }}</div>

    <h2>{{ $r['languages_title'] }}</h2>
    @foreach ($r['languages'] as $lang)
        <div class="lang-row"><strong>{{ $lang['name'] }}:</strong> {{ $lang['level'] }}</div>
    @endforeach

    <h2>{{ $r['extra_title'] }}</h2>
    <div class="block">
        <table class="list">
            @foreach ($r['extra'] as $item)
                <tr>
                    <td class="bullet">•</td>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <h2>{{ $r['contact_title'] }}</h2>
    <div class="edu">Email: {{ $r['email'] }}</div>
    <div class="edu">{{ app()->getLocale() === 'ru' ? 'Телефон' : 'Phone' }}: {{ $r['phone'] }}</div>
    <div class="edu">Telegram: {{ $r['telegram'] }}</div>
</body>
</html>
