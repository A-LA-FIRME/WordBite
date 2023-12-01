<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request){
        return view('home');
    }

    public function menu(Request $request){
        return view('menu');
    }

    public function reservations(Request $request){
        return view('reservations');
    }

    public function restaurants(Request $request){
        return view('restaurants');
    }
}
