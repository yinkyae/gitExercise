<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stash', function () {
    return view('git-stash-testing');
})->name('welcome.stash');
