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
            <h3>Taste without borders</h3>
            <p class="fst-italic">
              WordBite is a unique place in Panama's culinary scene, with multiple locations throughout the country. This restaurant prides itself on offering a diverse dining experience that attracts food lovers from all corners of the world. WordBite has managed to combine international flavors with modern presentation and a welcoming ambiance.
              <br><br>Monday to Saturday Hours: 8:00 AM to 11:00 PM
              <br>Sunday Hours: 9:00 AM to 10:00 PM 
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> International Variety</li>
              <li><i class="bi bi-check-circle"></i> Relaxed and Cozy Atmosphere</li>
              <li><i class="bi bi-check-circle"></i> Innovation in Presentation</li>
            </ul>
            <p>
              "We invite you to WordBite, where every meal is a culinary journey. Discover flavors of the world in every dish - come and enjoy the experience!"
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Restaurant</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Unique Gastronomic Experience</h4>
              <p>Every meal is an adventure for your senses.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>02</span>
              <h4>Commitment to Quality</h4>
              <p>You can trust that every dish will be full of flavor and freshness.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>03</span>
              <h4>Cozy Environment</h4>
              <p>Whether it's a romantic dinner, a family meal or a gathering of friends, you'll feel comfortable and welcome.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
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
          <h2>Chefs</h2>
          <p>Our Proffesional Chefs</p>
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