<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ReservationRepository;
use stdClass;
use Validator;
use Illuminate\Http\JsonResponse;

class ReservationController extends Controller
{

    /**@var  ReservationRepository*/
    protected $reservationRepository;

    /**
     * @param ReservationRepository $reservationRepository
     */

    public function __construct(
        ReservationRepository $reservationRepository,
    )
    {
        $this->reservationRepository = $reservationRepository;
    }

    public function create(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(),[
            'restaurant_num'        => 'required',
            'customer_full_name'    => 'required',
            'customer_email'        => 'required',
            'number_persons'        => 'required',
            'date'                  => 'required',
            'time'                  => 'required'
        ]);

        $params = new stdClass();

        if($validator->fails()){
            $params->message = $validator->messages()->first();
            $params->field_name = $validator->errors()->keys()[0];
            $params->type = 'danger';
            $response = app_response($params);
            return response()->json($response);
        }

        $reservation = $this->reservationRepository->create($request);

        $params->type = 'danger';
        if($reservation && isset($reservation->code)) $params->type =  'success';
        $params->body = new stdClass();
        $params->body->text = $reservation->code ?? $reservation;
        $response = app_response($params);
        return response()->json($response);
    }
}
