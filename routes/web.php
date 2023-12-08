<?php

use App\Livewire\Pages\Index;
use Illuminate\Support\Facades\Route;

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

Route::get('/',Index::class)->name('index');
Route::get('/login',function (){
    \Illuminate\Support\Facades\Auth::loginUsingId(1);
    session()->regenerate();
    return back();
})->name('login');
Route::get('/logout',function (){
    \Illuminate\Support\Facades\Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return back();
})->name('logout');
