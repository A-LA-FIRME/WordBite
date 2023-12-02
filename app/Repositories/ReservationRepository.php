<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Reservation;
use App\Enums\ReservationStatus;
use DateTime;

class ReservationRepository extends BaseRepository
{
    const MODEL = Reservation::class;

    protected $model;

    public function __construct(Reservation $model)
    {
        $this->model = $model;
    }

    public function create($request)
    {
        $except = ["_token", "_method"];

        $existingReservation = Reservation::where([
            'restaurant_num' => $request->restaurant_num,
            'date' => $request->date,
            'time' => $request->time,
            'number_persons' => $request->number_persons,
            'status' => ReservationStatus::CREATED,
        ])->first();

        if ($existingReservation) {
            return trans('errors.reservation.reservation');
        }

        $requestData = $request->except($except);
        $requestData["num"] = Reservation::num();
        $requestData["code"] = Reservation::code();
        $requestData["status"] = ReservationStatus::CREATED;
        $requestData["table"] = "4";
        $requestData["created_at"] = new DateTime();

        $reservation = Reservation::create($requestData);

        return $reservation;
    }

}
