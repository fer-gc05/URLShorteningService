<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/{shortenedUrl}', [LinkController::class, 'show']);

require __DIR__.'/auth.php';
