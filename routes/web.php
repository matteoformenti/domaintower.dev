<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('{domain}', 'domain')->name('domain');
