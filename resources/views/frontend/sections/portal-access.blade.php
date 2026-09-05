{{--
    Portal access section — entry points only, no functionality here.
    Swap each `href` for the real portal route once it exists.
--}}
@php
    $portals = [
        [
            'title' => 'Student Portal',
            'desc' => 'Routine, attendance, materials, assignments, exams and results.',
            'cta' => 'Student Login',
            'href' => '#',
        ],
        [
            'title' => 'Parent Portal',
            'desc' => 'Attendance, results, performance and fee information.',
            'cta' => 'Parent Login',
            'href' => '#',
        ],
        [
            'title' => 'Admin Portal',
            'desc' => 'Students, teachers, batches, exams, results, fees and notices.',
            'cta' => 'Admin Login',
            'href' => '#',
        ],
    ];
@endphp

<section class="section--tight section--white section" id="portal-access">
    <div class="container">
        <x-section-heading title="Portal Access">
            Entry points for the systems each part of BasicPoint uses day to day.
        </x-section-heading>

        <div class="portals__grid">
            @foreach ($portals as $portal)
                <div class="portal-card">
                    <div class="portal-card__icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                            <rect x="3" y="4" width="18" height="16" rx="2"/>
                            <path d="M3 9h18M8 4v5"/>
                        </svg>
                    </div>
                    <div class="portal-card__title">{{ $portal['title'] }}</div>
                    <p class="portal-card__desc">{{ $portal['desc'] }}</p>
                    <x-btn href="{{ $portal['href'] }}" variant="ghost" size="sm" class="btn--block">{{ $portal['cta'] }}</x-btn>
                </div>
            @endforeach
        </div>
    </div>
</section>
