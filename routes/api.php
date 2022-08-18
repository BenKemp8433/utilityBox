<?php

use App\Http\Controllers\TimeLogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/newLog/', [TimeLogController::class, 'getNew'])->name('api.newLog');

Route::get('/latestLog/', [TimeLogController::class, 'getLatest'])->name('api.latestLog');
Route::post('/latestLog/', [TimeLogController::class, 'postLatest'])->name('api.latestLog');

Route::get('/allLogs/', [TimeLogController::class, 'getAll'])->name('api.allLogs');
