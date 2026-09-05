{{--
    Testimonials section.
    Clearly marked as sample/placeholder content — replace with real,
    consented student testimonials before publishing.
--}}
@php
    $testimonials = [
        ['name' => 'Student Name', 'program' => 'HSC ICT', 'rating' => 5, 'quote' => 'Sample placeholder testimonial. Replace with an actual student quote once collected.'],
        ['name' => 'Student Name', 'program' => 'SSC All Subjects', 'rating' => 5, 'quote' => 'Sample placeholder testimonial. Replace with an actual student quote once collected.'],
        ['name' => 'Student Name', 'program' => 'HSC ICT', 'rating' => 4, 'quote' => 'Sample placeholder testimonial. Replace with an actual student quote once collected.'],
        ['name' => 'Student Name', 'program' => 'SSC All Subjects', 'rating' => 5, 'quote' => 'Sample placeholder testimonial. Replace with an actual student quote once collected.'],
    ];
@endphp

<section class="section testimonials" id="testimonials">
    <div class="container">
        <x-section-heading title="What Our Students Say">
            Sample placeholder testimonials shown below — real student feedback will replace these.
        </x-section-heading>

        <div class="testimonials__track">
            @foreach ($testimonials as $t)
                <div class="testimonial-card">
                    <div class="testimonial-card__rating" aria-label="{{ $t['rating'] }} out of 5 stars">
                        {{ str_repeat('★', $t['rating']) }}{{ str_repeat('☆', 5 - $t['rating']) }}
                    </div>
                    <p class="testimonial-card__quote">&ldquo;{{ $t['quote'] }}&rdquo;</p>
                    <div class="testimonial-card__who">
                        <div class="testimonial-card__avatar">
                            <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.2" style="opacity:.6">
                                <circle cx="12" cy="8" r="4"/>
                                <path d="M4 20c0-4 3.6-6 8-6s8 2 8 6"/>
                            </svg>
                        </div>
                        <div>
                            <div class="testimonial-card__name">{{ $t['name'] }}</div>
                            <div class="testimonial-card__program">{{ $t['program'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <p class="testimonials__disclaimer">Sample/placeholder testimonials shown for layout purposes — not real student statements.</p>
    </div>
</section>
