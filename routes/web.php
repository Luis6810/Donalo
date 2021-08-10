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


Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu', 'MenuController@index')->name('menu');
Route::get('/menu/{platillo}', 'MenuController@show')->name('platillo');

Route::get('/especiales', 'EspecialesController@index')->name('especiales');

Route::get('/ubicacion', function () {
    return view('ubicacion');
})->name('ubicacion');


Route::get('/recibir-donacion/{id}', 'ComprarController@index')->name('comprar');

Route::post('/buy','ComprarController@buy')->name('buy');
Route::post('/registrarDonacion','DonarController@donar')->name('registrarDonacion');

Route::get('/descubre/{categorie}','DescubreController@categorie')->name('categorie');
Route::get('/descubre','DescubreController@index')->name('descubre');
Route::get('/donar','DonarController@index')->name('donar');
Route::get('/galeria', 'GaleriaController@index')->name('galeria');

