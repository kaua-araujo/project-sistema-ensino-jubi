<?php

use App\Http\Controllers\courses\CoursesController;
use App\Http\Controllers\courses\CourseUpdateController;
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
    //cadastro e index
    Route::get('/Cursos', [CoursesController::class, 'form'])->name('courses.index');
    Route::get('/Cursos/cadastrar-cursos', [CreateCourseController::class, 'formCreate'])->name('createCourse.form');
    Route::post('/Cursos/cadastrar-cursos/criar', [CreateCourseController::class, 'create'])->name('createCourse.create');
    //Show e Update
    Route::get('/Cursos/show/{id}', [CoursesController::class, 'show'])->name('show.course');
    Route::get('/Cursos/editar-curso/{id}', [CourseUpdateController::class, 'updateForm'])->name('updateCourse.form');
    Route::post('/Cursos/editar-curso/{id}', [CourseUpdateController::class, 'update'])->name('updateCourse.update');
    //Delete
    Route::post('/Cursos/deletar-curso/{id}', [DestroyCourseController::class, 'destroy'])->name('course.destroy');