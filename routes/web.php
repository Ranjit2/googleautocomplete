<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleAutocompleteController;

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

Route::get('/autocomplete',[ GoogleAutocompleteController::class,'index']);
Route::get('/placeid',[ GoogleAutocompleteController::class,'getPlaceId'])->name('placeid');
Route::get('address',[ GoogleAutocompleteController::class,'findAddressBasedOnPlaceId'])->name('address');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
