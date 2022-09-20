<?php

namespace App\Http\Services\student;

use App\Http\Dtos\Students\createStudentDto;
use App\Repositories\Interfaces\Student\StudentRepositoryInterface;
use Exception;

class createStudentService
{
    private StudentRepositoryInterface $repository;
    
    public function __construct(StudentRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function execute(createStudentDto $createStudentDto)
    {
        $student = $this->repository->create($createStudentDto);
        if (!$student){
            throw new Exception("Não foi possível cadastrar o estudante");
        }
        return $student;
    }
}