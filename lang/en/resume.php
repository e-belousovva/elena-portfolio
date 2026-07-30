<?php

return [
    'filename' => 'Elena_Okotchik_PHP_Developer.pdf',
    'name' => 'Elena Okotchik',
    'title' => 'Senior PHP Developer · Backend Architect',
    'location' => 'Minsk, Belarus',
    'email' => 'lena_helen_b@mail.ru',
    'phone' => '+375 (44) 778-02-52',
    'telegram' => '@B_Elena',
    'telegram_url' => 'https://t.me/B_Elena',

    'about_title' => 'About Me',
    'about' => 'Senior PHP Developer with 5+ years of experience in building complex backend systems and microservices architecture. Specializing in designing high-load APIs, integrations, database optimization, and DevOps practices. Experienced in leadership, international teams, and full-cycle product development from scratch.',

    'competencies_title' => 'Core Competencies',
    'competencies' => [
        'Microservices & REST API Architecture',
        'Database Design (PostgreSQL, MySQL)',
        'DevOps: Docker, Kubernetes, CI/CD',
        'Distributed Systems Development',
        'Team Lead & Development Management',
    ],

    'experience_title' => 'Work Experience',
    'project_label' => 'Project',
    'key_project_label' => 'Key Project',
    'stack_label' => 'Tech Stack',
    'results_label' => 'Achievements',
    'other_projects_label' => 'Other Projects',
    'key_projects_label' => 'Key Projects',

    'jobs' => [
        [
            'role' => 'Lead Backend Developer',
            'company' => 'Innopolis University',
            'period' => 'October 2024 — Present (1 year 10 months)',
            'project' => 'MLOps Platform',
            'stack' => 'PHP 8, Laravel, PostgreSQL, Kubernetes, Docker, Keycloak, RabbitMQ, MinIO (S3), Ray Serve, MLflow, Redis, WebSocket',
            'results' => [
                'Developed a microservices platform: project orchestrator, API Gateway, DataHub, Constructor',
                'Implemented auto-deployment of projects to Kubernetes with async jobs via RabbitMQ',
                'Integrated Keycloak RBAC with JWT and project-scoped roles',
                'Designed parallel microservices deployment system, reducing deployment time',
                'Implemented real-time notifications via WebSocket (Laravel Reverb)',
                'Built CSV/Excel/TXT parsers with structure validation',
            ],
        ],
        [
            'role' => 'PHP Developer (Team Lead)',
            'company' => 'InDev Solutions',
            'period' => 'February 2023 — September 2024 (1 year 8 months)',
            'project' => 'Headless CMS',
            'project_label' => 'Key Project',
            'stack' => 'PHP 8, Laravel, PostgreSQL, Redis, S3, Docker, RabbitMQ',
            'results' => [
                'Acted as Team Lead for a backend team of 3 developers',
                'Designed modular architecture and database schema for 1000+ entities',
                'Built custom RBAC system (Laravel Policies) for 5+ user types',
                'Implemented async media processing via queues, improving API response by 40%',
                'Introduced Code Review process, reducing critical bugs by 30%',
            ],
            'other_projects' => [
                '"Shokoladnitsa" Promo Site: built a landing page in 3 weeks, integrated SSO (OAuth2)',
                'Energy Resources Aggregator (Russia): optimized dashboards from 5s to 1.2s',
            ],
        ],
        [
            'role' => 'PHP Developer',
            'company' => 'Coda Tech (German Team)',
            'period' => 'December 2021 — January 2023 (1 year 2 months)',
            'project' => 'Smart Office Solution (Enterprise)',
            'stack' => 'PHP 8, Symfony 5/6, PostgreSQL, MySQL, Docker, PHPUnit',
            'results' => [
                'Worked in a distributed German team (all communication in English)',
                'Migrated database from MySQL to PostgreSQL, improving query performance by 30%',
                'Implemented API for inventory management and meeting room booking',
                'Achieved 85% test code coverage',
            ],
        ],
        [
            'role' => 'PHP Developer',
            'company' => 'Bright Solutions',
            'period' => 'January 2021 — November 2021 (11 months)',
            'projects' => [
                [
                    'title' => 'Government Legislative Portal',
                    'points' => [
                        'Designed admin panel for legal documents with versioning',
                        'Built CSV import module with validation (100,000+ records)',
                    ],
                ],
                [
                    'title' => 'Banking Website (500,000+ clients)',
                    'points' => [
                        'Created 10+ REST API endpoints for mobile and web apps',
                        'Optimized SQL queries, reducing page load from 3s to 0.8s',
                    ],
                ],
                [
                    'title' => 'Corporate Website in Kazakhstan (10,000+ visitors/day)',
                    'points' => [
                        'Architected the site from scratch (20+ tables, multilingual)',
                        'Implemented Redis caching, reducing load time by 3x',
                    ],
                ],
                [
                    'title' => 'Online Education Platform',
                    'points' => [
                        'Designed REST API from scratch (users, courses, teachers, lessons)',
                        'Implemented Laravel Sanctum authentication',
                    ],
                ],
            ],
        ],
    ],

    'skills_title' => 'Technical Skills',
    'skills' => [
        'Languages' => 'PHP 8',
        'Frameworks' => 'Laravel, Symfony 5/6',
        'Databases' => 'PostgreSQL, MySQL, Redis',
        'DevOps' => 'Docker, Kubernetes, Helm, CI/CD',
        'Queues' => 'RabbitMQ',
        'API' => 'REST, OpenAPI/Swagger, WebSocket',
        'Auth' => 'Keycloak (OAuth2, JWT), Laravel Sanctum',
        'Testing' => 'PHPUnit',
        'Storage' => 'S3 (MinIO)',
        'Tools' => 'Git, Composer, Docker-compose',
    ],

    'education_title' => 'Education',
    'education' => [
        'school' => 'Belarusian National Technical University, Minsk',
        'faculty' => 'International Institute of Distance Education (IIDE)',
        'specialty' => 'Specialization: Software of Information Technologies',
        'year' => 'Graduation Year: 2025',
    ],

    'languages_title' => 'Languages',
    'languages' => [
        ['name' => 'Russian', 'level' => 'Native'],
        ['name' => 'English', 'level' => 'B1 (Intermediate) · Worked in an international team, participated in daily standups and demos in English'],
    ],

    'extra_title' => 'Additional Info',
    'extra' => [
        'Citizenship: Belarus',
        'Work Permit: Belarus',
        'Relocation: Moscow, Saint Petersburg (remote)',
        'Work Format: Remote, project-based, full-time',
    ],

    'contact_title' => 'Contact',
];
