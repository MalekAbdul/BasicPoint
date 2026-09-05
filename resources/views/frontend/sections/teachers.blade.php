{{--
    Teachers section.
    BasicPoint currently has exactly two teachers, so this section is
    built as a simple loop over a two-item array rather than a carousel.
    Adding a third teacher later only means adding a third array item —
    the markup and grid already support it, though the two-column layout
    is tuned for the current headcount.

    IMPORTANT: names, photos, qualifications and bios below are
    placeholders only. Replace every value in $teachers with real
    teacher information before publishing.
--}}
@php
    $teachers = [
        [
            'name' => 'Teacher Name 1',
            'photo' => null,
            'role' => 'HSC ICT Instructor',
            'qualification' => 'Qualification placeholder',
            'experience' => 'Experience placeholder',
            'subject' => 'Subject placeholder',
            'expertise' => 'Expertise placeholder',
            'bio' => 'Short biography placeholder. Replace with the teacher\'s actual background, teaching approach and achievements.',
        ],
        [
            'name' => 'Teacher Name 2',
            'photo' => null,
            'role' => 'SSC Program Instructor',
            'qualification' => 'Qualification placeholder',
            'experience' => 'Experience placeholder',
            'subject' => 'Subject placeholder',
            'expertise' => 'Expertise placeholder',
            'bio' => 'Short biography placeholder. Replace with the teacher\'s actual background, teaching approach and achievements.',
        ],
    ];
@endphp

<section class="section section--paper" id="teachers">
    <div class="container">
        <x-section-heading title="Meet Our Teachers">
            BasicPoint keeps its batches small, taught directly by two focused instructors.
        </x-section-heading>

        <div class="teachers__grid">
            @foreach ($teachers as $teacher)
                <div class="teacher-card">
                    <div class="teacher-card__photo">
                        @if ($teacher['photo'])
                            <img src="{{ $teacher['photo'] }}" alt="Photo of {{ $teacher['name'] }}">
                        @else
                            <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="#9AA6A0" stroke-width="1.3">
                                <circle cx="12" cy="8" r="4"/>
                                <path d="M4 20c0-4 3.6-6 8-6s8 2 8 6"/>
                            </svg>
                        @endif
                    </div>
                    <div class="teacher-card__body">
                        <div class="teacher-card__name">{{ $teacher['name'] }}</div>
                        <div class="teacher-card__role">{{ $teacher['role'] }}</div>
                        <div class="teacher-card__meta">
                            <span>Qualification: {{ $teacher['qualification'] }}</span>
                            <span>Experience: {{ $teacher['experience'] }}</span>
                            <span>Subject: {{ $teacher['subject'] }}</span>
                            <span>Expertise: {{ $teacher['expertise'] }}</span>
                        </div>
                        <p class="teacher-card__bio">{{ $teacher['bio'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
