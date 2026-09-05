{{--
    Stats / trust indicators.
    $stats below is written as an array so it can later be swapped
    for data passed in from a controller without touching the markup.
--}}
@php
    $stats = [
        ['value' => '8+', 'label' => 'Years of Experience'],
        ['value' => '2', 'label' => 'Academic Programs'],
        ['value' => 'Regular', 'label' => 'Class Tests'],
        ['value' => 'Focused', 'label' => 'Learning Environment'],
    ];
@endphp

<section class="stats">
    <div class="container">
        <div class="stats__row">
            @foreach ($stats as $stat)
                <div class="stats__item">
                    <div class="stats__num">{{ $stat['value'] }}</div>
                    <div class="stats__label">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
