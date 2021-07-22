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
Route::get('/home-renovations-auckland', function () {
    return view('frontend.pages.home-renovations-extensions');
});
Route::get('/kitchen-renovation-auckland', function () {
    return view('frontend.pages.kitchen-bathroom');
});
Route::get('/property-maintenance-auckland', function () {
    return view('frontend.pages.maintenance-repair');
});
Route::get('/electrical', function () {
    return view('frontend.pages.electronic');
});
Route::get('/about', function () {
    return view('frontend.pages.aboutus');
});

// Route::get('/', function () {
//     return view('frontend.pages.home-renovations-extensions');
// });
