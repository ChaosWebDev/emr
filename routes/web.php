<?php

use App\Livewire\Home;
use App\Livewire\Pages\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


Route::middleware('auth')->group(function () {
    Route::get('/', Home::class)->name('home');
});







// ! DEBUGGING ROUTES ! //
Route::get('/clear', function () {
    Artisan::call('optimize:clear');
    return redirect()->route('home');
})->name('clear');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', Login::class)->name('login');
});
