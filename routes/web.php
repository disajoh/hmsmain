<?php

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

Auth::routes();

Route::group(['middleware'=>'auth'], function(){


    Route::get('/home', 'HomeController@index')->name('home');


    Route::resource('users', 'UserController');

    Route::resource('expenditures', 'ExpenditureController');

    Route::resource('roomCategories', 'Room_categoryController');

    Route::resource('bookings', 'BookingController');

    Route::resource('rooms', 'RoomController');

    Route::resource('customers', 'CustomerController');
    
    Route::resource('payments', 'PaymentController');

    Route::resource('payments', 'PaymentController');
    Route::resource('bookingRefunds', 'Booking_refundController');

    //only admin

    Route::resource('roles', 'RoleController')->middleware('checkadmin');

    //admin, accountant 
    Route::group(['middleware'=>'checkaccountant'], function(){


        Route::resource('expenseTypes', 'Expense_typeController');

        Route::resource('revenues', 'RevenueController');

        Route::resource('otherRevenueSources', 'Other_revenue_sourceController');

        Route::resource('expenditures', 'ExpenditureController');

    });


    //admin, manager, accountant 
    Route::group(['middleware'=>'checkmanager'], function(){

        Route::resource('expenditures', 'ExpenditureController');
    });


    Route::get('book/new', 'BookingController@new')->name('new');

    Route::post('book/saveExisting', 'BookingController@saveExisting')->name('saveExisting');

    Route::get('book/pay/{id}', 'PaymentController@new')->name('pay');

    Route::get('book/print/{id}', 'PaymentController@printPreview')->name('print');

    Route::get('book/refund/{id}', 'Booking_refundController@new')->name('refund');

});
