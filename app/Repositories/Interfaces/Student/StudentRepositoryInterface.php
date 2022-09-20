<?php

namespace App\Repositories\Interfaces\Student;

use App\Http\Dtos\Course\updateCourseDto;
use App\Http\Dtos\Students\createStudentDto;
use App\Http\Dtos\Students\updateStudentsDto;
use App\Models\student;

interface StudentRepositoryInterface
{
    public function index();
    public function create(createStudentDto $createStudentDto);
    public function destroy(string $id);
    public function update(updateStudentsDto $updateStudentsDto, string $id): ?student;
    public function show(string $id): ?student;
}