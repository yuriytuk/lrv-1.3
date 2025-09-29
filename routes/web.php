<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::resource('groups', GroupController::class);

Route::prefix('groups/{group}')->group(function () {
    Route::get('/students/create', [StudentController::class, 'create'])->name('groups.students.create');
    Route::post('/students', [StudentController::class, 'store'])->name('groups.students.store');
    Route::get('/students/{student}', [StudentController::class, 'show'])->name('groups.students.show');
});

Route::get('/', function () {
    return redirect()->route('groups.index');
});