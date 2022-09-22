<?php

namespace App\Http\Requests\Registrations;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class createRegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'student_id' => 'required',
            'course_id' => 'required',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['error'=>$validator->errors()->first()],400));
    }

    public function messages() 
    {
        return [
            'student_id.required' => 'É necessário preencher o nome do aluno!',
            'course_id.required' => 'É necessário preencher o curso!',
        ];
    }
}