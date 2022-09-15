<?php

namespace App\Repositeries\Course;

use App\Models\course;
use App\Models\registration;
use App\Repositeries\Interfaces\Registration\RegistrationRepositoryInterface;

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

    }
    public function destroy()
    {

    }
    public function update()
    {

    }
    public function show()
    {

    }
}