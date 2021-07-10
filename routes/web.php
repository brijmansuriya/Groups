<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategaryController;
use App\Http\Controllers\HomeController;

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
Auth::routes();
Route::get('/home', [HomeController::class, 'index']);
Route::view('demo', 'auth/register');

//cler
Route::get('/clr', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:clear');
});


Route::group(['prefix' => 'admin/categary'], function () {
    Route::get('/', [CategaryController::class, 'index']);
    Route::get('/add',[CategaryController::class, 'add']);
    Route::post('/save',[CategaryController::class, 'save']);
});