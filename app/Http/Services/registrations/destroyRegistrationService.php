<?php

namespace App\Http\Services\registrations;

use App\Models\registration;
use App\Repositories\Interfaces\Registration\RegistrationRepositoryInterface;
use Exception;

class destroyRegistrationService
{
    private RegistrationRepositoryInterface $repository;

    public function __construct(RegistrationRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function execute(string $id): ?registration
    {

        $registration = $this->repository->destroy($id);
        if (!$registration){
            throw new Exception("Não foi possível excluir a matricula!");
        }
        return $registration;
    }
}