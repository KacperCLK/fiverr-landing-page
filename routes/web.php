<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\OurWorksController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get("", fn () => to_route('home.index'))->name('home');
Route::resource("home", HomePageController::class)
    ->only("index");

Route::get('/our-works/{project_name}', [OurWorksController::class, 'show'])->name('our-works.show');