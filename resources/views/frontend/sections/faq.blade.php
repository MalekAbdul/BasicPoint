{{--
    FAQ section — accordion behaviour lives in public/js/app.js
    via the [data-faq-item] / [data-faq-q] / [data-faq-a] hooks.
--}}
@php
    $faqs = [
        ['q' => 'What programs does BasicPoint offer?', 'a' => 'BasicPoint currently offers two programs: HSC ICT and SSC All Subjects.'],
        ['q' => 'What subjects are included in SSC?', 'a' => 'The SSC program covers Bangla, English, Mathematics, Science, ICT, BGS and Religion, taught chapter by chapter.'],
        ['q' => 'What is included in HSC ICT?', 'a' => 'The HSC ICT program covers the full syllabus including programming, HTML & web design, database, networking and practical preparation, alongside CQ and MCQ practice.'],
        ['q' => 'How can I take admission?', 'a' => 'You can apply through the admission form on this page, or contact BasicPoint directly using the details in the Contact section.'],
        ['q' => 'What is the batch size?', 'a' => 'Batches are kept intentionally small to maintain close teacher-student interaction and consistent attention.'],
        ['q' => 'Do you provide regular tests?', 'a' => 'Yes, both programs include regular class tests and periodic model tests to track progress.'],
        ['q' => 'Do you provide study materials?', 'a' => 'Structured notes and practice materials are provided as part of each program.'],
        ['q' => 'How can parents monitor progress?', 'a' => 'Parents can track attendance, test results and overall progress through the Parent Portal once account access is issued.'],
        ['q' => 'Where is BasicPoint located?', 'a' => 'The full address is listed in the Contact section below.'],
        ['q' => 'How can I contact BasicPoint?', 'a' => 'You can reach BasicPoint by phone, email or the inquiry form in the Contact section.'],
    ];
@endphp

<section class="section section--white" id="faq">
    <div class="container">
        <x-section-heading title="Frequently Asked Questions" center>
            Answers to the questions we hear most from students and parents.
        </x-section-heading>

        <div class="faq__list" style="margin-inline:auto;">
            @foreach ($faqs as $i => $faq)
                <div class="faq-item" data-faq-item>
                    <button type="button" class="faq-item__q" data-faq-q aria-expanded="false" aria-controls="faq-answer-{{ $i }}">
                        <span>{{ $faq['q'] }}</span>
                        <span class="faq-item__icon"></span>
                    </button>
                    <div class="faq-item__a" id="faq-answer-{{ $i }}" data-faq-a>
                        <p class="faq-item__a-inner">{{ $faq['a'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
