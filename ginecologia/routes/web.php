<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pacientesController;
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

// Route::get('proyect', [pacientesController::class, 'index']);
// Route::get('proyect', [pacientesController::class, 'servicios']);

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/servicios', function () {
    return view('servicios');
});
