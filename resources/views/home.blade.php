@extends('layouts.app')

@section('content')

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{ asset('img/about.png') }}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>{{ trans('strings.about.taste_without_borders') }}</h3>
            <p class="fst-italic">
                {{ trans('strings.about.wordbite_about') }}
              <br><br>{{ trans('strings.about.wordbite_about_hour') }}
              <br>{{ trans('strings.about.wordbite_about_hour_2') }}
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> {{ trans('labels.presentation.international_variety') }}</li>
              <li><i class="bi bi-check-circle"></i> {{ trans('labels.presentation.relaxed_atmosphere') }}</li>
              <li><i class="bi bi-check-circle"></i> {{ trans('labels.presentation.innovation_presentation') }}</li>
            </ul>
            <p>
                {{ trans('strings.about.wordbite_about_hour_cite') }}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ trans('labels.why_us.why_us') }}</h2>
          <p>{{ trans('labels.why_us.why_us_2') }}</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>{{ trans('labels.general.01') }}</span>
              <h4> {{ trans('labels.why_us.unique_gastronomic') }} </h4>
              <p> {{ trans('strings.why_us.every_meal') }} </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>{{ trans('labels.general.02') }}</span>
              <h4>{{ trans('labels.why_us.commitment_quality') }}</h4>
              <p>{{ trans('strings.why_us.you_can_trust') }}</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>{{ trans('labels.general.03') }}</span>
              <h4>{{ trans('labels.why_us.cozy_Environment') }}</h4>
              <p>{{ trans('strings.why_us.whether_it') }}</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>{{ trans('labels.general.gallery') }}</h2>
          <p>{{ trans('strings.gallery.some_photos') }}</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

            @foreach (File::files(public_path('img/gallery')) as $image)

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                    <a href="{{ asset('img/gallery/' . basename($image)) }}" class="gallery-lightbox" data-gall="gallery-item">
                        <img src="{{ asset('img/gallery/' . basename($image)) }}" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

            @endforeach

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ trans('labels.general.chefs') }}</h2>
          <p>{{ trans('labels.chefs.our_proffesional_chefs') }}</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="{{ asset('img/chefs/chefs-1.jpg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Carlos Gonzales</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="{{ asset('img/chefs/chefs-2.jpg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Gordon Ramsay</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="{{ asset('img/chefs/chefs-3.jpg') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Eduardo Jimenez</h4>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

  </main><!-- End #main -->

@endsection
