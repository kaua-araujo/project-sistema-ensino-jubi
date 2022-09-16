<?php

use App\Http\Controllers\courses\CoursesController;
use App\Http\Controllers\courses\CreateCourseController;
use App\Http\Controllers\IndexController;
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
//Index
Route::get('/', [IndexController::class, 'index'])->name('ensinoJubi.index');
//Curso
Route::get('/Cursos', [CoursesController::class, 'form'])->name('courses.index');
Route::get('/Cursos/Cadastrar-Cursos', [CreateCourseController::class, 'formCreate'])->name('createCourse.form');
Route::post('/Cursos/Cadastrar-Cursos/Criar', [CreateCourseController::class, 'create'])->name('createCourse.create');
