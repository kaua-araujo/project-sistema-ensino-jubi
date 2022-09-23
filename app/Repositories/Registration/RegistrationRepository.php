<?php

namespace App\Repositories\Registration;

use App\Http\Dtos\Registration\createRegistrationDto;
use App\Http\Dtos\Registration\updateRegistrationDto;
use App\Models\registration;
use App\Repositories\Interfaces\Registration\RegistrationRepositoryInterface;

class RegistrationRepository implements RegistrationRepositoryInterface
{
    private registration $model;

    public function __construct()
    {
        $this->model = new registration();
    }
    public function create(createRegistrationDto $createRegistrationDto)
    {
        try {
            return $this->model::create($createRegistrationDto->toArray());
        } catch (\Throwable $th) {
            return null;
        }
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
    public function update(updateRegistrationDto $updateRegistrationDto,string $id)
    {
        try {
            $registration = $this->model::find($id);
            
            if(!empty($updateRegistrationDto->course_id)){
                    $registration->course_id = $updateRegistrationDto->course_id;
                }
                $registrationUpdated = $registration->save();
                return $registration;
                
            } catch (\Throwable $th) {
            return null;
        }
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