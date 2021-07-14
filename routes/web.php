<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\PhotoController;

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


Route::group(['prefix' => 'admin/category'], function () {
    Route::get('/', [categoryController::class, 'index']);
    Route::get('/add',[categoryController::class, 'add']);
    Route::get('/add/{id}',[categoryController::class, 'add']);
    Route::post('/save',[categoryController::class, 'save']);
    Route::get('/delete/{id}',[categoryController::class, 'delete']);
});

Route::view('/demo', 'AddGroup');
Route::get('/kd', [PhotoController::class, 'index']);