<?php

use App\Http\Controllers\API\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/add-comment', [CommentController::class, 'store']);
Route::get('/comments', [CommentController::class, 'fetch']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
