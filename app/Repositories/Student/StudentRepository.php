<?php

namespace App\Repositories\Student;

use App\Http\Dtos\Students\createStudentDto;
use App\Http\Dtos\Students\updateStudentsDto;
use App\Models\student;
use App\Repositories\Interfaces\Student\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface
{
    private student $model;

    public function __construct()
    {
        $this->model = new student();
    }
    public function create(createStudentDto $createStudentDto)
    {
        try {
            return $this->model::create($createStudentDto->toArray());
        } catch (\Throwable $th) {
            return null;
        }
    }
    public function index()
    {
        try {
            return $this->model::all();
        } catch (\Throwable $th) {
            return null;
        }

    }
    public function update(updateStudentsDto $updateStudentsDto, string $id): ?student
    {
        try {
            $student = $this->model::find($id);
            
            if(!empty($updateStudentsDto->name)){
                    $student->name = $updateStudentsDto->name;
                }
                if(!empty($updateStudentsDto->email)){
                    $student->email = $updateStudentsDto->email;
                }
                if(!empty($updateStudentsDto->birth_date)){
                    $student->birth_date = $updateStudentsDto->birth_date;
                }
                $studentUpdated = $student->save();
                return $student;
                
            } catch (\Throwable $th) {
            return null;
        }
    }
    public function show(string $id): ?student
    {
        try {
            $course = $this->model::find($id);
            return $course;
        } catch (\Throwable $th) {
            null;
        }
    }

    public function destroy(string $id)
    {
        try {
            $student = $this->model::find($id);
            return $student->delete($id) ?$student: null;
        } catch (\Throwable $th) {
            return null;
        }
        
    }
}