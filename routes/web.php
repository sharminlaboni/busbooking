<?php
//admin
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TripController;
use App\Http\Controllers\Backend\RouteController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\BusController;
use App\Http\Controllers\Backend\CounterController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\TimeController;
use App\Http\Controllers\Backend\DriverController;
// use App\Http\Controllers\Backend\PaymentController;
use App\Http\controllers\SslCommerzPaymentController;

//website
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BookingdetailsController;






//Route::get('/',function(){
    //return view('frontend.pages.home');
//});

//Route::get('/booking',function(){
  // return view('frontend.pages.booking');
 //});




//admin login
Route::get('/admin/login',[UserController::class,'login'])->name('admin.login');
Route::post('/admin/do-login',[UserController::class,'doLogin'])->name('admin.do.login');

Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){   
     Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');



    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');





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




//url,controller name,controller method,route name
//Route
Route::get('/route/show',[RouteController::class,'route'])->name('admin.route.show');
Route::get('/route/from',[RouteController::class,'routeFrom'])->name('route.from');
Route::post('/route/post',[RouteController::class,'routePost'])->name('route.post');
Route::get('/Route/edit/{id}',[RouteController::class,'routeEdit'])->name('route.edit');
Route::put('/Route/update',[RouteController::class,'routeUpdate'])->name('route.update');
Route::get('/Route/delete/{id}',[RouteController::class,'routeDelete'])->name('route.delete');
//
Route::get('/dashboard',[UserController::class,'dashboard'])->name('admin.dashboard');

Route::get('/report/result',[UserController::class,'report'])->name('admin.report.result');
Route::get('/report',[UserController::class,'tripreport'])->name('trip.report');

Route::get('/bookreport/result',[UserController::class,'bookreport'])->name('admin.report.booking');
Route::get('/getreport',[UserController::class,'getreport'])->name('booking.report');



//trip
Route::get('/trip/show',[TripController::class,'trip'])->name('admin.trip.show');
Route::get('/trip/create',[TripController::class,'tripCreate'])->name('trip.create');
Route::post('/trip/store',[TripController::class,'tripStore'])->name('trip.store');
Route::get('/trip/edit/{id}',[TripController::class,'tripEdit'])->name('trip.edit');
Route::put('/trip/update',[TripController::class,'tripUpdate'])->name('trip.update');
Route::get('/trip/delete/{id}',[TripController::class,'tripDelete'])->name('trip.delete');
Route::get('/user/list',[UserController::class,'list'])->name('user.list');
//booking
Route::get('/Booking/show',[BookingController::class,'Booking'])->name('admin.Booking.show');
// Route::get('/Booking/create',[BookingController::class,'BookingCreate'])->name('Booking.create');
// Route::post('/Booking/store',[BookingController::class,'BookingStore'])->name('Booking.store');
//customer
Route::get('/Customer/show',[CustomerController::class,'Customer'])->name('admin.Customer.show');
Route::get('/Customer/create',[CustomerController::class,'CustomerCreate'])->name('Customer.create');
Route::post('/Customer/store',[CustomerController::class,'CustomerStore'])->name('Customer.store');
Route::get('/Customer/edit/{id}',[CustomerController::class,'CustomerEdit'])->name('Customer.edit');
Route::put('/Customer/update',[CustomerController::class,'CustomerUpdate'])->name('Customer.update');
Route::get('/Customer/delete/{id}',[CustomerController::class,'CustomerDelete'])->name('Customer.delete');

//Location
Route::get('/Location/show',[LocationController::class,'Location'])->name('admin.location.show');
Route::get('/Location/create',[LocationController::class,'LocationCreate'])->name('location.create');
Route::post('/Location/store',[LocationController::class,'LocationStore'])->name('location.store');
Route::get('/Location/edit/{id}',[LocationController::class,'LocationEdit'])->name('location.edit');
Route::put('/Location/update',[LocationController::class,'LocationUpdate'])->name('location.update');
Route::get('/Location/delete/{id}',[LocationController::class,'LocationDelete'])->name('location.delete');
//time
Route::get('/time/show',[TimeController::class,'time'])->name('admin.time.show');
Route::get('/time/create',[TimeController::class,'timeCreate'])->name('time.create');
Route::post('/time/store',[TimeController::class,'timeStore'])->name('time.store');
Route::get('/time/edit/{id}',[TimeController::class,'timeEdit'])->name('time.edit');
Route::put('/time/update',[TimeController::class,'timeUpdate'])->name('time.update');
Route::get('/time/delete/{id}',[TimeController::class,'timeDelete'])->name('time.delete');
//Driver
Route::get('/driver/show',[DriverController::class,'driver'])->name('admin.driver.show');
Route::get('/driver/create',[DriverController::class,'driverCreate'])->name('driver.create');
Route::post('/driver/store',[DriverController::class,'driverStore'])->name('driver.store');
Route::get('/driver/edit/{id}',[DriverController::class,'driverEdit'])->name('driver.edit');
Route::put('/driver/update',[DriverController::class,'driverUpdate'])->name('driver.update');
Route::get('/driver/delete/{id}',[DriverController::class,'deiverDelete'])->name('driver.delete');
//counter
Route::get('/Counter/show',[CounterController::class,'Counter'])->name('admin.Counter.show');
Route::get('/Counter/create',[CounterController::class,'CounterCreate'])->name('Counter.create');
Route::post('/Counter/store',[CounterController::class,'CounterStore'])->name('Counter.store');
Route::get('/Counter/edit/{id}',[CounterController::class,'CounterEdit'])->name('Counter.edit');
Route::put('/Counter/update',[CounterController::class,'CounterUpdate'])->name('Counter.update');
Route::get('/Counter/delete/{id}',[CounterController::class,'CounterDelete'])->name('Counter.delete');
//Bus
Route::get('/Bus/show',[BusController::class,'Bus'])->name('admin.Bus.show');
Route::get('/Bus/create',[BusController::class,'BusCreate'])->name('Bus.create');
Route::post('/Bus/store',[BusController::class,'BusStore'])->name('Bus.store');
Route::get('/Bus/edit/{id}',[BusController::class,'busEdit'])->name('bus.edit');
Route::put('/Bus/update',[BusController::class,'busUpdate'])->name('bus.update');
Route::get('/Bus/delete/{id}',[BusController::class,'busDelete'])->name('bus.delete');
//payment

Route::get('/payment', [PaymentController::class,'payment'])->name('admin.payment');
Route::get('/user/delete/{id}',[UserController::class,'userdelete'])->name('user.delete');

});

