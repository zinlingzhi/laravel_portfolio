<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
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



Route::get('/home', function() {
    $blogs = [
            [
                'title' => 'Title One',
                'body' => 'This is a Body One'
            ],
            [
                'title' => 'Title Two',
                'body' => 'This is a Body Two'
            ],
            [
                'title' => 'Title Three',
                'body' => 'This is a Body Three'
            ],
            [
                'title' => 'Title Four',
                'body' => 'This is a Body Four'
            ]
        ];
    return view('home', compact('blogs'));
});

Route::get('about', function() {
    return view('about');
})->name('about');

Route::get('contact', function() {
    return view('contact');
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');