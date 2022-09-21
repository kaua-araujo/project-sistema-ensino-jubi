<?php

namespace App\Repositories\Interfaces\Registration;

use App\Models\registration;
use Illuminate\Database\Eloquent\Collection;

interface RegistrationRepositoryInterface
{
    public function index();
    public function create();
    public function show(string $id);
    public function destroy(string $id);
    public function update(string $id);
}