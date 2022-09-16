<?php

namespace App\Http\Controllers;

use App\Http\Services\course\indexCourseService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
        try {
            return view('/index');
        } catch (\Throwable $e) {
            return response()->json(["error" => $e->getMessage()],400);
        }
    }
}
