{{--
    Notice board section.
    $notices is structured to mirror a future `notices` table
    (date, category, title, description, link).
--}}
@php
    $notices = [
        ['day' => '05', 'mon' => 'Sep', 'tag' => 'Admission', 'title' => 'Admission Open', 'desc' => 'New batches for HSC ICT and SSC All Subjects are now enrolling.'],
        ['day' => '12', 'mon' => 'Sep', 'tag' => 'HSC ICT', 'title' => 'HSC ICT Model Test', 'desc' => 'Full-syllabus model test covering programming and database modules.'],
        ['day' => '18', 'mon' => 'Sep', 'tag' => 'SSC', 'title' => 'SSC Monthly Exam', 'desc' => 'Monthly assessment covering all subjects for the current chapter set.'],
    ];
@endphp

<section class="section section--white" id="notices">
    <div class="container">
        <x-section-heading title="Latest Notices">
            Stay up to date with admissions, tests and academic announcements.
        </x-section-heading>

        <div class="notice-list">
            @foreach ($notices as $notice)
                <div class="notice-item">
                    <div class="notice-item__date">
                        <strong>{{ $notice['day'] }}</strong>
                        {{ $notice['mon'] }}
                    </div>
                    <div>
                        <span class="notice-item__tag">{{ $notice['tag'] }}</span>
                        <div class="notice-item__title">{{ $notice['title'] }}</div>
                        <p class="notice-item__desc">{{ $notice['desc'] }}</p>
                    </div>
                    <a href="#" class="notice-item__link">View details</a>
                </div>
            @endforeach
        </div>

        <div style="margin-top: 24px;">
            <x-btn href="#" variant="ghost" size="sm">View All Notices</x-btn>
        </div>
    </div>
</section>
