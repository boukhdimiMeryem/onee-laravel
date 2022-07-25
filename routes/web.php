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

Route::resources([
    'dashboard/normes'=>App\Http\Controllers\NormeController::class
]);

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['auth']], function () {
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
});



require __DIR__.'/auth.php';

//Route::get('/dashboard', 'App\Http\Controllers\NormeSearchController@index');
