<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
use App\Http\Controllers\HabitatController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PaymentController;

Route::prefix('intranet')->middleware(['auth'])->group(function () {
    Route::resource('habitats', HabitatController::class);
    Route::resource('animals', AnimalController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('visitors', VisitorController::class);
    Route::resource('sponsors', SponsorController::class);
    Route::resource('reservations', ReservationController::class);
    Route::resource('events', EventController::class);
    Route::resource('tickets', TicketController::class);
    Route::resource('payments', PaymentController::class);
});


Route::get('pages/about',[PageController::class, 'about']);
Route::get('pages/services',[PageController::class, 'services']);
Route::get('pages/animals',[PageController::class, 'animals']);
route::get('pages/sponsors',[ PageController::class, 'sponsors']);
Route::get('pages/times',[ PageController::class,"times"]);
Route::get('pages/testimonials',[PageController::class, 'testimonials']);
Route::get('pages/contacts',[PageController::class,'contacts']);
Route::get('pages/reservas',[PageController::class,'reservas']);