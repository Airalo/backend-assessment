<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/db-test', function () {
    return DB::connection()->getConfig('driver') == 'sqlite'
        ? DB::select("SELECT name FROM sqlite_master WHERE type='table' ORDER BY name;")
        : DB::select('SHOW TABLES');
});
