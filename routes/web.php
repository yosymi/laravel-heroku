<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaveController;

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

Route::redirect('/', '/list');

Route::controller(SaveController::class)->group(function(){
    Route::get('/list','list');
    Route::get('/create','create');
    Route::post('/store','store');
    Route::get('/{id}/edit','edit');
    Route::patch('/{id}','update');
    Route::get('/{id}','show');
    Route::delete('/{id}','destroy');
});
