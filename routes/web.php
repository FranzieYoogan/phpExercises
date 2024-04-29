<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/isnumber', function () {
    return view('isnumber');
});

Route::get('/agetodays', function () {
    return view('agetodays');
});



Route::post('/isnumber', [Controller::class, 'isNumber']);

Route::post('/agetodays', [Controller::class, 'agetodays']);