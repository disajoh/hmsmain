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

    Route::resource('roles', 'RoleController');

    Route::resource('revenues', 'RevenueController');

    Route::resource('expenseTypes', 'Expense_typeController');

    Route::resource('otherRevenueSources', 'Other_revenue_sourceController');
});