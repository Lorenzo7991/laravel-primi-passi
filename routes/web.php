<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = [
        'title' => 'Hello World',
        'message' => 'Welcome to my firs Laravel app!',
        'randomNumber' => mt_rand(1, 100),
    ];
    return view('helloWorld', $data);
})->name('home');

Route::get('/page1', function () {
    $title = 'Hello, welcome to Page 1!';
    return view('page1', compact('title'));
})->name('page1');