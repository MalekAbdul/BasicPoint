{{--
    Landing page assembler.

    This file intentionally contains no section markup — it only
    includes each section in order. To edit a section, open the
    matching file in resources/views/frontend/sections/ instead
    of editing here.
--}}
@extends('layouts.app')

@section('content')

    @include('frontend.sections.navbar')
    @include('frontend.sections.hero')
    @include('frontend.sections.stats')
    @include('frontend.sections.programs')
    @include('frontend.sections.why-basicpoint')
    @include('frontend.sections.teachers')
    @include('frontend.sections.routine')
    @include('frontend.sections.results')
    @include('frontend.sections.notices')
    @include('frontend.sections.events')
    @include('frontend.sections.gallery')
    @include('frontend.sections.testimonials')
    @include('frontend.sections.faq')
    @include('frontend.sections.admission-cta')
    @include('frontend.sections.contact')
    @include('frontend.sections.portal-access')
    @include('frontend.sections.footer')

@endsection
