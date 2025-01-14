<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\parentModelController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\classModelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Get authenticated user
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Authentication routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Protected API resources
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/students', StudentController::class);
    Route::apiResource('/attendance', AttendanceController::class);
    Route::apiResource('/parents', parentModelsController::class); 
    Route::apiResource('/teachers', TeacherController::class);
    Route::apiResource('/subjects', SubjectController::class);
    Route::apiResource('/classMode', classModelsController::class); 
});
