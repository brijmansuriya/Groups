<?php
use Illuminate\Support\Facades\Route;

//Home
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
//Admin
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\AddGroupController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\TypeController;




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
Route::get('/', [FrontendController::class, 'index']);
Auth::routes();
Route::get('/home', [HomeController::class, 'index']);
Route::view('demo', 'auth/register');
Route::get('/AddGroup', [FrontendController::class, 'addGroup']);
Route::post('/savegroup', [FrontendController::class, 'savegroup']);
Route::post('/importExcel', [FrontendController::class, 'importExcel']);

//cler
Route::get('/clr', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:clear');
});

Route::group(['prefix' => 'admin/category'], function () {
    Route::get('/', [categoryController::class, 'index']);
    Route::get('/add', [categoryController::class, 'add']);
    Route::get('/add/{id}', [categoryController::class, 'add']);
    Route::post('/save', [categoryController::class, 'save']);
    Route::get('/delete/{id}', [categoryController::class, 'delete']);
});

Route::group(['prefix' => 'admin/addgroup'], function () {
    Route::get('/', [AddGroupController::class, 'AdminAddGroup']);
    Route::get('/add', [AddGroupController::class, 'AdminGroupAdd']);
    Route::get('/add/{id}', [AddGroupController::class, 'AdminGroupAdd']);
    Route::post('/save', [AddGroupController::class, 'save']);
    Route::get('/delete/{id}', [AddGroupController::class, 'delete']);
});

Route::group(['prefix' => 'admin/type'], function () {
    Route::get('/', [TypeController::class, 'index']);
    Route::get('/add', [TypeController::class, 'add']);
    Route::get('/add/{id}', [TypeController::class, 'add']);
    Route::post('/save', [TypeController::class, 'save']);
    Route::get('/delete/{id}', [TypeController::class, 'delete']);
});



