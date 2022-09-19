<?php

namespace App\Repositories\Course;

use App\Http\Dtos\Course\createCourseDto;
use App\Http\Dtos\Course\updateCourseDto;
use App\Models\course;
use App\Repositories\Interfaces\Course\CourseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CourseRepository implements CourseRepositoryInterface
{
    private course $model;

    public function __construct()
    {
        $this->model = new course();
    }
    public function create(createCourseDto $createCourseDto)
    {

        try {
            return $this->model::create($createCourseDto->toArray());
        } catch (\Throwable $th) {
            return null;
        }

    }
    public function index(): ?Collection
    {

        try {
            return $this->model::all();
        } catch (\Throwable $th) {
            return null;
        }

    }
    public function destroy(string $id): ?course
    {
        try {
            $course = $this->model->find($id);
            if (!$course) {
                return null;
            }
            return $course->delete($id) ?$course: null;
        } catch (\Throwable $th) {
            return null;
        }
    }
    public function update(updateCourseDto $updateCourseDto, string $id): ?course
    {
        try {
            $course = $this->model::find($id);
            
            if(!empty($updateCourseDto->title)){
                $course->title = $updateCourseDto->title;
            }
            if(!empty($updateCourseDto->description)){
                $course->description = $updateCourseDto->description;
            }
            $courseUpdated = $course->save();
            return $course;
            
        } catch (\Throwable $th) {
            return null;
        }
    }
    public function show(string $id): ?course
    {
        try {
            $course = $this->model::find($id);
            return $course;
        } catch (\Throwable $th) {
            null;
        }
    }
}