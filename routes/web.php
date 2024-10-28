<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// for web pages of web application.. website action or different pages

// this method is used when we have only one route or maybe less functionality
/*Route::get('/', function () {
    return view('welcome');
});*/


// else controller method is used for routes with some other functionally attached to it
// many functionality attached to a route
# Basic route
Route::get('/', [AppController::class, 'index']);
Route::get('/about/{paramname}', [AppController::class, 'about']);


# Route with parameter
/*Route::get('/about/{paramname}', function () {
    return '<h1>Hello ABOUT page<h1>';
});*/
// http://127.0.0.1/about/1


# Route with optional parameter
Route::get('/services/{service_param?}', function () {
    return '<h1>Hello services page<h1>';
});

# Named Routes(Also known as reverse routing)
Route::get('/contact', "AppController@function-name")->name('contact');
