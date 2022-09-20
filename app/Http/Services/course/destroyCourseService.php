<?php

namespace App\Http\Services\course;

use App\Models\course;
use App\Repositories\Interfaces\Course\CourseRepositoryInterface;
use Exception;

class destroyCourseService
{
    private CourseRepositoryInterface $repository;

    public function __construct(CourseRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function execute(string $id): ?course
    {

        $course = $this->repository->destroy($id);
        if (!$course){
            throw new Exception("Não foi possível excluir o curso!");
        }
        return $course;
    }
}