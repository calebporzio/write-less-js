<?php

Route::redirect('/', '/code');

// Routes
Route::view('/code', 'code');
Route::view('/issues', 'issues');
Route::get('/issue', 'IssuePageController@show');
Route::post('/issue/comment', 'IssuePageController@storeComment');
Route::get('/repo', 'RepoController@index');
