<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ BlogController::class, 'home' ]);
Route::get('/create',[ BlogController::class, 'create' ]);
Route::post('/store',[ BlogController::class, 'store' ])->name('blog.store');


