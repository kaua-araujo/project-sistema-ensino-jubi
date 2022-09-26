<?php

namespace App\Http\Controllers\students;

use App\Http\Controllers\Controller;
use App\Http\Dtos\Students\updateStudentsDto;
use App\Http\Requests\Students\UpdateStudentRequest;
use App\Http\Services\student\showStudentService;
use App\Http\Services\student\updateStudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UpdateStudentController extends Controller
{
    public function updateForm(Request $request, showStudentService $service)
    {
        try {
            $student = $service->show($request->id);
            return view('students/updateStudent', [
                'student' => $student,
            ]);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()],400);
        } 
    }

    public function update(UpdateStudentRequest $request, updateStudentService $service, string $id)
    {

        try {
            $dataStudent = new updateStudentsDto($request->all());
            $service->execute($dataStudent, $id);
            return Redirect::route('students.index');
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()],400);
        }

    }
}