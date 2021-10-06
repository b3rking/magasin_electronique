<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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
      return view('home')
              ->with('users', User::all());
})->name('home');


Route::resource('users', 'App\Http\Controllers\UserController');

// Route::post('loginUser', 'App\Http\Controllers\AppController@loginUser')->name('login');

// Route::post('login', 'App\Http\Controllers\AppController@login')->name('loginUser');

// Route::post('logout', 'App\Http\Controllers\AppController@logout')->name('logout');

Route::resource('fournisseurs', 'App\Http\Controllers\FournisseurController');

Route::resource('equipements', 'App\Http\Controllers\EquipementController');

Route::resource('factures', 'App\Http\Controllers\FactureController');