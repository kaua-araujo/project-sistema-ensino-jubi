<?php

namespace App\Http\Controllers\registrations;

use App\Http\Controllers\Controller;
use App\Http\Dtos\Registration\createRegistrationDto;
use App\Http\Requests\Registrations\createRegistrationRequest;
use App\Http\Services\course\indexCourseService;
use App\Http\Services\registrations\createRegistrationService;
use App\Http\Services\student\indexStudentService;
use Illuminate\Support\Facades\Redirect;

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
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()],400);
        }

    }
    
    public function create(createRegistrationRequest $request, createRegistrationService $createRegistrationService)
    {

        try {
            $dataRegistration = new createRegistrationDto($request->all());
            $createRegistrationService->execute($dataRegistration);
            return Redirect::route('registrations.index');
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()],400);
        }
        
    }
}