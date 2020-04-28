<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/GestEau', function () {
    return view('projets/projetGestEau');
});
Route::get('/Stage', function () {
    return view('projets/projetStage');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('projets','ProjetController');



Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
});
