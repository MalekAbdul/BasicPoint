{{--
    Reusable button component.

    Usage:
        <x-btn href="{{ route('admission') }}" variant="primary">Apply for Admission</x-btn>
        <x-btn href="#programs" variant="ghost" size="sm">Explore Programs</x-btn>

    Props:
        variant: primary | ghost | on-navy | outline-on-navy   (default: primary)
        size:    default | sm                                   (default: default)
        href:    optional — renders <a>, otherwise renders <button>
        type:    button type when no href is given               (default: button)
--}}
@props([
    'variant' => 'primary',
    'size' => 'default',
    'href' => null,
    'type' => 'button',
])

@php
    $classes = 'btn btn--' . $variant . ($size === 'sm' ? ' btn--sm' : '');
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
