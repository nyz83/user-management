<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn() => to_route('login'));
Route::redirect('/register', '/login');

Route::middleware('auth')->group(function () {
    Route::resource('/users', UserController::class);
    Route::resource('/roles', RoleController::class);
});

require __DIR__ . '/auth.php';
