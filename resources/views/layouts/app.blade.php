<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BasicPoint — Build Your Foundation. Master Your Future.')</title>
    <meta name="description" content="@yield('meta_description', 'BasicPoint is an educational institute offering HSC ICT and SSC All Subjects programs built on concept-based learning, regular assessment and focused academic guidance.')">

    {{-- Fonts: Fraunces for display headings, IBM Plex Sans for body/UI --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght,ital@9..144,500,600,700,600italic&family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @stack('styles')
</head>
<body>

    <main>
        @yield('content')
    </main>

    {{-- Shared lightbox mount point used by the gallery section --}}
    <div class="lightbox" data-lightbox>
        <button type="button" class="lightbox__close" data-lightbox-close aria-label="Close image preview">&times;</button>
        <img src="" alt="">
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
