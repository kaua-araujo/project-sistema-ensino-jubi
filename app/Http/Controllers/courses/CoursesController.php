<?php

namespace App\Http\Controllers\courses;

use App\Http\Controllers\Controller;
use App\Http\Services\course\indexCourseService;
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
        } catch (\Throwable $e) {
            return response()->json(["error" => $e->getMessage()],400);
        }
    }
}
