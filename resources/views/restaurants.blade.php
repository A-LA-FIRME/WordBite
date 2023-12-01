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

      @foreach ($params->restaurants as $r)
      <div class="row p-2">
        <div class="col-lg-4 p-0 dashed-border-right ">
          <div class="box" data-aos="zoom-in">
            <div class="col-12 p-1">
              <span>{{ app_name() }}</span>
            </div>
            <div class="col-12 p-1">
              <h4>{{ $r->location }}</h4>
            </div>
            <div class="col-12 p-1">
              <p>{{ $r->phone }}</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 p-0 dashed-border-right dashed-border-left">
          <div class="box" data-aos="zoom-in">
            <div class="restaurant-img">
              <img src="{{ $r->image_url }}" alt="">
            </div>
          </div>
        </div>

        <div class="col-lg-4 p-0 dashed-border-left">
          <div class="box" data-aos="zoom-in">
            <div data-aos="fade-up" class="aos-init aos-animate">
              {!! $r->maps_location !!}
            </div>
          </div>
        </div>
      </div>
  @endforeach

    </div>
  </section><!-- End Restaurants -->

</main><!-- End #main -->

@endsection

@section('page-scripts')
  <script src="{{ mix('js/restaurants.min.js') }}"></script>
@endsection
