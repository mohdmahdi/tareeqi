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

Route::get('users', function () {
    return \App\User::with(['quizzes'])->paginate(10);
});

Route::get('sections', function () {
    return \App\Section:: with(['questions'])->paginate(7);
});

Route::get('questions', function () {
    return \App\Question:: with(['answers'])->paginate(2);
});

Route::get('answers', function () {
    return \App\Question:: with(['answers'])->paginate(2);
});

Route::get('/', function () {
    return view('welcome');
});


