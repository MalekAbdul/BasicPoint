{{--
    Navbar section.
    Edit only this file to change navigation links, brand mark or
    the login / admission buttons — nothing else on the page depends on it.
    ['label' => 'Home', 'href' => '#home'],
    ['label' => 'Gallery', 'href' => '#gallery'],
        ['label' => 'FAQ', 'href' => '#faq'],
--}}
@php
    $navLinks = [
        
        ['label' => 'Programs', 'href' => '#programs'],
        ['label' => 'Why BasicPoint', 'href' => '#why-basicpoint'],
        ['label' => 'Teachers', 'href' => '#teachers'],
        ['label' => 'Routine', 'href' => '#routine'],
        ['label' => 'Results', 'href' => '#results'],
        ['label' => 'Notices', 'href' => '#notices'],
        ['label' => 'Events', 'href' => '#events'],
        
        ['label' => 'Contact', 'href' => '#contact'],
    ];
@endphp

<header class="navbar" data-navbar>
    <div class="container navbar__inner">
        <a href="#home" class="navbar__brand">Basic<span>Point</span></a>

        <nav class="navbar__links" aria-label="Primary">
            @foreach ($navLinks as $link)
                <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
            @endforeach
        </nav>

        <div class="navbar__actions">
            <!-- <x-btn href="#" variant="ghost" size="sm">Student Login</x-btn> -->
            <!-- <x-btn href="#" variant="ghost" size="sm">Parent Login</x-btn> -->
            <x-btn href="#admission-cta" variant="primary" size="sm">Login</x-btn>
        </div>

        <button type="button" class="navbar__toggle" data-nav-toggle aria-label="Toggle navigation menu" aria-expanded="false">
            <span></span>
        </button>
    </div>

    <nav class="navbar__mobile" data-nav-mobile aria-label="Mobile">
        @foreach ($navLinks as $link)
            <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
        @endforeach
        <div class="navbar__mobile-actions">
            <x-btn href="#" variant="ghost" size="sm">Student Login</x-btn>
            <x-btn href="#" variant="ghost" size="sm">Parent Login</x-btn>
            <x-btn href="#admission-cta" variant="primary" size="sm">Admission</x-btn>
        </div>
    </nav>
</header>
