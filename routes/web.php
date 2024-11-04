<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(config('lauth.homepage_url'));
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //
});
