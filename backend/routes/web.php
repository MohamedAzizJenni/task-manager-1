<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// ⚠️ DELETE this after you run it once!
use Illuminate\Support\Facades\Artisan;

Route::get('/setup', function () {
    Artisan::call('key:generate');
    Artisan::call('migrate', ['--force' => true]);
    return '✅ App key generated & migrations run!';
});


Route::get('/', function () {
    return view('welcome');
});


