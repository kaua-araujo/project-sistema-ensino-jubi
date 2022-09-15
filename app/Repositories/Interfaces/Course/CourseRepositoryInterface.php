<?php

namespace App\Repositeries\Interfaces\Course;

interface CourseRepositoryInterface
{
    public function create();
    public function index();
    public function destroy();
    public function update();
    public function show();
}
