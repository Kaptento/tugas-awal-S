<?php

use App\http\Controllers\MajorController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolClass\index;
use App\Http\Controllers\SchoolClass\edit;
use App\Http\Controllers\SchoolClass\store;
use App\Http\Controllers\SchoolClass\update;
use App\Http\Controllers\SchoolClass\destroy;


Route::get('/', function () {
    return view('welcome');
});


//management data siswa(Action)
Route::name('students.')->prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');

    Route::get('/{id}', [StudentController::class, 'show'])->name('show');

    // bagian create, edit, store, update, delete
    Route::get('/create', [StudentController::class, 'create'])->name('.create');

    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('.edit');

    Route::post('/', [StudentController::class, 'store'])->name('.store');

    Route::put('/{id}', [StudentController::class, 'update'])->name('.update');

    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('.destroy');
});


Route::name('teachers.')->prefix('teachers')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('index');

    Route::get('/{id}', [TeacherController::class, 'show'])->name('show');

    // bagian create, edit, store, update, delete
    Route::get('/create', [TeacherController::class, 'create'])->name('.create');

    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('.edit');

    Route::post('/', [TeacherController::class, 'store'])->name('.store');

    Route::put('/{id}', [TeacherController::class, 'update'])->name('.update');

    Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('.destroy');
});


Route::name('teachers.')->prefix('teachers')->group(function () {
    Route::get('/', IndexController::class)->name('index');

    Route::get('/{id}', ShowController::class)->name('show');

    // bagian create, edit, store, update, delete
    Route::get('/create', CreateController::class)->name('.create');

    Route::get('/{id}/edit', EditController::class)->name('.edit');

    Route::post('/', StoreController::class)->name('.store');

    Route::put('/{id}', UpdateController::class)->name('.update');

    Route::delete('/{id}', DestroyController::class)->name('.destroy');
});

Route::resource('majors', MajorController::class);
