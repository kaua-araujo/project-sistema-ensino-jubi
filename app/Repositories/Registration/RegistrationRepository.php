<?php

namespace App\Repositories\Registration;

use App\Models\registration;
use App\Repositories\Interfaces\Registration\RegistrationRepositoryInterface;

class RegistrationRepository implements RegistrationRepositoryInterface
{
    private registration $model;

    public function __construct()
    {
        $this->model = new registration();
    }
    public function create()
    {

    }
    public function index()
    {
        try {
            return $this->model::all();
        } catch (\Throwable $th) {
            return 'erro';
        }
    }
    public function destroy(string $id)
    {
        try {

            $registration = $this->model::find($id);
            return $registration->delete($id) ?$registration: null;

        } catch (\Throwable $th) {
            return null;
        }
    }
    public function update(string $id)
    {

    }
    public function show(string $id)
    {
        try {
            return $this->model::find($id);
        } catch (\Throwable $th) {
            return null;
        }
    }
}