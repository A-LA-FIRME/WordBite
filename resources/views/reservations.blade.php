@extends('layouts.app')

@section('title', trans('labels.general.reservations'))

@section('content')

<main id="main">

  <!-- ======= Reservations ======= -->
  <section id="reservations" class="reservations">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{ trans('labels.general.reservations') }}</h2>
        <p> {{ trans('labels.general.manage_a_reservation') }} </p>
      </div>

      <ul class="nav nav-tabs nav-fill" id="tabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active w-100 reservation-btn" id="createTab" data-bs-toggle="tab"
            data-bs-target="#createTabPane" type="button" role="tab" aria-controls="createTabPane"
            aria-selected="true">
            <div class="section-tab">
              <p>{{ trans('labels.general.create') }}</p>
            </div>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link w-100 reservation-btn" id="modifyTab" data-bs-toggle="tab"
            data-bs-target="#modifyTabPane" type="button" role="tab" aria-controls="modifyTabPane"
            aria-selected="false">
            <div class="section-tab">
              <p>{{ trans('labels.general.modify') }}</p>
            </div>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link w-100 reservation-btn" id="cancelTab" data-bs-toggle="tab"
            data-bs-target="#cancelTabPane" type="button" role="tab" aria-controls="cancelTabPane"
            aria-selected="false">
            <div class="section-tab">
              <p>{{ trans('labels.general.cancel') }}</p>
            </div>
          </button>
        </li>
      </ul>

      <div class="tab-content" id="tabsContent">
        <!-- Create -->
        <div class="tab-pane fade show active p-5" id="createTabPane" role="tabpanel" aria-labelledby="createTab"
          tabindex="0">
          <form id="createForm" action="{{route('reservations.create')}}" data-code-text="{{ trans('labels.general.reservation_code') }}" method="post" role="form">
            {!! csrf_field() !!}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group mt-3">
                  <label for="name">{{ trans('labels.general.name') }}</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <label for="email">{{ trans('labels.general.email') }}</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <label for="location">{{ trans('labels.general.restaurant') }}</label>
                  <select id="location" name="location" placeholder="{{ trans('labels.general.restaurant') }}" class="form-control select2" required>
                    <option selected=""></option>
                    @foreach ($params->restaurants as $restaurant)
                        <option value="{{ $restaurant->num }}">
                            {{ $restaurant->location }}
                        </option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mt-3">
                  <label for="persons">{{ trans('labels.general.persons_n') }}</label>
                  <select id="persons" name="persons" placeholder="{{ trans('labels.general.persons_n') }}" class="form-control select2" required>
                    <option selected=""></option>
                    @for ($i = 0; $i < 4; $i++)
                        <option value="{{ $i }}">
                            {{ $i + 1 }}
                        </option>
                    @endfor
                  </select>
                </div>
                <div class="form-group mt-3">
                  <label for="date">{{ trans('labels.general.date') }}</label>
                  <input type="date" name="date" id="date" class="form-control" placeholder="Select a date" required>
                </div>
                <div class="form-group mt-3">
                  <label for="time">{{ trans('labels.general.time') }}</label>
                  <select id="time" name="time" placeholder="{{ trans('labels.general.time') }}" class="form-control select2" required>
                    <option selected=""></option>
                    @for ($i = 0; $i < 6; $i++)
                        <option value="{{ $i }}">
                            {{ ($i == 0) ? '12AM' : ($i * 2) . 'PM' }}
                        </option>
                    @endfor
                  </select>
                </div>
              </div>
            </div>
            <div class="text-center mt-3">
              <button type="submit">{{ trans('labels.general.create') }}</button>
            </div>
          </form>
        </div>

        <!-- Modify -->
        <div class="tab-pane fade p-5" id="modifyTabPane" role="tabpanel" aria-labelledby="modifyTab" tabindex="0">
          <form action="" method="post" role="form">
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="reservationModify">{{ trans('labels.general.reservation_code') }}</label>
                <input type="text" name="reservationModify" class="form-control" id="reservationModify"
                  placeholder="Your reservation code" required>
              </div>
            </div>
            <div class="text-center mt-3">
              <button type="submit">{{ trans('labels.general.search') }}</button>
            </div>
          </form>
        </div>

        <!-- Cancel -->
        <div class="tab-pane fade p-5" id="cancelTabPane" role="tabpanel" aria-labelledby="cancelTab" tabindex="0">
          <form action="" method="post" role="form">
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="reservationCancel">{{ trans('labels.general.reservation_code') }}</label>
                <input type="text" name="reservationCancel" class="form-control" id="reservationCancel"
                  placeholder="Your reservation code" required>
              </div>
            </div>
            <div class="text-center mt-3">
              <button type="submit">{{ trans('labels.general.search') }}</button>
            </div>
          </form>
        </div>
      </div>


    </div>

  </section><!-- End Restaurants -->

</main><!-- End #main -->

@endsection

@section('page-scripts')
  <script src="{{ mix('js/reservations.min.js') }}"></script>
@endsection
