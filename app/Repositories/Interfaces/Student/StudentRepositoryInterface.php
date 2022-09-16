<?php

namespace App\Repositories\Interfaces\Student;

interface StudentRepositoryInterface
{
    public function create();
    public function index();
    public function destroy();
    public function update();
    public function show();
}