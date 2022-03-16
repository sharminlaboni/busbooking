<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TripController;
use App\Http\Controllers\Backend\RouteController;

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


Route::get('/booking',function(){
    return view('backend.pages.booking');

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
