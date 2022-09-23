<?php

namespace App\Http\Controllers\courses;

use App\Http\Controllers\Controller;
use App\Http\Dtos\Course\createCourseDto;
use App\Http\Requests\Courses\CreateCourseRequest;
use App\Http\Services\Course\createCourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CreateCourseController extends Controller
{
    public function formCreate()
    {
        return view('courses\createCourse');
    }
    public function create(CreateCourseRequest $request, createCourseService $createCourseService){
        try {
            $dataCourse = new createCourseDto($request->all());
            $createCourseService->execute($dataCourse);
            return Redirect::route('courses.index');
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()],400);
        }
    }
}
