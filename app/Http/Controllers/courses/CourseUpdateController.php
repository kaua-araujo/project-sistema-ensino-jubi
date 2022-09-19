<?php

namespace App\Http\Controllers\courses;

use App\Http\Controllers\Controller;
use App\Http\Dtos\Course\updateCourseDto;
use App\Http\Requests\Courses\UpdateCourseRequest;
use App\Http\Services\course\showCourseService;
use App\Http\Services\course\updateCourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CourseUpdateController extends Controller
{
    public function updateForm(Request $request, showCourseService $service)
    {
        try {
            $course = $service->show($request->id);
            return view('courses/updateCourse', [
                'course' => $course,
            ]);
        } catch (\Exception $e) {
            return null;
        } 
    }

    public function update(UpdateCourseRequest $request, updateCourseService $service, string $id)
    {
        try {
            $dataCourse = new updateCourseDto($request->all());
    
            $service->execute($dataCourse, $id);
            return Redirect::route('courses.index');
        } catch (\Throwable $th) {
            return null;
        }
    }
}