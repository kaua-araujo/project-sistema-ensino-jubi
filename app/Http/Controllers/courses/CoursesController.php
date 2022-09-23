<?php

namespace App\Http\Controllers\courses;

use App\Http\Controllers\Controller;
use App\Http\Services\course\indexCourseService;
use App\Http\Services\course\showCourseService;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function form(indexCourseService $service)
    {
        try {
                $courses = $service->execute();
                return view('courses/indexCourses',[
                    'courses' => $courses
                ]);
        } catch (\Exception $e) {
            return null;
        }
    }
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
