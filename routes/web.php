<?php

// API Routes
Route::get('/api/repo', 'RepoController@index');

// SPA Routes
Route::view('/{any}', 'base')->where('any', '.*');
