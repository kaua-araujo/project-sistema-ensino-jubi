<?php

namespace App\Repositories\Interfaces\Course;

use App\Http\Dtos\Course\createCourseDto;
use App\Http\Dtos\Course\updateCourseDto;
use App\Models\course;
use Illuminate\Database\Eloquent\Collection;

interface CourseRepositoryInterface
{
    public function index(): ?Collection;
    public function create(createCourseDto $createCourseDto);
    public function destroy(string $id);
    public function update(updateCourseDto $updateCourseDto, string $id): ?course;
    public function show(string $id): ?course;
}
