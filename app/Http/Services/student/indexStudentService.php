<?php

namespace App\Http\Services\student;

use App\Repositories\Interfaces\Student\StudentRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class indexStudentService
{
    private StudentRepositoryInterface $repository;
    
    public function __construct(StudentRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }
    
    public function execute(): ?Collection
    {
        $student = $this->repository->index();
        return $student;
    }
}