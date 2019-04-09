<?php

Route::get('/retro/comment', 'Retro\CommentController@index');
Route::post('/retro/comment', 'Retro\CommentController@store');
