<?php

namespace App\Http\Controllers\students;

use App\Http\Controllers\Controller;
use App\Http\Services\student\destroyStudentService;
use Illuminate\Support\Facades\Redirect;

class DestroyStudentsController extends Controller
{
    public function destroy(destroyStudentService $service, string $id)
    {

        try {
            $courseDeleted = $service->execute($id);
            return Redirect::route('students.index');
        } catch (\Exception $e) {
            return response()->json(['error'=>$e->getMessage()],400);
        }

    }
}