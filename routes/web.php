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

//Laravel default auth functionality
Auth::routes();

//Home page
Route::get('/', 'HomeController@index')->name('home');
Route::post('calculate', 'HomeController@calculate')->name('calculate');


//  Display view: Use of anonymous functions
Route::get('transaction_list', function(){
    return view('transaction_list');
})->name('transaction_list');

// Get transactions data by Ajax call
Route::get('getTransactions', 'HomeController@getTransactions')->name('getTransactions');