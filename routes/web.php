<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('page.home');
Route::get('/menu', [PageController::class, 'menu'])->name('page.menu');
Route::get('/reservations', [PageController::class, 'reservations'])->name('page.reservations');
Route::get('/restaurants', [PageController::class, 'restaurants'])->name('page.restaurants');


Route::post('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
