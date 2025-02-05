<?php

use App\Http\Controllers\LinkController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/links', [LinkController::class, 'store']);

Route::put('/links/{shortenedUrl}', [LinkController::class, 'update']);
Route::delete('/links/{shortenedUrl}', [LinkController::class, 'destroy']);
Route::get('/links/{shortenedUrl}/stats', [LinkController::class, 'stats']);
