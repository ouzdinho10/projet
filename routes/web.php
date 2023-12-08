<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;
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


Route::get('/apprenants', [ApprenantController::class, 'index']);
Route::get('/formations', [ApprenantController::class, 'liste_formation']);
// Ajoutez d'autres routes selon vos besoins
