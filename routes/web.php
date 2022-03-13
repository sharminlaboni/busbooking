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
Route::get('/dashboard',function(){
    return view('backend.pages.dashboard');

});

Route::get('/Booking',function(){
    return view('backend.pages.Booking');

});

Route::get('/Route',function(){
    return view('backend.pages.Route');

});
Route::get('/Trip',function(){
    return view('backend.pages.Trip');

});
Route::get('/counter',function(){
    return view('backend.pages.counter');

});
Route::get('/payment',function(){
    return view('backend.pages.payment');

});
Route::get('/customer',function(){
    return view('backend.pages.customer');

});
Route::get('/Trip',function(){
    return view('backend.pages.trip.tripList');
});
//url,controller name,controller method,route name
Route::get('/trip/from',[TripController::class,'tripFrom'])->name('trip.from');
Route::post('/trip/post',[TripController::class,'tripPost'])->name('trip.post');

Route::get('/route/from',[RouteController::class,'routeFrom'])->name('route.from');
Route::post('/route/post',[RouteController::class,'routePost'])->name('route.post');

