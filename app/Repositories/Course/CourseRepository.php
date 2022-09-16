<?php

namespace App\Repositories\Course;

use App\Http\Dtos\Course\createCourseDto;
use App\Models\course;
use App\Repositories\Interfaces\Course\CourseRepositoryInterface;

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
    public function index()
    {
        try {
            return $this->model::all();
        } catch (\Throwable $th) {
            return null;
        }
    }
    public function destroy()
    {

    }
    public function update()
    {

    }
    public function show()
    {

    }
}