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
    $aphorisms = DB::table('aphorisms')->get();

    return response()
        ->json(['name' => 'Abigail', 'state' => 'CA']);
    return view('welcome', compact('tasks'));
});

Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->get();
    return view('welcome', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
    $tasks = DB::table('tasks')->get();
    dd($tasks);
    return view('welcome', compact('tasks'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
