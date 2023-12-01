@extends('layouts.app')

@section('title', trans('labels.general.menu'))

@section('content')


<main id="main">

  <!-- ======= Menu ======= -->
  <section id="menu" class="menu">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="p-2">
          <div class="col-lg-4 p-0">
            <div class="section-title">
              <h2>Menu</h2>
              <p>See our dishes</p>
            </div>
          </div>
          <div class="col-lg-4 p-0">
          </div>
          <div class="col-lg-4 p-0">
            <select id="menuCategories" class="form-control select2" multiple="multiple">
            </select>
          </div>
        </div>
      </div>

      <div class="row d-flex menu-items p-2">

        @foreach ($params->fooddishes as $fd)
            <div class="col-lg-3 p-1">
                <div class="card box" data-aos="zoom-in">
                    <div class="menu-img card-img-top">
                        <img src="{{ $fd->image_url }}" alt="{{ $fd->name }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $fd->name }}</h5>
                        <p class="card-text">{{ $fd->description }}</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">$ {{ number_format($fd->price, 2) }}</a>
                    </div>
                </div>
            </div>
        @endforeach

      </div>
    </div>
    </div>
  </section><!-- End Restaurants -->

</main><!-- End #main -->
@endsection

@section('page-scripts')
  <script src="{{ mix('js/menu.min.js') }}"></script>
@endsection
