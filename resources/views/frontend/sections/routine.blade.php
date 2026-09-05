{{--
    Class routine section.
    $routine is placeholder data shaped exactly like a future
    `routines` database table so this table can be swapped for a
    real Eloquent collection later without changing the markup.
--}}
@php
    $routine = [
        ['day' => 'Saturday', 'time' => '4:00 PM – 5:30 PM', 'program' => 'HSC ICT', 'subject' => 'Programming', 'teacher' => 'Teacher Name 1', 'room' => 'Room 101'],
        ['day' => 'Sunday', 'time' => '5:00 PM – 6:30 PM', 'program' => 'SSC All Subjects', 'subject' => 'Mathematics', 'teacher' => 'Teacher Name 2', 'room' => 'Room 102'],
        ['day' => 'Monday', 'time' => '4:00 PM – 5:30 PM', 'program' => 'HSC ICT', 'subject' => 'Database', 'teacher' => 'Teacher Name 1', 'room' => 'Room 101'],
        ['day' => 'Tuesday', 'time' => '5:00 PM – 6:30 PM', 'program' => 'SSC All Subjects', 'subject' => 'Science', 'teacher' => 'Teacher Name 2', 'room' => 'Room 102'],
        ['day' => 'Wednesday', 'time' => '4:00 PM – 5:30 PM', 'program' => 'HSC ICT', 'subject' => 'Networking', 'teacher' => 'Teacher Name 1', 'room' => 'Room 101'],
    ];
@endphp

<section class="section section--white" id="routine">
    <div class="container">
        <x-section-heading title="Class Routine">
            A preview of the weekly schedule. Placeholder times shown below until the full routine is published.
        </x-section-heading>

        <div class="routine__table-wrap">
            <table class="routine__table">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Time</th>
                        <th>Program</th>
                        <th>Subject</th>
                        <th>Teacher</th>
                        <th>Room</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($routine as $row)
                        <tr>
                            <td class="routine__day">{{ $row['day'] }}</td>
                            <td>{{ $row['time'] }}</td>
                            <td>
                                <span class="routine__badge {{ $row['program'] === 'HSC ICT' ? 'routine__badge--ict' : 'routine__badge--ssc' }}">
                                    {{ $row['program'] }}
                                </span>
                            </td>
                            <td>{{ $row['subject'] }}</td>
                            <td>{{ $row['teacher'] }}</td>
                            <td>{{ $row['room'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="routine__foot">
            <p class="routine__note">Routine shown is a sample preview and may change. Placeholder data — replace with live data once available.</p>
            <x-btn href="#" variant="ghost" size="sm">View Full Routine</x-btn>
        </div>
    </div>
</section>
