<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
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


Route::get('/', function () {
    return view('home');
});

Route::get('/news',function() {

    return view('news');

});

Route::get('/news/news1',function() {

    return view('news-pages/news1');

});

Route::get('/members', function(){

    return view('members');
    
});


// Route::get('/news', 'AppController@navigateNews')->name('news');
// Route::get('/news',[AppController::class, 'navigateNews'])->name('news');