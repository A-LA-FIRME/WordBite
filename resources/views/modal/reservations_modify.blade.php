<!-- .modal -->
<div class="modal fade" tabindex="99" id="reservationModifyModal" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <form id="reservationModifyForm" name="reservationModifyForm" method="post" role="form"
        action="{!! route('reservations.modify', ['reservation' => 'item_num']) !!}"
        cancel-reservation-title="<h2>{{ trans('labels.general.cancel_reservation_title') }}</h2>"
        data-confirm="{{ trans('labels.general.confirm') }}"
        data-delete-route="{!! route('reservations.cancel', ['reservation' => 'item_num']) !!}" novalidate>
        {!! csrf_field() !!}
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark">
                <div class="modal-header ">
                    <h2 class="modal-title">
                        {!! trans('labels.general.modify_reservation') !!}
                    </h2>
                    <div class="d-flex justify-content-end">
                        <button type="button" id="cancelReservationBtn" class="btn btn-danger d-none btn-delete mx-3">
                            {!! trans('labels.general.cancel_reservation') !!}
                        </button>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row mx-ht-460-f overflow-auto">
                        <input type="hidden" name="modifyNum" id="modifyNum">
                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <label for="modifyName">{{ trans('labels.general.name') }}</label>
                                <input type="text" name="modifyName" class="form-control" id="modifyName"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="modifyEmail">{{ trans('labels.general.email') }}</label>
                                <input type="email" class="form-control" name="modifyEmail" id="modifyEmail"
                                    placeholder="Your Email" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="modifyLocation">{{ trans('labels.general.restaurant') }}</label>
                                <select id="modifyLocation" name="modifyLocation"
                                    placeholder="{{ trans('labels.general.restaurant') }}" class="form-control select2"
                                    required>
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
                                <label for="modifyPersons">{{ trans('labels.general.persons_n') }}</label>
                                <select id="modifyPersons" name="modifyPersons"
                                    placeholder="{{ trans('labels.general.persons_n') }}" class="form-control select2"
                                    required>
                                    <option selected=""></option>
                                    @for ($i = 0; $i < 4; $i++)
                                        <option value="{{ $i }}">
                                            {{ $i + 1 }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="modifyDate">{{ trans('labels.general.date') }}</label>
                                <input type="date" name="modifyDate" id="modifyDate" class="form-control"
                                    placeholder="Select a date" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="modifyTime">{{ trans('labels.general.time') }}</label>
                                <select id="modifyTime" name="modifyTime"
                                    placeholder="{{ trans('labels.general.time') }}" class="form-control select2"
                                    required>
                                    <option selected=""></option>
                                    @for ($i = 0; $i < 6; $i++)
                                        <option value="{{ ($i == 0) ? '12AM' : ($i * 2) . 'PM' }}">
                                            {{ $i == 0 ? '12AM' : $i * 2 . 'PM' }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link2" data-bs-dismiss="modal">
                        {!! trans('buttons.general.cancel') !!}
                    </button>
                    <button type="submit" class="btn btn-primary btn-save">
                        {!! trans('buttons.general.save') !!}
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </form>
</div>
<!-- / .modal -->
