<?php

namespace App\Http\Services\course;

use App\Repositories\Interfaces\Course\CourseRepositoryInterface;
use ErrorException;

class showCourseService
{
    
    private CourseRepositoryInterface $repository;
    
    public function __construct(CourseRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function show(string $id)
    {
        $course = $this->repository->show($id);

        if (!$course){
            throw new ErrorException("Nenhum curso encontrado");
           }
           return $course;
    }
}