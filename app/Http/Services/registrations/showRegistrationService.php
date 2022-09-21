<?php

namespace App\Http\Services\registrations;

use App\Repositories\Interfaces\Registration\RegistrationRepositoryInterface;
use ErrorException;

class showRegistrationService
{
    private RegistrationRepositoryInterface $repository;

    public function __construct(RegistrationRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function execute(string $id)
    {
        $registration = $this->repository->show($id);
        
        if (!$registration){
            throw new ErrorException("Nenhuma matrícula encontrada");
        }

        return $registration;
    }
}