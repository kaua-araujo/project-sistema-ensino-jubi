<?php

namespace App\Http\Controllers\courses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateCourseController extends Controller
{
    public function formCreate(indexCourseService $service)
    {
            $indexService = $service->execute();
            return view('premialoSellers/premialoSellersRegistration/createSellers',[
            ]);
    }
    public function create(){

    }
}
