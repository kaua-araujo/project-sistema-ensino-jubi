<?php

namespace App\Repositories\Interfaces\Registration;

use App\Http\Dtos\Registration\createRegistrationDto;
use App\Models\registration;
use Illuminate\Database\Eloquent\Collection;

interface RegistrationRepositoryInterface
{
    public function index();
    public function create(createRegistrationDto $createRegistrationDto);
    public function show(string $id);
    public function destroy(string $id);
    public function update(string $id);
}