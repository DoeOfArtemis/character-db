<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\KeywordController;
use App\Http\Controllers\TagController;
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

Route::get('user', function () {
    return view('user');
});

Route::get('create', function () {
    return view('create');
});

Route::get('log-in', function () {
    return view('log-in');
});

Route::get('sign-up', function () {
    return view('sign-up');
});

Route::get('character', function () {
    return view('character');
});

Route::get('/dbconn', function () {
    return view('dbconn');
});

Route::get('/modeling', function () {
    return view ('welcome', [Character::itOK()]);
});

// Route::resource('character', CharacterController::class);
// Route::resource('user', UserController::class);
// Route::resource('keyword', KeywordController::class);
// Route::resource('tag', TagController::class);


Route::post('sign-up', [UserController::class, 'create'])->name('createuser');
Route::delete('user', [CharacterController::class, 'destroy'])->name('deletechar');
Route::post('create', [CharacterController::class, 'create'])->name('createchar');
// Route::get('/', [CharacterController::class, 'show'])->name('showchar');

Route::get('/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});