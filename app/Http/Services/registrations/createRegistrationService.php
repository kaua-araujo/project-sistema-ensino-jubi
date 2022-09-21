<?php

namespace App\Http\Services\registrations;

use App\Http\Dtos\Registration\createRegistrationDto;
use App\Repositories\Interfaces\Registration\RegistrationRepositoryInterface;
use Exception;

class createRegistrationService
{
    private RegistrationRepositoryInterface $repository;

    public function __construct(RegistrationRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function execute(createRegistrationDto $createRegistrationDto){
        
        $registration = $this->repository->create($createRegistrationDto);
        if (!$registration){
            throw new Exception("Não foi possível criar o curso");
        }
        return $registration;
    }

}