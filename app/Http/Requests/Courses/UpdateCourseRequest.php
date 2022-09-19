<?php

namespace App\Http\Requests\Courses;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateCourseRequest extends FormRequest
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
            'title' => 'nullable',
            'description' => 'nullable|min:5|max:500',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['error'=>$validator->errors()->first()],400));
    }

    public function messages() 
    {
        return [
            'description.min' => 'A descrição deve ter no minimo 5 caracteres!',
            'description.max' => 'A descrição deve ter no máximo 500 caracteres!',
        ];
    }
}