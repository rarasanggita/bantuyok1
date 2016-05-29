<?php

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/','MainController@home');
Route::get('/', ['uses' => 'MainController@home', 'as' => 'root.view']);


// raras
// Route::get('/profile', 'Profile@profile');
// Route::get('/profile', ['uses' => 'CUser@profile', 'as' => 'profile.view']);
Route::get('/profile/{username}', ['uses' => 'CUser@profileUser', 'as' => 'profile.view']);
// Route::get('/thread', 'Thread@thread');
// Route::get('/thread', ['uses' => 'Thread@thread', 'as' => 'thread.view']);


// VANIA
// Route::get('/home','MainController@home');
Route::get('/home', ['uses' => 'MainController@home', 'as' => 'home.view']);
// Route::get('/home#kesini','MainController@homeThr');
Route::get('/home#thread', ['uses' => 'MainController@homeThr', 'as' => 'homeThr.view']);


// Route::get('/signup','CUser@signup');
Route::get('/signup', ['uses' => 'CUser@signup', 'as' => 'signup.view']);
// Route::post('/signup','CUser@signupvalidate');
Route::post('/signup', ['uses' => 'CUser@signupvalidate', 'as' => 'signup.view']);


// Route::get('/petugas','Staff@petugas');
Route::get('/petugas', ['uses' => 'Staff@petugas', 'as' => 'petugas.view']);
// Route::get('/petugas/login','Staff@login');
Route::get('/petugas/login', ['uses' => 'Staff@login', 'as' => 'petugasLog.view']);
// Route::post('/petugas/login','Staff@loginvalidation');
Route::post('/petugas/login', ['uses' => 'Staff@loginvalidation', 'as' => 'petugasLog.view']);


// Route::post('/login','User@loginvalidation');
Route::post('/login', ['uses' => 'CUser@loginvalidation', 'as' => 'login.view']);
// Route::get('/logout','UserController@getlogout');
Route::get('/logout', ['uses' => 'CUser@getlogout', 'as' => 'logout.view']);


// Route::get('/threadAdd','CThread@formthread');
Route::get('/threadAdd', ['uses' => 'CThread@formthread', 'as' => 'threadAdd.view']);
// Route::post('/threadAdd','CThread@addThread');
Route::post('/threadAdd', ['uses' => 'CThread@addThread', 'as' => 'threadAdd.view']);


Route::get('/thread/{id}', ['uses' => 'CThread@thread', 'as' => 'thread.view']);
Route::get('/thread/image/{filename}', ['uses' => 'CThread@getImages', 'as' => 'getImageThr.view']);
Route::post('/thread/comment', ['uses' => 'CComment@postComment', 'as' => 'addComment.view']);
Route::post('/thread/subComment', ['uses' => 'CSub_comment@postComment', 'as' => 'addSubComment.view']);

Route::get('/thread/addLectures/{thread_id}', ['uses' => 'CLecture@addLectures', 'as' => 'addLectures.view']);

