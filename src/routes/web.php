<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ModalController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [ContactController::class, 'index']);

Route::post('/contacts/confirm', [ContactController::class, 'confirm']);

Route::post('/thanks', [ContactController::class, 'store']);

Route::get('/register', function () {
    return view('auth.register'); // または Fortify のデフォルト設定
})->name('register');


Route::get('/login', function () {
    return view('auth.login'); // または Fortify のデフォルト設定
})->name('login');

Route::get('/search', [ManagementController::class, 'search']);

Route::get('/admin', [ManagementController::class, 'index']);

Route::get('/modal', [ModalController::class, 'modal']);