<?php

// API Routes
Route::get('/api/comment', 'Api\CommentController@index');
Route::post('/api/comment', 'Api\CommentController@store');
Route::get('/api/comment-count', 'Api\CommentCountController@show');
Route::get('/api/repo', 'Api\RepoController@index');

// SPA Routes
Route::view('/{any}', 'base')->where('any', '.*');
