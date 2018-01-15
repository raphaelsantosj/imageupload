<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('upload-files','FileController');
