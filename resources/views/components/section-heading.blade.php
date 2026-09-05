{{--
    Reusable section heading: a short teal rule, a display-serif title
    and an optional supporting description, laid out against a wide
    right-hand column reserved for a CTA or extra note.

    Usage:
        <x-section-heading title="Our Programs" center>
            Focused academic programs designed for strong fundamentals
            and better examination performance.
        </x-section-heading>

    Props:
        title:  required heading text
        center: boolean — centers the heading block (used for FAQ, testimonials, etc.)
--}}
@props([
    'title' => '',
    'center' => false,
])

<div class="section-head {{ $center ? 'section-head--center' : '' }}">
    <div>
        <span class="section-head__rule"></span>
        <h2 class="section-head__title">{{ $title }}</h2>
        @if ($slot->isNotEmpty())
            <p class="section-head__desc" style="margin-top: 14px;">{{ $slot }}</p>
        @endif
    </div>
    {{ $side ?? '' }}
</div>
