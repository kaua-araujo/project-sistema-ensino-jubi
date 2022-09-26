<?php

namespace App\Http\Controllers\courses;

use App\Http\Controllers\Controller;
use App\Http\Services\course\destroyCourseService;
use Illuminate\Support\Facades\Redirect;

class CourseDestroyController extends Controller
{

    public function destroy(destroyCourseService $service, string $id)
    {

        try {
            $courseDeleted = $service->execute($id);
            return Redirect::route('courses.index');
        } catch (\Exception $e) {
            return response()->json(['error'=>$e->getMessage()],400);

        }
        
    }
}