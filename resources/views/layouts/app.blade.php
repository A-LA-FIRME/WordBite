<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="@yield('meta_description', app_name())">
    <meta name="keywords" content="@yield('meta_keywords', app_name())">
    <meta name="author" content="@yield('meta_author', app_authors())">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('meta')

  <title>
    @hasSection('title') @yield('title') | @endif
    {{ app_name() }}
  </title>

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  @yield('before-styles')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css"
    integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
    integrity="sha512-oAvZuuYVzkcTc2dH5z1ZJup5OmSQ000qlfRvuoTTiyTBjwX1faoyearj8KdMq0LgsBTHMrRuMek7s+CxF8yE+w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="{{ mix('css/app.min.css') }}">

  @yield('after-styles')
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{  route('page.home') }}">{{ app_name() }}</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link" href="{{  route('page.restaurants') }}">{{ trans('labels.general.restaurants') }}</a></li>
          <li><a class="nav-link" href="{{  route('page.menu') }}">{{ trans('labels.general.menu') }}</a></li>
          <li class="dropdown"><a href="#"><span>{{ trans('labels.general.reservations') }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{  route('page.reservations', ['tab' => 'create']) }}">{{ trans('labels.general.create') }}</a></li>
              <li><a href="{{  route('page.reservations', ['tab' => 'modify']) }}">{{ trans('labels.general.modify') }}</a></li>
              <li><a href="{{  route('page.reservations', ['tab' => 'cancel']) }}">{{ trans('labels.general.cancel') }}</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="{{  route('page.reservations', ['tab' => 'create']) }}" class="book-a-table-btn d-none d-lg-flex">{{ trans('labels.general.create_reservation') }}</a>

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Presentation Section ======= -->
  <section id="presentation" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>{{ trans('strings.presentation.welcome_to') }} <span>{{ app_name() }}</span></h1>
          <h2>{{ trans('strings.presentation.presentation_text') }}</h2>

          <div class="btns">
            <a href="{{  route('page.menu') }}" class="btn-menu animated fadeInUp">{{ trans('labels.general.menu') }}</a>
            <a href="{{  route('page.reservations', ['tab' => 'create']) }}" class="btn-book animated fadeInUp">{{ trans('labels.general.create_reservation') }}</a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Presentation -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="footer-info pt-3">
        <div class="social-links justify-content-center text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>
      <div class="copyright pt-1">
        &copy; {{ now()->year }} {{ trans('labels.general.copyright') }} <strong><span>{{ app_name() }}</span></strong>. {{ trans('labels.general.rights_reserved') }}
      </div>
      <div class="credits pt-1">
        Designed by <a href="#">Jhonathan Vargas</a> - <a href="#">Jose Martinez</a> - <a href="#">Diego Chan</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>

  @yield('before-scripts')

  <script src="{{ mix('js/app.min.js') }}"></script>

  @yield('page-scripts')
  @yield('after-scripts')
</body>

</html>
