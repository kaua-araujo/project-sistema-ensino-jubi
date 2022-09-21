<?php

use App\Http\Controllers\courses\CourseDestroyController;
use App\Http\Controllers\courses\CoursesController;
use App\Http\Controllers\courses\CourseUpdateController;
use App\Http\Controllers\courses\CreateCourseController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\students\createStudentController;
use App\Http\Controllers\students\DestroyStudentsController;
use App\Http\Controllers\students\IndexStudentsController;
use App\Http\Controllers\students\UpdateStudentController;
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
    //index
    Route::get('/Cursos', [CoursesController::class, 'form'])->name('courses.index');
    //Show
    Route::get('/Cursos/show/{id}', [CoursesController::class, 'show'])->name('show.course');
    //Create
    Route::get('/Cursos/cadastrar-cursos', [CreateCourseController::class, 'formCreate'])->name('createCourse.form');
    Route::post('/Cursos/cadastrar-cursos/create', [CreateCourseController::class, 'create'])->name('createCourse.create');
    //Update
    Route::get('/Cursos/editar-curso/{id}', [CourseUpdateController::class, 'updateForm'])->name('updateCourse.form');
    Route::post('/Cursos/editar-curso/{id}', [CourseUpdateController::class, 'update'])->name('updateCourse.update');
    //Delete
    Route::get('/Cursos/deletar-curso/{id}', [CourseDestroyController::class, 'destroy'])->name('course.destroy');

//Alunos
    //index
    Route::get('/Alunos', [IndexStudentsController::class, 'index'])->name('students.index');
    //Show
    Route::get('Cursos/Show/{id}', [IndexStudentsController::class, 'show'])->name('show.student');
    //Create
    Route::get('/Alunos/cadastrar-alunos', [createStudentController::class, 'formCreate'])->name('createStudents.form');
    Route::post('/Alunos/cadastrar-alunos/create', [createStudentController::class, 'create'])->name('createStudents.create');
    //Update
    Route::get('/Alunos/editar-aluno/{id}', [UpdateStudentController::class,'updateForm'])->name('updateStudent.form');
    Route::post('/Alunos/editar-aluno/{id}/editar', [UpdateStudentController::class, 'update'])->name('updateStudent.update');
    //Delete
    Route::get('/Alunos/deletar-aluno/{id}', [DestroyStudentsController::class, 'destroy'])->name('student.destroy');