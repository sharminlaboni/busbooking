<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TripController;
use App\Http\Controllers\Backend\RouteController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\BusController;
use App\Http\Controllers\Backend\CounterController;







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
Route::get('/dashboard',function(){
    return view('backend.pages.dashboard');

});
Route::get('/Route',function(){
    return view('backend.pages.Route.create');

});


//Route::get('/booking',function(){
    //return view('backend.pages.booking');

//});
Route::get('/counter',function(){
    return view('backend.pages.counter');

});
Route::get('/payment',function(){
    return view('backend.pages.payment');

});
//Route::get('/customer',function(){
    //return view('backend.pages.customer');

//});
// Route::get('/Trip',function(){
//     return view('backend.pages.Trip.Triplist');
// });
//url,controller name,controller method,route name

Route::get('/route/show',[RouteController::class,'route'])->name('admin.route.show');
Route::get('/route/from',[RouteController::class,'routeFrom'])->name('route.from');
Route::post('/route/post',[RouteController::class,'routePost'])->name('route.post');

Route::get('/trip/show',[TripController::class,'trip'])->name('admin.trip.show');
Route::get('/trip/create',[TripController::class,'tripCreate'])->name('trip.create');
Route::post('/trip/store',[TripController::class,'tripStore'])->name('trip.store');

Route::get('/Booking/show',[BookingController::class,'Booking'])->name('admin.Booking.show');
Route::get('/Booking/create',[BookingController::class,'BookingCreate'])->name('Booking.create');
Route::post('/Booking/store',[BookingController::class,'BookingStore'])->name('Booking.store');

Route::get('/Customer/show',[CustomerController::class,'Customer'])->name('admin.Customer.show');
Route::get('/Customer/create',[CustomerController::class,'CustomerCreate'])->name('Customer.create');
Route::post('/Customer/store',[CustomerController::class,'CustomerStore'])->name('Customer.store');
Route::get('/Counter/show',[CounterController::class,'Counter'])->name('admin.Counter.show');
Route::get('/Counter/create',[CounterController::class,'CounterCreate'])->name('Counter.create');
Route::post('/Counter/store',[CounterController::class,'CounterStore'])->name('Counter.store');


Route::get('/Bus/show',[BusController::class,'Bus'])->name('admin.Bus.show');
Route::get('/Bus/create',[BusController::class,'BusCreate'])->name('Bus.create');
Route::post('/Bus/store',[BusController::class,'BusStore'])->name('Bus.store');

Route::get('/Bus/edit/{id}',[BusController::class,'busEdit'])->name('bus.edit');
Route::put('/Bus/update',[BusController::class,'busUpdate'])->name('bus.update');
Route::get('/Bus/delete/{id}',[BusController::class,'busDelete'])->name('bus.delete');

Route::get('/Route/edit/{id}',[RouteController::class,'routeEdit'])->name('route.edit');
Route::put('/Route/update',[RouteController::class,'routeUpdate'])->name('route.update');
Route::get('/Route/delete/{id}',[RouteController::class,'routeDelete'])->name('route.delete');

Route::get('/trip/edit/{id}',[TripController::class,'tripEdit'])->name('trip.edit');
Route::put('/trip/update',[TripController::class,'tripUpdate'])->name('trip.update');
Route::get('/trip/delete/{id}',[TripController::class,'tripDelete'])->name('trip.delete');
