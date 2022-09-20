<?php

namespace App\Http\Services\student;

use App\Repositories\Interfaces\Student\StudentRepositoryInterface;
use ErrorException;

class showStudentService
{
    
    private StudentRepositoryInterface $repository;
    
    public function __construct(StudentRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function show(string $id)
    {
        $student = $this->repository->show($id);

        if (!$student){
            throw new ErrorException("Nenhum estudante encontrado");
           }
           return $student;
    }
}