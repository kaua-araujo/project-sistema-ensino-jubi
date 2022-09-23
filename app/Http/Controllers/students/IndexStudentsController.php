<?php

namespace App\Http\Controllers\students;

use App\Http\Controllers\Controller;
use App\Http\Services\student\indexStudentService;
use App\Http\Services\student\showStudentService;
use Illuminate\Http\Request;

class IndexStudentsController extends Controller
{
    public function index(indexStudentService $service)
    {
        try {
                $student = $service->execute();
                return view('students/indexStudents',[
                    'students' => $student
                ]);
        } catch (\Exception $e) {
            return null;
        }
    }
    public function show(showStudentService $service, Request $request)
    {
        try {
            $student = $service->show($request->id);
            return view('students/showStudent', [
                'student' => $student[0],
            ]);
        } catch (\Exception $e) {
            return null;
        }
    }
}