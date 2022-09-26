<?php

namespace App\Http\Controllers\students;

use App\Http\Controllers\Controller;
use App\Http\Services\student\showStudentService;
use Illuminate\Http\Request;

class ShowStudentController extends Controller
{

public function show(showStudentService $service, Request $request)
    {

        try {
            $student = $service->show($request->id);
            return view('students/showStudent', [
                'student' => $student[0],
            ]);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()],400);
        }

    }

}