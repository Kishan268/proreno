@extends('layouts.main')
@section('content')
@include('frontend.sections.headsection')
@include('frontend.sections.slidersection')
@include('frontend.sections.welcomesection')
@include('frontend.sections.servicesection')
{{-- @include('frontend.sections.aboutussection') --}}
@include('frontend.sections.newfeaturedsection')
@include('frontend.sections.countersection')
@include('frontend.sections.ourstepssection')
@include('frontend.sections.testimonialssection')
{{-- @include('frontend.sections.gallerysection') --}}
{{-- @include('frontend.sections.appintmentsection') --}}
{{-- @include('frontend.sections.featuredproductsection') --}}
{{-- @include('frontend.sections.blogsection') --}}
@include('frontend.sections.footersection')
@endsection
