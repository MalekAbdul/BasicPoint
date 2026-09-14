{{--
    Programs Section with Card Slider Navigation
--}}
@php
    $programs = [
        [
            'tag' => 'For HSC Candidates',
            'title' => 'HSC ICT',
            'desc' => 'Comprehensive coverage of the HSC ICT syllabus, C programming, web design, and board exam strategies.',
            'theme' => 'navy',
            'items' => [
                'Complete HSC ICT Syllabus',
                'C Programming Fundamentals',
                'HTML & Web Design',
                'Database Management Systems',
                'Networking & Digital Logic',
                'Board CQ & MCQ Analysis',
                'Model Test Series',
            ],
            'cta' => 'Explore HSC ICT',
        ],
        [
            'tag' => 'For SSC Candidates',
            'title' => 'SSC ICT',
            'desc' => 'Master essential digital concepts, office applications, and board exam preparation for SSC ICT.',
            'theme' => 'teal',
            'items' => [
                'Complete SSC ICT Syllabus',
                'Computer & Internet Security',
                'Word Processing & Spreadsheets',
                'Multimedia & Software Basics',
                'Chapter-wise CQ & MCQ Practice',
                'Model Tests & Revisions',
            ],
            'cta' => 'Explore SSC ICT',
        ],
        [
            'tag' => 'For Degree & University Students',
            'title' => 'Honours ICT',
            'desc' => 'Academic ICT support tailored for university non-major and foundational computer course requirements.',
            'theme' => 'purple',
            'items' => [
                'Computer System Architecture',
                'Programming Essentials',
                'Database Systems & SQL',
                'Web Technologies & Internet',
                'Practical Lab Guidance',
                'University Exam Preparation',
            ],
            'cta' => 'Explore Hons ICT',
        ],
        [
            'tag' => 'For SSC Science Group',
            'title' => 'SSC Science',
            'desc' => 'Rigorous conceptual preparation across Mathematics, Physics, Chemistry, and Biology for top board results.',
            'theme' => 'emerald',
            'items' => [
                'General & Higher Mathematics',
                'Physics Concepts & Problems',
                'Chemistry Theory & Equations',
                'Biology Diagrams & Concepts',
                'Board Question Solutions',
                'CQ & MCQ Test Series',
            ],
            'cta' => 'Explore SSC Science',
        ],
        [
            'tag' => 'For Middle School Students',
            'title' => 'Class 6 to 8 Foundation',
            'desc' => 'Building strong conceptual foundations in Mathematics, Science, and English for secondary education.',
            'theme' => 'amber',
            'items' => [
                'General Mathematics',
                'General Science Concepts',
                'English Grammar & Writing',
                'Interactive Problem Solving',
                'Weekly Chapter Assessment',
                'Continuous Progress Tracking',
            ],
            'cta' => 'Explore Class 6–8',
        ],
    ];
@endphp

<section class="section section--paper" id="programs">
    <div class="container">
        <x-section-heading title="Our Programs">
            
        </x-section-heading>

        <div class="programs-wrapper">
            {{-- Animated Left Slider Button --}}
            <button type="button" class="slider-btn slider-btn--prev" onclick="document.getElementById('programsGrid').scrollBy({left: -document.getElementById('programsGrid').clientWidth, behavior: 'smooth'})" aria-label="Previous Program">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
            </button>

            {{-- Slider Container --}}
            <div class="programs__grid" id="programsGrid">
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

            {{-- Animated Right Slider Button --}}
            <button type="button" class="slider-btn slider-btn--next" onclick="document.getElementById('programsGrid').scrollBy({left: document.getElementById('programsGrid').clientWidth, behavior: 'smooth'})" aria-label="Next Program">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </button>
        </div>
    </div>
</section>