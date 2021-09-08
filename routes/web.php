<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Auth\{
    Login,
    Register,
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::middleware(['auth'])->group(function () {
    // if not logged in auth middleware will redirect to 'login' route

    Route::get('/dashboard', Dashboard::class)->name('dashboard');

});
