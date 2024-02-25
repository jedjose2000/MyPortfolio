<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\WelcomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/skills', [WelcomeController::class, 'skills']);
Route::get('/projects', [WelcomeController::class, 'projects']);
Route::post('/contact', [ContactController::class,'contact']);
Route::get('/allProjects', [WelcomeController::class, 'allProjectsWithSkills']);
