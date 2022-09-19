<?php

namespace App\Http\Services\course;

use App\Http\Dtos\Course\updateCourseDto;
use App\Models\course;
use App\Repositories\Interfaces\Course\CourseRepositoryInterface;
use Exception;

class updateCourseService
{
    private CourseRepositoryInterface $repository;

    public function __construct(CourseRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function execute(updateCourseDto $updateCourseDto, string $id): ?course
    {
        $course = $this->repository->update($updateCourseDto, $id);

        if (!$course){
            throw new Exception("Não foi possível atualizar o regulamento selecionado");
        }
        return $course;
    } 

}