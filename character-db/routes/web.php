<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Character;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', [UserController::class, 'index']);

Route::get('create', function () {
    return view('create');
});

Route::get('log-in', function () {
    return view('log-in');
});

Route::get('sign-up', function () {
    return view('sign-up');
});

Route::get('character', [CharacterController::class, 'index']);

Route::get('/dbconn', function () {
    return view('dbconn');
});

Route::get('/modeling', function () {
    return view ('dbconn', [Character::all()]);
});
