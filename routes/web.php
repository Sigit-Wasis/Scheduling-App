<?php

/*
|--------------------------------------------------------------------------
| Web Routes  https://templatemag.com/demo/Dashio/
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

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');


Route::group(['middleware' => 'auth'],function(){

    Route::get('/dashboard','AdminController@dashboard');

    Route::get('/subject', 'SubjectController@index');
    Route::post('/subject/create', 'SubjectController@create');
    Route::get('/subject/{id}/edit', 'SubjectController@edit');
    Route::post('/subject/{id}/update', 'SubjectController@update');
    Route::get('/subject/{id}/delete', 'SubjectController@delete');


    Route::get('/class', 'ClassController@index');
    Route::post('/class/create', 'ClassController@create');
    Route::get('/class/{id}/edit', 'ClassController@edit');
    Route::post('/class/{id}/update', 'ClassController@update');
    Route::get('/class/{id}/delete', 'ClassController@delete');

    Route::get('teacher', 'TeacherController@index');
    Route::get('teacher/json','TeacherController@json');
    Route::post('teacher/create', 'TeacherController@create');
    Route::get('teacher/{id}/edit', 'TeacherController@edit');
    Route::patch('teacher/{id}/update', 'TeacherController@update');
    Route::get('/teacher/{id}/delete', 'TeacherController@delete');
});