<?php

namespace App\Repositories\Interfaces\Course;

use App\Http\Dtos\Course\createCourseDto;

interface CourseRepositoryInterface
{
    public function index();
    public function create(createCourseDto $createCourseDto);
    public function destroy();
    public function update();
    public function show();
}
