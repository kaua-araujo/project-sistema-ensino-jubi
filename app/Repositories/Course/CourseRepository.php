<?php

namespace App\Repositeries\Course;

use App\Models\course;
use App\Repositeries\Interfaces\Courses\CourseRepositoryInterface;

class CourseRepository implements CourseRepositoryInterface
{
    private course $model;

    public function __construct()
    {
        $this->model = new course();
    }
    public function create()
    {

    }
    public function index()
    {

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