<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Contacts\Http\Controllers\ContactController;

Route::post('/contacts/create',[ContactController::class, 'create']);
Route::post('/contacts/update',[ContactController::class, 'update']);
Route::post('/contacts/delete',[ContactController::class, 'delete']);
