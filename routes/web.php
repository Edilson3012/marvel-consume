<?php

use App\Http\Controllers\MarvelController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('/')->group(function(){

    Route::get('', [MarvelController::class, 'index']);
    Route::get('/details/{id}', [MarvelController::class, 'details'])->name('marvel.details');
    // Route::get('/details/{id}', [MarvelController::class, 'details']);

});

