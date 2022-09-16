<?php

namespace App\Http\Dtos\Course;

use App\Http\Dtos\Traints\FieldDefaultDtoTraint;
use Spatie\DataTransferObject\DataTransferObject;

class createCourseDto extends DataTransferObject
{
    use FieldDefaultDtoTraint;

    public string $title;
    public string $description;


    public function __construct(array $data)
    {
        $this->title = !empty($data['title']) ? $data['title'] :  '';
        $this->description = !empty($data['description']) ? $data['description'] :  '';
    }
}