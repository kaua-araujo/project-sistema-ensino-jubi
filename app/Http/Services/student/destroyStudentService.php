<?php

namespace App\Http\Services\student;

use App\Models\student;
use App\Repositories\Interfaces\Student\StudentRepositoryInterface;
use Exception;

class destroyStudentService
{
    private StudentRepositoryInterface $repository;

    public function __construct(StudentRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function execute(string $id): ?student
    {

        $student = $this->repository->destroy($id);
        if (!$student){
            throw new Exception("Não foi possível excluir o regulamento!");
        }
        return $student;
    }
}