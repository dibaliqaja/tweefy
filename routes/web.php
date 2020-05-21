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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/tweefs', 'TweefsController@index')->name('home');
    Route::post('/tweefs', 'TweefsController@store');

    Route::post('/profiles/{user:username}/follow', 'FollowsController@store')->name('follow');
    Route::get('/profiles/{user:username}/edit', 'ProfilesController@edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', 'ProfilesController@update')->middleware('can:edit,user');

    Route::get('/explore', 'ExploreController@index');
});

Route::get('/profiles/{user:username}', 'ProfilesController@show')->name('profile');
Auth::routes();
