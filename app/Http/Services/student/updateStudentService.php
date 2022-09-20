<?php

namespace App\Http\Services\student;

use App\Http\Dtos\Students\updateStudentsDto;
use App\Repositories\Interfaces\Student\StudentRepositoryInterface;
use Exception;

class updateStudentService
{
    private StudentRepositoryInterface $repository;

    public function __construct(StudentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function execute(updateStudentsDto $updateStudentsDto, string $id)
    {
        $student = $this->repository->update($updateStudentsDto, $id);
        if (!$student){
            throw new Exception("Não foi possível atualizar o perfil do aluno selecionado");
        }
        return $student;
    }
}