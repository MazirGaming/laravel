<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\loginController;

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


Route::get('/', [userController::class, 'index']);
Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'store']);


Route::prefix('backend')->group(function () {
    Route::get('/', [userController::class, 'index']);
    Route::get('/laravel', [userController::class, 'index']);
    Route::get('/{id}', [userController::class, 'handle']);
});





// NOTE


// ->name('user') =>  view {{route('user')}}

//Group Route
// Route::prefix('backend')->group(function () {
//     Route::get('/', [userController::class, 'index']);
//     Route::get('/laravel', [userController::class, 'index']);
// });
// Result => backend/larevel
