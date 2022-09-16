<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Superadmin\supernormeController;
use App\Models\Norme;
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

// Route::resources([
//     'dashboard/normes'=>App\Http\Controllers\NormeController::class
// ]);

Route::get('/', function () {
    $normes = Norme::all();
    return view('table')->with('normes', $normes);
});
// Route::resource("normes", App\Http\Controllers\NormeController::class);

Route::get('/dashboard/normes/edit/{id}', [App\Http\Controllers\NormeController::class,'edit'])->name('edit'); 

Route::delete('/dashboard/normes/{id}', [App\Http\Controllers\NormeController::class,'destroy'])->name('destroy'); 

Route::put('dashboard/normes/update/{norme}', [App\Http\Controllers\NormeController::class,'update'])->name('update'); 

Route::get('/dashboard/normes/ajouter', [App\Http\Controllers\NormeController::class,'create'])->name('create'); 

Route::post('/dashboard/normes/ajouter',[App\Http\Controllers\NormeController::class,'store'])->name('store');

// Route::get('dashboard', function () {
//     $normes = Norme::all();
//     return view('adminDashboard',compact('normes'));
// });

// Route::get('/normes', [App\Http\Controllers\NormeController::class,'index']);

Route::get('/normes/{ic}', [App\Http\Controllers\NormeController::class,'show'])->name('show');

Route::group(['middleware'=>['auth']], function () {
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::get('/dashboard/search',[App\Http\Controllers\NormeController::class,'search'])->name('search');

require __DIR__.'/auth.php';

// Route::get('/dashboard', 'App\Http\Controllers\NormeController@index');




// Route::get('norme/','NormeController@getone');

