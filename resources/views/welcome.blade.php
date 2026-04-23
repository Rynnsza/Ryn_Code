@extends('layouts.app')

@section('title', 'RynCode.id')

@section('content')
  @include('partials.hero')

  @include('partials.feature-overview')

  @include('partials.why-ryncode')

  @include('partials.implementation-timeline')

  @include('partials.services')

  @include('partials.portfolio')

  @include('partials.partners')

  @include('partials.testimonials')

  @include('partials.faq')

  @include('partials.contact')
@endsection
