<?php

namespace App\Repositeries\Student;

use App\Models\student;
use App\Repositeries\Interfaces\Student\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface
{
    private student $model;

    public function __construct()
    {
        $this->model = new student();
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