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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'HomeController@users')->name('users');
Route::get('/edit/certificate/', 'HomeController@editCertificate')->name('edit.certificate');
Route::get('/certificate/{id}', 'HomeController@certificate')->name('certificate');
Route::get('/certificate/print_pdf/{id}', 'HomeController@print_pdf')->name('print.certificate');
