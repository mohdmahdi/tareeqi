<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('sections' , 'Api\SectionController@index');
Route::get('sections/{id}' , 'Api\SectionController@show');


Route::get('quizzes' , 'Api\QuizController@index');
Route::get('quizzes/{id}' , 'Api\QuizController@show');


Route::get('questions' , 'Api\QuestionController@index');
Route::get('questions/{id}' , 'Api\QuestionController@show' );


Route::get('answers' , 'Api\AnswerController@index');
Route::get('answers/{id}' , 'Api\AnswerController@show');

Route::get('users' , 'Api\UserController@index');
Route::get('users/{id}' , 'Api\UserController@show');


Route::post('auth/register' , 'Api\AuthController@register');
Route::post('auth/login' , 'Api\AuthController@login');

Route::middleware('auth:api')->get('users1', function (Request $request) {
    return \App\User::with(['quizzes'])->paginate(10);

});
