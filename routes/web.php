<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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

// Auth::routes();

Route::get('/logOut', [LoginController::class, 'logout'])->name('logOut');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login_route',[LoginController::class, 'login_route'])->name('login_route');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mail',[MailController::class, 'mailIndex']);
Route::post('/send-mail',[MailController::class, 'mail'])->name('send-mail');