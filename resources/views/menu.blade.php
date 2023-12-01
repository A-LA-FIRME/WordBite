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

      </div>
    </div>
    </div>
  </section><!-- End Restaurants -->

</main><!-- End #main -->
@endsection

@section('page-scripts')
  <script src="{{ mix('js/menu.min.js') }}"></script>
@endsection