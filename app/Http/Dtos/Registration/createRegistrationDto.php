<?php

namespace App\Http\Dtos\Registration;

use App\Http\Dtos\Traints\FieldDefaultDtoTraint;
use Spatie\DataTransferObject\DataTransferObject;

class createRegistrationDto extends DataTransferObject
{
    use FieldDefaultDtoTraint;

    public string $student_id;
    public string $course_id;


    public function __construct(array $data)
    {
        $this->student_id = !empty($data['student_id']) ? $data['student_id'] :  '';
        $this->course_id = !empty($data['course_id']) ? $data['course_id'] :  '';
    }
}