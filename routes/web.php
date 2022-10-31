<?php

use App\Http\Controllers\RegisterController;
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

$message = '';
$user = 'Valer';
Route::view('', 'pages.home.index')->name('main');
Route::view('home', 'pages.home.index')->name('home');
Route::view('shop', 'pages.shop.index')->name('shop');
Route::view('elements', 'pages.elements.index')->name('elements');
Route::view('register', 'pages.register.index', compact('message'))->name('register');
Route::view('login', 'pages.login.index', compact('message'))->name('login');
Route::view('admin', 'pages.admin.index', compact('message'))->name('admin');
Route::view('recovery', 'pages.recovery.index', compact('message'))->name('recovery');
Route::view('addProduct', 'pages.addProduct.index')->name('addProduct');

Route::post('register', [RegisterController::class, 'addUser'])->name('addUser');
Route::post('login', [RegisterController::class, 'login'])->name('login');
