<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TestMiddleware;

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

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

Route::get('test', 'TestController@index')->middleware(TestMiddleware::class);
Route::post('test', 'TestController@post');
