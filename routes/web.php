<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostsController;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/{post:slug}', [PostsController::class, 'show']);
Route::get('/about', [AboutController::class, 'index']);
