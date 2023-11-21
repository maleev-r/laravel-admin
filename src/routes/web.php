<?php

use Illuminate\Support\Facades\Route;
use LuckyRomka\LaravelAdmin\Controllers\LaravelAdminController;

Route::get('/admin', [LaravelAdminController::class,'index']);
