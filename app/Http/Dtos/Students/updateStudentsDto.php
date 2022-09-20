<?php 

namespace App\Http\Dtos\Students;

use App\Http\Dtos\Traints\FieldDefaultDtoTraint;
use Spatie\DataTransferObject\DataTransferObject;

class updateStudentsDto extends DataTransferObject
{
    use FieldDefaultDtoTraint;

    public string $name;
    public string $email;
    public string $birth_date;


    public function __construct(array $data)
    {
        $this->name = !empty($data['name']) ? $data['name'] :  '';
        $this->email = !empty($data['email']) ? $data['email'] :  '';
        $this->birth_date = !empty($data['birth_date']) ? $data['birth_date'] :  '';
    }
}