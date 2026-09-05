{{--
    Hero section.
    Headline, supporting copy, CTAs, trust indicators and the
    figure are all self-contained here.
--}}
@php
    $trustIndicators = [
        'Concept-Based Learning',
        'Regular Assessment',
        'Progress Tracking',
    ];
@endphp

<section class="hero" id="home">
    <div class="container hero__inner">
        <div class="hero__content">
            <span class="hero__eyebrow-rule"></span>
            <h1 class="hero__title">
                Build Your Foundation.<br>
                <em>Master Your Future.</em>
            </h1>
            <p class="hero__desc">
                HSC ICT &amp; SSC All Subjects — concept-based learning, regular practice,
                structured assessment and focused academic guidance.
            </p>

            <div class="hero__cta">
                <x-btn href="#admission-cta" variant="primary">Apply for Admission</x-btn>
                <x-btn href="#programs" variant="outline-on-navy">Explore Programs</x-btn>
            </div>

            <div class="hero__trust">
                @foreach ($trustIndicators as $item)
                    <div class="hero__trust-item">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7.5"/>
                            <path d="M5.5 9.2l2.2 2.2 4.8-5" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>{{ $item }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="hero__figure" aria-hidden="true">
            <svg viewBox="0 0 420 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="210" y1="60" x2="210" y2="420" stroke="rgba(255,255,255,0.18)" stroke-width="1.5" stroke-dasharray="4 6"/>

                <line x1="210" y1="60" x2="100" y2="150" stroke="rgba(255,255,255,0.18)" stroke-width="1.5"/>
                <line x1="210" y1="180" x2="320" y2="150" stroke="rgba(255,255,255,0.18)" stroke-width="1.5"/>
                <line x1="210" y1="300" x2="100" y2="270" stroke="rgba(255,255,255,0.18)" stroke-width="1.5"/>
                <line x1="210" y1="300" x2="320" y2="270" stroke="rgba(255,255,255,0.18)" stroke-width="1.5"/>

                <g>
                    <circle cx="210" cy="60" r="9" fill="#1F7A68"/>
                    <text x="230" y="65" fill="rgba(255,255,255,0.75)" font-family="IBM Plex Sans, sans-serif" font-size="14">Concept</text>
                </g>
                <g>
                    <circle cx="100" cy="150" r="6" fill="rgba(255,255,255,0.5)"/>
                    <circle cx="320" cy="150" r="6" fill="rgba(255,255,255,0.5)"/>
                </g>
                <g>
                    <circle cx="210" cy="180" r="9" fill="#1F7A68"/>
                    <text x="230" y="185" fill="rgba(255,255,255,0.75)" font-family="IBM Plex Sans, sans-serif" font-size="14">Practice</text>
                </g>
                <g>
                    <circle cx="100" cy="270" r="6" fill="rgba(255,255,255,0.5)"/>
                    <circle cx="320" cy="270" r="6" fill="rgba(255,255,255,0.5)"/>
                </g>
                <g>
                    <circle cx="210" cy="300" r="9" fill="#1F7A68"/>
                    <text x="230" y="305" fill="rgba(255,255,255,0.75)" font-family="IBM Plex Sans, sans-serif" font-size="14">Assessment</text>
                </g>
                <g>
                    <circle cx="210" cy="420" r="11" fill="#C9A227"/>
                    <text x="234" y="425" fill="#F3E6BC" font-family="Fraunces, serif" font-size="16" font-style="italic">Mastery</text>
                </g>
            </svg>
        </div>
    </div>
</section>
