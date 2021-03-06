<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

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

Route::get('Welcome', function () {
    return view('welcome');
});

// Route::get('home', function () {
//     return view('home');
// });
Route::get('home', [HomeController::class, 'clod']);

Route::get('omah', [HomeController::class, 'newbie']);

Route::get('/', [HomeController::class, 'template']);

Route::get('belajar', [HomeController::class, 'belajar']);

Route::get('learn', [HomeController::class, 'learn']);

Route::get('about', [HomeController::class, 'about']);

// Route::get('mahasiswa', [FirstController::class, 'mahasiswa']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// students : get(untuk pergi ke halaman)
Route::get('/students', [StudentsController::class, 'index']);

Route::get('/students/create', [StudentsController::class, 'create']);

Route::get('/students/{student}', [StudentsController::class, 'show']);

Route::post('/students', [StudentsController::class, 'store']);

Route::delete('/students/{student}', [StudentsController::class, 'destroy']);

Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);

Route::patch('/students/{student}', [StudentsController::class, 'update']);