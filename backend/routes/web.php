<?php

use App\Http\Controllers\RssReader\IndexConstroller;
use App\Http\Controllers\RssReader\RssReaderConstroller;
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

Route::get(
    '/', function () {
        return view('welcome');
    }
);

Route::prefix('rss')->name('rss.')->group(
    function () {
        Route::get('/', [IndexConstroller::class, 'index'])->name('index');
    }
);
