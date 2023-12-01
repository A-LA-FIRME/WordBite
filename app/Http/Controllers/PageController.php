<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\FoodDishRepository;
use stdClass;

class PageController extends Controller
{

    /**@var  FoodDishRepository*/
    protected $foodDishRepository;

    /**
     * @param FoodDishRepository $foodDishRepository
     */

    public function __construct(
        FoodDishRepository $foodDishRepository
    )
    {
        $this->foodDishRepository = $foodDishRepository;
    }

    public function index(Request $request){
        return view('home');
    }

    public function menu(Request $request){

        $params = new stdClass();
        $params->fooddishes = $this->foodDishRepository->getFoodDishes($request);

        return view('menu', compact('params'));
    }

    public function reservations(Request $request){
        return view('reservations');
    }

    public function restaurants(Request $request){
        return view('restaurants');
    }
}
