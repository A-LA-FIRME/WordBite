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
        $maxAttempts = 20;

        for ($attempt = 1; $attempt <= $maxAttempts; $attempt++) {
            $randomTable = mt_rand(1, 20);

            $existingReservation = Reservation::where([
                'restaurant_num' => $request->restaurant_num,
                'date' => $request->date,
                'time' => $request->time,
                'number_persons' => $request->number_persons,
                'status' => ReservationStatus::CREATED,
                'table' => $randomTable,
            ])->first();

            if (!$existingReservation) {
                break;
            }
        }

        if ($attempt > $maxAttempts) {
            return trans('errors.reservation.no_available_table');
        }

        $requestData = $request->except($except);
        $requestData["num"] = Reservation::num();
        $requestData["code"] = Reservation::code();
        $requestData["status"] = ReservationStatus::CREATED;
        $requestData["table"] = (string) $randomTable;
        $requestData["created_at"] = new DateTime();

        $reservation = Reservation::create($requestData);

        return $reservation;
    }

}
