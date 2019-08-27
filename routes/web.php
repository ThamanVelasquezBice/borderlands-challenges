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
    $games = App\Models\Games::get();

    return view('welcome', compact('games'));
});

Route::post('/farm', 'FarmingController@getLegendary');

Route::post('/generate/challenge', 'GeneratorController@generateChallenge');
