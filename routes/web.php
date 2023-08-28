<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/media-calculator', 'MediaStudentController@mediaCalculator')->name('mediaCalculator');

Route::resource('/customers', 'CustomerController')->middleware('auth');
