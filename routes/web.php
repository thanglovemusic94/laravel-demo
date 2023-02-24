<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('test')->name('test');
});

Route::get('/news/{id}', function ($id) {
    return "bai viet so $id";
})
    ->name('new')
//    ->where('id', '[0-9]+')
;

Route::get('/service', function ($id) {
    return "service $id";
});
