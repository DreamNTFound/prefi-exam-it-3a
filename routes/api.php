<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{id}', [StudentController::class, 'select']);
Route::post('/students', [StudentController::class, 'create']);
Route::patch('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'delete']);

Route::get('/students/{id}/subjects', [SubjectController::class, 'indexSubject']);
Route::post('/students/{id}/subjects', [SubjectController::class, 'createSubject']);
Route::get('/students/{id}/subjects/{subjectId}', [SubjectController::class, 'selectSubject']);
Route::patch('/students/{id}/subjects/{subjectId}', [SubjectController::class, 'updateSubject']);