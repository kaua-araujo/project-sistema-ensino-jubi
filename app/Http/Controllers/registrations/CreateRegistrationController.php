<?php

namespace App\Http\Controllers\registrations;

use App\Http\Controllers\Controller;
use App\Http\Dtos\Registration\createRegistrationDto;
use App\Http\Requests\Registrations\createRegistrationRequest;
use App\Http\Services\course\indexCourseService;
use App\Http\Services\registrations\createRegistrationService;
use App\Http\Services\student\indexStudentService;

class CreateRegistrationController extends Controller
{
    public function formCreate(indexStudentService $studentService, indexCourseService $courseSevice)
    {
        try {
            
            $students = $studentService->execute();
            $courses = $courseSevice->execute();

            return view('registration\createRegistration',[
                'students' => $students,
                'courses' => $courses
            ]);
        } catch (\Throwable $th) {
            return null;
        }
    }
    
    public function create(createRegistrationRequest $request, createRegistrationService $createRegistrationService)
    {
        try {
            $registration = new createRegistrationDto($request->all());
        } catch (\Throwable $th) {
            return null;
        }
    }
}