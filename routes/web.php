<?php

use App\Http\Controllers\AccountingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('admin', AdminController::class);
Route::get("/chat", [HomeController::class, 'chat'])->name('chat');
Route::resource('manager', ManagerController::class);
Route::resource('accounting', AccountingController::class);

