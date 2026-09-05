{{--
    Why BasicPoint section.
    A left-aligned index list rather than a card grid — the eight
    reasons read as one continuous argument, not eight isolated tiles.
--}}
@php
    $reasons = [
        ['title' => 'Concept First', 'desc' => 'Understand before memorizing.'],
        ['title' => 'Structured Learning', 'desc' => 'Follow a clear academic roadmap.'],
        ['title' => 'Regular Assessment', 'desc' => 'Frequent tests to measure progress.'],
        ['title' => 'Board-Focused Preparation', 'desc' => 'Analyze previous board questions.'],
        ['title' => 'Progress Monitoring', 'desc' => 'Track student performance continuously.'],
        ['title' => 'Focused Batches', 'desc' => 'Maintain a better teacher-student interaction.'],
        ['title' => 'Exam Preparation', 'desc' => 'CQ, MCQ, practical and model tests.'],
        ['title' => 'Academic Guidance', 'desc' => 'Continuous support throughout the course.'],
    ];
@endphp

<section class="section section--white" id="why-basicpoint">
    <div class="container">
        <x-section-heading title="Why BasicPoint?">
            Every part of the program is built around one idea: understanding comes before repetition.
        </x-section-heading>

        <div class="why-grid">
            @foreach ($reasons as $i => $reason)
                <div class="why-item">
                    <span class="why-item__index">{{ sprintf('%02d', $i + 1) }}</span>
                    <div>
                        <div class="why-item__title">{{ $reason['title'] }}</div>
                        <p class="why-item__desc">{{ $reason['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
