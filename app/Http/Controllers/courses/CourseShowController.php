<?php

namespace App\Http\Controllers\courses;

use App\Http\Controllers\Controller;
use App\Http\Services\course\showCourseService;
use Illuminate\Http\Request;

class CourseShowController extends Controller
{

public function show(showCourseService $service, Request $request)
    {
        try {
            $course = $service->show($request->id);
            return view('courses/ShowCourse', [
                'course' => $course[0],
            ]);
        } catch (\Exception $e) {
            return null;
        }
    }
}