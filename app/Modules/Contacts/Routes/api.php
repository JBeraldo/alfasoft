<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Modules\Contacts\Http\Controllers\ContactController;

Route::get('/get',[ContactController::class, 'get']);
