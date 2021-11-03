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
    return view('home',['active'=>'home']);
}) ->name('home');


Route::get('/info', function () {
    return view('info', ['active'=>'info']);
}) ->name('info');


Route::get('/contact', function () {
    return view('contact',['active'=>'contact']);
}) ->name('contact');



Route::get('/tnf', function () {
    return view('tnf',['active'=>'tnf']);
}) ->name('tnf');

Route::get('/quality_management', function () {
    return view('quality_management',['active'=>'quality_management']);
}) ->name('quality_management');


Route::get('recruitment', function () {
    return view('recruitment',['active'=>'recruitment']);
}) ->name('recruitment');

Route::get('/tbags', function () {
    return view('tbags',['active'=>'tbags']);
}) ->name('tbags');

