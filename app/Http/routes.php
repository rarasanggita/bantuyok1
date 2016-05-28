<?php


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','MainController@home');
Route::get('/ajar','LectureController@ajar');

// raras
Route::get('/profile', 'UserController@profile');
Route::get('/thread', 'ThreadController@thread');

// VANIA
Route::get('/home','MainController@home');
Route::get('/home#kesini','MainController@homeThr');

Route::get('/signup','UserController@signup');
Route::post('/signup','UserController@signupvalidate');

Route::get('/petugas','StaffController@petugas');
Route::get('/petugas/login','StaffController@login');
Route::post('/petugas/login','StaffController@loginvalidation');

Route::post('/login','UserController@loginvalidation');

Route::get('/threadAdd','ThreadController@formthread');
Route::post('/threadAdd','ThreadController@addThread');
