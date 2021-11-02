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
    return view('home');
}) ->name('home');


Route::get('/info', function () {
    return view('info');
}) ->name('info');


Route::get('/contact', function () {
    return view('contact');
}) ->name('contact');



Route::get('/tnf', function () {
    return view('tnf');
}) ->name('tnf');


Route::get('/hiring', function () {
    return view('hiring');
}) ->name('hiring');

Route::get('/tbags', function () {
    return view('tbags');
}) ->name('tbags');

