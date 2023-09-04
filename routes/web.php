<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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

// Root
Route::get('/', function() { 
    return redirect('parent-guardian/login');
})->name('root');

// Authenticated Users
Route::middleware('auth')->group(function () {
    // Dashboard Module
    Route::get('dashboard', function() { return view('dashboard.index'); })
        ->name('dashboard');


    // Profile Module
    Route::get('profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');


    // Students Module
    Route::get('students', [StudentController::class, 'index'])
        ->middleware('can:view students')
        ->name('students.index');
});



// includes the auth.php in routes
require __DIR__.'/auth.php';
