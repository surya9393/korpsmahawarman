@extends('layouts.main')
@section('content')
    
<!-- ======= Header ======= -->
@include('partials.header')
  
  <!-- ======= Banner Section ======= -->
  @include('partials.banner')
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    @include('partials.clients')
    <!-- ======= About Us Section ======= -->
    @include('partials.about')
    
    <!-- ======= Why Us Section ======= -->
    @include('partials.whyus')
    <!-- ======= Skills Section ======= -->
    @include('partials.skills')
    <!-- ======= Services Section ======= -->
    @include('partials.services')
    <!-- ======= Cta Section ======= -->
    @include('partials.cta')
    <!-- ======= Portfolio Section ======= -->
    @include('partials.portofolio')
    <!-- ======= Team Section ======= -->
    @include('partials.team')
    <!-- ======= Pricing Section ======= -->
    @include('partials.pricing')
    <!-- ======= Frequently Asked Questions Section ======= -->
    @include('partials.faq')
    <!-- ======= Contact Section ======= -->
    @include('partials.contact')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('partials.footer')
  @endsection
