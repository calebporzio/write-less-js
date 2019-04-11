<?php

Route::redirect('/', '/code');

// Routes
Route::get('/code', 'CodePageController@show');
Route::get('/issues', 'IssuesPageController@show');
Route::get('/issue', 'IssuePageController@show');
Route::get('/repo', 'RepoController@index');
