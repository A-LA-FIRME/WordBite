<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\FoodDishRepository;
use App\Repositories\RestaurantRepository;
use App\Models\Restaurant;
use stdClass;

class PageController extends Controller
{

    /**@var  FoodDishRepository*/
    protected $foodDishRepository;

    /**@var  RestaurantRepository*/
    protected $restaurantRepository;

    /**
     * @param FoodDishRepository $foodDishRepository
     * @param RestaurantRepository $restaurantRepository
     */

    public function __construct(
        FoodDishRepository $foodDishRepository,
        RestaurantRepository $restaurantRepository
    )
    {
        $this->foodDishRepository = $foodDishRepository;
        $this->restaurantRepository = $restaurantRepository;
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

        $params = new stdClass();
        $params->restaurants = Restaurant::orderBy('location','asc')->get();

        return view('reservations', compact('params'));
    }

    public function restaurants(Request $request){
        $params = new stdClass();
        $params->restaurants = $this->restaurantRepository->getRestaurants($request);
        return view('restaurants', compact('params'));
    }
}
