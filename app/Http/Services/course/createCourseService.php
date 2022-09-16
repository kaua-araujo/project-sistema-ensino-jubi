<?php

namespace App\Http\Services\Course;

use App\Http\Dtos\Course\createCourseDto;
use App\Models\course;
use App\Repositories\Interfaces\Course\CourseRepositoryInterface;
use Exception;

class createCourseService
{

    private CourseRepositoryInterface $repository;

    public function __construct(CourseRepositoryInterface $repository)
    {
        
        return $this->repository = $repository;

    }

    public function execute(createCourseDto $createCourseDto): ?course
    {

        $Course = $this->repository->create($createCourseDto);
        
        if (!$Course)
            throw new Exception("Não foi possível criar o plano");

        return $Course;
        
    }

}
