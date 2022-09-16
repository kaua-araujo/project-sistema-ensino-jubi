<?php

namespace App\Repositories\Interfaces\Registration;

interface RegistrationRepositoryInterface
{
    public function create();
    public function index();
    public function destroy();
    public function update();
    public function show();
}