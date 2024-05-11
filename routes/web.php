<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UniversityController;

Route::get('/', function(){
    return redirect()->route('university.index');
});

Route::resource('/university', UniversityController::class)->names('university');
Route::get('/about', [PageController::class,'about'])->name('about');
Route::get('/contact', [PageController::class,'contact'])->name('contact');
Route::get('/schools', [UniversityController::class,'schools'])->name('schools');
Route::get('/team', [PageController::class,'team'])->name('team');
Route::get('/page404', [PageController::class,'page404'])->name('page404');
Route::get('/testimonial', [PageController::class,'testimonial'])->name('testimonial');
Route::get('admin/dashboard', [PageController::class,'admin_dashboard'])->middleware(['auth','admin'])->name('admin.dashboard');
Route::get('/raking', [UniversityController::class,'raking'])->name('raking');
Route::get('admin/schools', [UniversityController::class,'schools_list'])->name('schools_list');
Route::get('admin/users', [UniversityController::class,'users_list'])->name('users_list');
Route::post('/university/{id}', [UniversityController::class,'update'])->name('university.update');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';