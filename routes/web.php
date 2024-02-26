<?php

use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', WelcomeController::class)->name('welcome');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function (){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/skills',SkillController::class);
    Route::resource('/projects',ProjectController::class);
});

//for running migrations when hosted
Route::get('/run-migrations', function (){
    Artisan::call('optimize:clear');
    Artisan::call('migrate:fresh');

    return 'migrated successfully';
});


require __DIR__.'/auth.php';
