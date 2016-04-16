<?php

Route::get('/', function () {
    return view('home.welcome');
});

Route::get('/documentation',
    [
        'as' => 'documentation',
        'uses' => 'DocumentationController@index'
    ]
);
