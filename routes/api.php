<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommanController;

Route::get('backend/records', [CommanController::class, 'getProducts']);

