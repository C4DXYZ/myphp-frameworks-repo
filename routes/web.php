<?php

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

Route::get('about', function()
{
    return view('about');
});

Route::get('about_php2_subject', function()
{
    return view('about_php2_subject');
});

Route::get('educational_background', function()
{
    return view('educational_background');
});

Route::get('my_subjects', function()
{
    return view('my_subjects');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


