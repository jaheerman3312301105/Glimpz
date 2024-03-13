<?php

use App\Http\Controllers\lisitem105;
use Illuminate\Support\Facades\Route;

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

Route::get('/Dashboard105', function() {
    return view('Dashboard105');
});

//Route::get('/listitem105', function() {
//    return view('listitem105');
//});


Route::get('/listitem105', [lisitem105::class, 'tampilkan']);