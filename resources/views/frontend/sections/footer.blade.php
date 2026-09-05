{{--
    Footer section.
--}}
@php
    $footerLinks = [
        ['label' => 'Home', 'href' => '#home'],
        ['label' => 'Programs', 'href' => '#programs'],
        ['label' => 'Teachers', 'href' => '#teachers'],
        ['label' => 'Results', 'href' => '#results'],
        ['label' => 'Notices', 'href' => '#notices'],
        ['label' => 'Events', 'href' => '#events'],
        ['label' => 'FAQ', 'href' => '#faq'],
        ['label' => 'Contact', 'href' => '#contact'],
    ];

    $footerPrograms = ['HSC ICT', 'SSC All Subjects'];

    $footerPortals = [
        ['label' => 'Student Login', 'href' => '#'],
        ['label' => 'Parent Login', 'href' => '#'],
        ['label' => 'Admin Login', 'href' => '#'],
    ];

    $socials = ['Facebook', 'YouTube', 'WhatsApp'];
@endphp

<footer class="footer">
    <div class="container">
        <div class="footer__grid">
            <div>
                <div class="footer__brand">BasicPoint</div>
                <p class="footer__tagline">Build Your Foundation. Master Your Future.</p>
                <div class="footer__social">
                    @foreach ($socials as $social)
                        <a href="#" aria-label="{{ $social }}">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                                <circle cx="12" cy="12" r="9"/>
                            </svg>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="footer__col">
                <div class="footer__col-title">Explore</div>
                @foreach ($footerLinks as $link)
                    <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
                @endforeach
            </div>

            <div class="footer__col">
                <div class="footer__col-title">Programs</div>
                @foreach ($footerPrograms as $program)
                    <span>{{ $program }}</span>
                @endforeach

                <div class="footer__col-title" style="margin-top:20px;">Portal</div>
                @foreach ($footerPortals as $portal)
                    <a href="{{ $portal['href'] }}">{{ $portal['label'] }}</a>
                @endforeach
            </div>

            <div class="footer__col">
                <div class="footer__col-title">Contact</div>
                <span>BasicPoint Campus, [Street, Area], [City]</span>
                <span>+880 1XXX-XXXXXX</span>
                <span>info@basicpoint.example</span>
            </div>
        </div>

        <div class="footer__bottom">
            <span>© {{ date('Y') }} BasicPoint. All Rights Reserved.</span>
            <span>Built for structured, concept-based learning.</span>
        </div>
    </div>
</footer>
