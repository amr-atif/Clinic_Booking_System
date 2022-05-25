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

Route::get('/patient-login', function () {
    return view('Patient.Plogin');
});
Route::get('/patient-sign', function () {
    return view('Patient.Pregister');
});
Route::get('/clinic-sign', function () {
    return view('Clinic.Cregister');
});
Route::get('/clinic-login', function () {
    return view('Clinic.CLogin');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/book', function () {
    return view('book');
});
Route::get('/contact', function () {
    return view('contact');
});


