{{--
    Gallery section.
    Images are placeholders (placehold.co) — swap the `image` value
    in $galleryItems for real photo paths/URLs when available.
--}}
@php
    $categories = ['All', 'Classes', 'Events', 'Workshops', 'Students', 'Achievements'];

    $galleryItems = [
        ['category' => 'Classes', 'image' => 'https://placehold.co/400x520/0b2540/ffffff?text=Classes', 'ratio' => 'tall'],
        ['category' => 'Events', 'image' => 'https://placehold.co/400x300/1f7a68/ffffff?text=Events', 'ratio' => 'short'],
        ['category' => 'Workshops', 'image' => 'https://placehold.co/400x400/123253/ffffff?text=Workshops', 'ratio' => 'mid'],
        ['category' => 'Students', 'image' => 'https://placehold.co/400x520/1f7a68/ffffff?text=Students', 'ratio' => 'tall'],
        ['category' => 'Achievements', 'image' => 'https://placehold.co/400x300/c9a227/16212b?text=Achievements', 'ratio' => 'short'],
        ['category' => 'Classes', 'image' => 'https://placehold.co/400x400/0b2540/ffffff?text=Classes', 'ratio' => 'mid'],
        ['category' => 'Events', 'image' => 'https://placehold.co/400x520/123253/ffffff?text=Events', 'ratio' => 'tall'],
        ['category' => 'Workshops', 'image' => 'https://placehold.co/400x300/1f7a68/ffffff?text=Workshops', 'ratio' => 'short'],
    ];
@endphp

<section class="section section--white" id="gallery">
    <div class="container">
        <x-section-heading title="Life at BasicPoint">
            A look inside classes, events, workshops and student achievements.
        </x-section-heading>

        <div class="gallery__filters">
            @foreach ($categories as $category)
                <button type="button" class="gallery__filter {{ $loop->first ? 'is-active' : '' }}" data-gallery-filter="{{ strtolower($category) }}">
                    {{ $category }}
                </button>
            @endforeach
        </div>

        <div class="gallery__grid">
            @foreach ($galleryItems as $item)
                <div class="gallery__item" data-gallery-item data-category="{{ strtolower($item['category']) }}">
                    <img src="{{ $item['image'] }}" alt="{{ $item['category'] }} at BasicPoint" loading="lazy">
                    <span class="gallery__item-cat">{{ $item['category'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>
