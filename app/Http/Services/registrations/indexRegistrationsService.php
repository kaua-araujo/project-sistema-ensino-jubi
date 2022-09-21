<?php

namespace App\Http\Services\registrations;

use App\Repositories\Interfaces\Registration\RegistrationRepositoryInterface;

class indexRegistrationsService
{
    private RegistrationRepositoryInterface $repository;

    public function __construct(RegistrationRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function execute()
    {
        $registrations = $this->repository->index();
        return $registrations;
    }
}