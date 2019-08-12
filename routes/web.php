<?php

// routes for site
Route::get('/', 'siteController@home') ->name('home');
Route::get('/ecosytem/bms', 'siteController@eco_bms') ->name('eco_bms');
Route::get('/ecosytem/motorcontroller', 'siteController@eco_mc') ->name('eco_mc');
Route::get('/ecosytem/ivec', 'siteController@eco_ivec') ->name('eco_ivec');
Route::get('/ecosytem/services', 'siteController@eco_services') ->name('eco_services');
Route::get('/associates', 'siteController@associates') ->name('associates');
Route::get('/team', 'siteController@team') ->name('team');
Route::get('/contact', 'siteController@contact') ->name('contact');
Route::get('/legal', 'siteController@legal') ->name('legal');

// routes for cpanel
Route::get('/cpanel', 'cpanelController@index') ->name('cpanel');
