<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BreedersController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\PlantsController;

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

Route::get('/', function() {
    return view('index');
})->name('index');
Route::resource('/breeder', BreedersController::class);
Route::resource('/group', GroupsController::class);
Route::resource('/plant', PlantsController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
