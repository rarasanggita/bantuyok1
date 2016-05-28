<?php


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','MainController@home');
Route::get('/ajar','Lecture@ajar');

// raras
Route::get('/profile', 'Profile@profile');
Route::get('/thread', 'Thread@thread');

// VANIA
Route::get('/home','MainController@home');
Route::get('/home#kesini','MainController@homeThr');

Route::get('/signup','CUser@signup');
Route::post('/signup','CUser@signupvalidate');

Route::get('/petugas','Staff@petugas');
Route::get('/petugas/login','Staff@login');
Route::post('/petugas/login','Staff@loginvalidation');

Route::post('/login','User@loginvalidation');

Route::get('/threadAdd','Thread@formthread');
Route::post('/threadAdd','Thread@addThread');
