<?php

namespace App\Http\Controllers\registrations;

use App\Http\Controllers\Controller;
use App\Http\Dtos\Registration\updateRegistrationDto;
use App\Http\Requests\Registrations\updateRegistrationRequest;
use App\Http\Services\course\indexCourseService;
use App\Http\Services\registrations\showRegistrationService;
use App\Http\Services\registrations\updateRegistrationService;
use App\Http\Services\student\indexStudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UpdateRegistrationController extends Controller
{
    public function updateForm(Request $request, showRegistrationService $service, indexStudentService $indexStudentService, indexCourseService $indexCourseService)
    {

        try {
            $registration = $service->execute($request->id);
            $students = $indexStudentService->execute();
            $courses = $indexCourseService->execute();

            return view('registration/updateRegistration', [
                'registration' => $registration,
                'courses' => $courses,
                'students' => $students
            ]);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()],400);
        } 

    }

    public function update(updateRegistrationRequest $request, updateRegistrationService $service, string $id)
    {
        
        $dataRegistration = new updateRegistrationDto($request->all());
        $service->execute($dataRegistration, $id);
        return Redirect::route('registrations.index');
        
    }
}