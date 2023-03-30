<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/db-test', function () {
    return DB::connection()->getConfig('driver') == 'sqlite'
        ? DB::select("SELECT name FROM sqlite_master WHERE type='table' ORDER BY name;")
        : DB::select('SHOW TABLES');
});
