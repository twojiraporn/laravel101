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

Route::get('/hello', function () {
    return route('admin.page', ['id' => 1234]);
});

Route::get('/hello/id', function () {
    return 'Hello ID';
});

Route::get('/pages', 'PagesController@index');

Route::get('/pages/{id}', 'PagesController@show');

// Route::get('/page/{id?}', function ($id='default') {
//     return 'This is Page: ' . $id;
// })->name('admin.page');

// Route::get('/news/{id?}', function ($id=null) {
//     return 'This is News: ' . $id;
// })->name('staff.news');