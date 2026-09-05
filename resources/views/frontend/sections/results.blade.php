{{--
    Results & achievements section.
    All figures are sample/placeholder data — do not present as real
    student results until actual figures are supplied.
--}}
@php
    $results = [
        ['grade' => 'A+', 'name' => 'Sample Result', 'sub' => 'HSC ICT · Placeholder'],
        ['grade' => 'A+', 'name' => 'Sample Result', 'sub' => 'SSC · Placeholder'],
        ['grade' => 'A+', 'name' => 'Sample Result', 'sub' => 'HSC ICT · Placeholder'],
        ['grade' => 'A+', 'name' => 'Sample Result', 'sub' => 'SSC · Placeholder'],
    ];
@endphp

<section class="section section--paper" id="results">
    <div class="container">
        <x-section-heading title="Results &amp; Achievements">
            A snapshot of student performance. Figures shown are sample placeholders pending confirmed results.
        </x-section-heading>

        <div class="results__grid">
            @foreach ($results as $result)
                <div class="result-card">
                    <div class="result-card__grade">{{ $result['grade'] }}<span>*</span></div>
                    <div class="result-card__name">{{ $result['name'] }}</div>
                    <div class="result-card__sub">{{ $result['sub'] }}</div>
                </div>
            @endforeach
        </div>

        <p class="routine__note" style="margin-top: 18px;">*Sample/placeholder achievements shown for layout purposes only.</p>

        <div style="margin-top: 8px;">
            <x-btn href="#" variant="ghost" size="sm">View All Results</x-btn>
        </div>
    </div>
</section>
