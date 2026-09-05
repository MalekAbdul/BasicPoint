{{--
    Programs section.
    Each program is one associative array so a third program can be
    added later (e.g. from the database) without changing the markup.
--}}
@php
    $programs = [
        [
            'tag' => 'For HSC Candidates',
            'title' => 'HSC ICT',
            'desc' => 'A focused ICT program built around the full HSC syllabus, board-style practice and hands-on computing.',
            'theme' => 'navy',
            'items' => [
                'Complete HSC ICT syllabus',
                'Concept-based classes',
                'CQ preparation',
                'MCQ preparation',
                'Board question analysis',
                'Programming fundamentals',
                'HTML & web design',
                'Database basics',
                'Networking concepts',
                'Practical preparation',
                'Model tests',
            ],
            'cta' => 'Explore HSC ICT',
        ],
        [
            'tag' => 'For SSC Candidates',
            'title' => 'SSC All Subjects',
            'desc' => 'Complete academic support across every SSC subject, structured chapter by chapter for steady progress.',
            'theme' => 'teal',
            'items' => [
                'Bangla',
                'English',
                'Mathematics',
                'Science',
                'ICT',
                'BGS',
                'Religion',
                'Chapter-based preparation',
                'CQ & MCQ practice',
                'Regular tests',
                'Exam preparation',
            ],
            'cta' => 'Explore SSC Program',
        ],
    ];
@endphp

<section class="section section--paper" id="programs">
    <div class="container">
        <x-section-heading title="Our Programs">
            Focused academic programs designed for strong fundamentals and better examination performance.
        </x-section-heading>

        <div class="programs__grid">
            @foreach ($programs as $program)
                <div class="program-card program-card--{{ $program['theme'] }}">
                    <span class="program-card__tag">{{ $program['tag'] }}</span>
                    <h3 class="program-card__title">{{ $program['title'] }}</h3>
                    <p class="program-card__desc">{{ $program['desc'] }}</p>

                    <ul class="program-card__list">
                        @foreach ($program['items'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>

                    <div class="program-card__cta">
                        <x-btn href="#admission-cta" variant="on-navy" size="sm">{{ $program['cta'] }}</x-btn>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
