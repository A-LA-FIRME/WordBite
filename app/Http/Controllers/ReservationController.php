<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ReservationRepository;
use stdClass;
use Validator;
use Illuminate\Http\JsonResponse;
use App\Models\Reservation;
use Illuminate\Support\Facades\Log;
use App\Enums\ReservationStatus;

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

    public function create(Request $request)
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

    public function get(Request $request): JsonResponse
    {
        $params = new stdClass();

        try {
            $validator = Validator::make($request->all(), [
                'code' => 'required|max:32'
            ]);

            if ($validator->fails()) {
                $params->message = $validator->messages()->first();
                $params->field_name = $validator->errors()->keys()[0];
                $params->type = 'danger';
                $response = app_response($params);
                return response()->json($response);
            }

            $reservation = Reservation::where([
                'code' => $request->code,
                'status' => ReservationStatus::CREATED,
            ])->first();

            if(!isset($reservation)){
                $params->type = 'danger';
                $params->body = new stdClass();
                $params->body->message = trans('errors.reservation.reservation_not_found');
                $response = app_response($params);
                return response()->json($response);
            }

            $params->type = 'success';
            $params->body = new stdClass();
            $params->body->reservation = $reservation;
            $response = app_response($params);
            return response()->json($response);
        } catch (\Exception $e) {
            Log::error($e, $request->all());

            $params->type = 'danger';
            $params->body = new stdClass();
            $params->body->message = trans('errors.reservation.reservation_not_found');
            $response = app_response($params);
            return response()->json($response);
        }
    }

    public function modify(Request $request, Reservation $reservation): JsonResponse
    {
        $validator = Validator::make($request->all(),[
            'num'        => 'required',
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

        $res = $this->reservationRepository->modify($request, $reservation);

        $params->type =  'success';
        $params->body = new stdClass();
        $params->body->text = $res;
        $response = app_response($params);
        return response()->json($response);
    }

    public function cancel(Request $request, Reservation $reservation): JsonResponse
    {

        try{

            $params = new stdClass();

            $reservation->status = ReservationStatus::CANCELLED;
            $reservation->updated_at = new DateTime();
            $reservation->save();

            $params->type =  'success';
            $params->body = new stdClass();
            $params->body->message = trans('messages.reservation.reservation_not_found');
            $response = app_response($params);
            return response()->json($response);

        } catch (\Exception $e) {
            Log::error($e, $request->all());

            $params->type = 'danger';
            $params->body = new stdClass();
            $params->body->message = trans('errors.reservation.reservation_not_found');
            $response = app_response($params);
            return response()->json($response);
        }

    }
}
