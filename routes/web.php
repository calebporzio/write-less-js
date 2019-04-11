<?php

// View Routes
Route::redirect('/', '/code');
Route::view('/code', 'code');
Route::view('/issues', 'issues');
Route::get('/issue', 'IssuePageController@show');
Route::post('/issue/comment', 'IssuePageController@storeComment');
Route::get('api/repos', 'Api\RepoController@index');
