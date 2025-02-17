<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


Route::middleware('auth')->group(function () {
    Route::get('/', Home::class)->name('home');
});







// ! DEBUGGING ROUTES ! //
Route::get('/clear', function () {
    Artisan::call('optimize:clear');

    Auth::attempt(['username' => 'jpgerber', 'password' => 'jordan'], true);

    return redirect()->route('home');
})->name('clear');

Route::middleware('guest')->get('/login', function () {
    return redirect()->route('clear');
})->name('login');
