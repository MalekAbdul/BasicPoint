{{--
    Upcoming events section.
--}}
@php
    $events = [
        ['day' => '10', 'mon' => 'Sep', 'title' => 'Special Revision Class', 'time' => '4:00 PM', 'location' => 'BasicPoint Campus', 'desc' => 'Focused revision session ahead of the monthly assessment.'],
        ['day' => '16', 'mon' => 'Sep', 'title' => 'Model Test', 'time' => '10:00 AM', 'location' => 'BasicPoint Campus', 'desc' => 'Full-length model test under exam conditions.'],
        ['day' => '22', 'mon' => 'Sep', 'title' => 'Academic Workshop', 'time' => '3:00 PM', 'location' => 'BasicPoint Campus', 'desc' => 'Workshop on exam strategy and time management.'],
        ['day' => '27', 'mon' => 'Sep', 'title' => 'Parents Meeting', 'time' => '11:00 AM', 'location' => 'BasicPoint Campus', 'desc' => 'Progress review and open discussion with parents.'],
        ['day' => '30', 'mon' => 'Sep', 'title' => 'Award Ceremony', 'time' => '5:00 PM', 'location' => 'BasicPoint Campus', 'desc' => 'Recognizing consistent performance across both programs.'],
    ];
@endphp

<section class="section section--paper" id="events">
    <div class="container">
        <x-section-heading title="Upcoming Events">
            Workshops, tests and academic events happening at BasicPoint.
        </x-section-heading>

        <div class="events__grid">
            @foreach ($events as $event)
                <div class="event-card">
                    <div class="event-card__img">
                        <div class="event-card__date-chip">
                            <strong>{{ $event['day'] }}</strong>
                            <span>{{ $event['mon'] }}</span>
                        </div>
                    </div>
                    <div class="event-card__body">
                        <div class="event-card__title">{{ $event['title'] }}</div>
                        <div class="event-card__meta">
                            <span>{{ $event['time'] }}</span>
                            <span>{{ $event['location'] }}</span>
                        </div>
                        <p class="event-card__desc">{{ $event['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
