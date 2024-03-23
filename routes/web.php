<?php

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Debugbar::addMessage('message');
    return view('welcome');
});