//website
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/location_list',[LocationController::class.'location_name'])->name('website.location.show');
Route::get('/time_list',[TimeController::class.'time'])->name('website.time.show');
//customer log in
Route::post('/customer/registration',[HomeController::class,'customerRegistration'])->name('customer.registration');
Route::get('/customer/login',[HomeController::class,'login'])->name('customer.login');
Route::post('/customer/do-login',[HomeController::class,'doLogin'])->name('customer.do.login');
Route::get('customer/logout',[HomeController::class,'logout'])->name('customer.logout');
Route::get('customer/profile',[HomeController::class,'myprofile'])->name('customer.profile');
Route::get('contact',[HomeController::class,'contact'])->name('company.contact');



Route::group(['middleware'=>'auth'],function (){ 
    
    
//search trip
Route::post('/search/',[HomeController::class,'Search'])->name('trip.search');

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('pay');//submit

    
//viewseat
Route::get('/view/{trip_id}',[HomeController::class,'viewseat'])->name('seat.view');//from
//booking store
Route::post('/view/seat/store',[HomeController::class,'seatstore'])->name('seat.store');
//viewbooking
Route::get('/booking',[HomeController::class,'booking'])->name('book.view');
//viewinvoice
Route::get('/view/invoice/{user_id}/{trip_id}',[BookingdetailsController::class,'viewinvoivce'])->name('view.invoice');
//ticket
Route::get('/ticket',[BookingdetailsController::class,'viewticket'])->name('show.ticket');
});

