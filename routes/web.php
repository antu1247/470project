<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FeedbackController;
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
#BOOKING ROUTES





#TICKET ROUTES

Route::get('/tickets/userindex', 'App\Http\Controllers\TicketController@userindex')->name('tickets.userindex');
Route::get('/tickets/guestindex', 'App\Http\Controllers\TicketController@guestindex')->name('tickets.guestindex');
Route::post('/tickets/create', 'App\Http\Controllers\TicketController@storetickets')->name('tickets.storetickets');
Route::post('/tickets/{ticket}', 'App\Http\Controllers\TicketController@updatetickets')->name('tickets.updatetickets');
Route::get('/tickets/delete/{ticket}', 'App\Http\Controllers\TicketController@delete')->name('tickets.delete');
Route::post('/tickets/delete/{ticket}', 'App\Http\Controllers\TicketController@destroytickets')->name('tickets.destroytickets');




#BOOKING TICKET
Route::get('/booking/bookingticket/{booking}', 'App\Http\Controllers\BookingController@bookingticket')->name('bookings.bookingticket');
Route::get('/booking/bookingcompleted', 'App\Http\Controllers\BookingController@bookingcompleted')->name('bookings.bookingcompleted');

Route::get('/booking/delete/{booking}', 'App\Http\Controllers\BookingController@delete')->name('booking.delete');
Route::post('/booking/delete/{booking}', 'App\Http\Controllers\BookingController@destroy')->name('booking.destroy');

Route::get('/booking/update/{booking}', 'App\Http\Controllers\BookingController@show')->name('bookings.bookingshow');
Route::post('/booking/update/{booking}', 'App\Http\Controllers\BookingController@update')->name('bookings.updatebooking');

Route::post('/bookings/miscellaneous', 'App\Http\Controllers\BookingController@miscellaneous')->name('bookings.miscellaneous');
//Route::post('/bookings/miscellaneous', 'App\Http\Controllers\FeedbackController@storefeedback')->name('feedbacks.storefeedback');


#BUS ROUTES ON WELCOME PAGE
Route::get('/dashboard/routes', 'App\Http\Controllers\DashboardController@routes')->name('dashboard.routes');

//AUTH ROUTE FOR BOTH
Route::group(['middleware' => ['auth']], function() {
    
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('/dashboard/booking', 'App\Http\Controllers\DashboardController@booking')->name('dashboard.booking');
    Route::get('/tickets/usershow/{ticket}', 'App\Http\Controllers\TicketController@usershow')->name('tickets.usershow');
    Route::post('/tickets/usershow/{ticket}', 'App\Http\Controllers\BookingController@storetickets')->name('bookings.storetickets');
    Route::get('/tickets/guestindex', 'App\Http\Controllers\TicketController@guestindex')->name('tickets.guestindex');
});

//FOR USERS
Route::group(['middleware' => ['auth', 'role:user']], function() {
    Route::get('/booking/bookingticket/{booking}', 'App\Http\Controllers\BookingController@bookingticket')->name('bookings.bookingticket');
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
    Route::get('/tickets/guestindex', 'App\Http\Controllers\TicketController@guestindex')->name('tickets.guestindex');    
});

//FOR ADMINS
Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('/booking/bookinghistory', 'App\Http\Controllers\BookingController@bookinghistory')->name('bookings.bookinghistory');
    Route::get('/tickets/guestindex', 'App\Http\Controllers\TicketController@guestindex')->name('tickets.guestindex');
});

Route::resource('tickets', TicketController::class);
Route::resource('bookings', BookingController::class);
Route::resource('feedbacks', FeedbackController::class);

require __DIR__.'/auth.php';

