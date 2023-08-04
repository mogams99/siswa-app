<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* group routing stundent controller */
// Route::group(['prefix' => 'students'], function () {
//     Route::get('/', [StudentsController::class, 'index'])->name('students.index');
//     Route::get('/create', [StudentsController::class, 'create'])->name('students.create');
//     Route::post('/store', [StudentsController::class, 'store'])->name('students.store');
//     Route::get('/{student}/edit', [StudentsController::class, 'edit'])->name('students.edit');
//     Route::put('/{student}/update', [StudentsController::class, 'update'])->name('students.update');
//     Route::delete('/{student}/destroy', [StudentsController::class, 'destroy'])->name('students.destroy');
// });

/* define route resource of stundents controller */
Route::resource('students', StudentsController::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
