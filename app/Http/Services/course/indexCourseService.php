<?php

namespace App\Http\Services\course;

use App\Repositories\Interfaces\Course\CourseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class indexCourseService
{
    private CourseRepositoryInterface $repository;
    
    public function __construct(CourseRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }
    
    public function execute()
    {   

        try{
            $course = $this->repository->index();
            return $course;

        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()],400);
        }
        
    }
}
