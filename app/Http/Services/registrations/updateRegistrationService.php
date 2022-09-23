<?php

namespace App\Http\Services\registrations;

use App\Http\Dtos\Registration\updateRegistrationDto;
use App\Repositories\Interfaces\Registration\RegistrationRepositoryInterface;
use Exception;

class updateRegistrationService
{
    private RegistrationRepositoryInterface $repository;

    public function __construct(RegistrationRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function execute(updateRegistrationDto $updateRegistrationDto, string $id)
    {

        $registration = $this->repository->update($updateRegistrationDto, $id);
        if (!$registration){
            throw new Exception("Não foi possível atualizar a matricula");
        }
        return $registration;
    }
}