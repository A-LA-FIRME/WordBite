@extends('layouts.app')

@section('title', trans('labels.general.restaurants'))

@section('content')

<main id="main">

  <!-- ======= Restaurants ======= -->
  <section id="restaurants" class="restaurants">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{ trans('labels.general.locations') }}</h2>
        <p>{{ trans('labels.general.visit_a_restaurant') }}</p>
      </div>

    </div>
  </section><!-- End Restaurants -->

</main><!-- End #main -->

@endsection

@section('page-scripts')
  <script src="{{ mix('js/restaurants.min.js') }}"></script>
@endsection
