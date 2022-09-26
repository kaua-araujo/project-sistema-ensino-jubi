<?php

namespace App\Http\Controllers\students;

use App\Http\Controllers\Controller;
use App\Http\Dtos\Students\createStudentDto;
use App\Http\Requests\Students\CreateStudentRequest;
use App\Http\Services\student\createStudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class createStudentController extends Controller
{
    
    public function formCreate()
    {
        return view('students\createStudent');
    }
    
    public function create(CreateStudentRequest $request, createStudentService $createStudentService){

        try {
            $dataStudent = new createStudentDto($request->all());
            $createStudentService->execute($dataStudent);
            return Redirect::route('students.index');
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()],400);
        }
        
    }
    
}
