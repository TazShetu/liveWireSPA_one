<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    Dashboard,
    Auth\Login,
    Auth\Register,
};

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

Route::middleware(['guest'])->group(function () {
    // if logged in, by default 'guest middleware' will redirect to ../home url
    // change this in app/providers/RouteServiceProvider.php
    // public const HOME = '/dashboard';

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');

});


Route::middleware(['auth'])->group(function () {
    // if not logged in, by default 'auth middleware' will redirect to 'login' route

    Route::get('/dashboard', Dashboard::class)->name('dashboard');

});
