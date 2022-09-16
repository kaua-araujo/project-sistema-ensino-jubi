<?php

namespace App\Http\Requests\Courses;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateCourseRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required|min:5|max:200',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['error'=>$validator->errors()->first()],400));
    }

    public function messages() 
    {
        return [
            'title.required' => 'É necessário preencher o nome do curso!',
            'description.required' => 'É necessário preencher o campo de descrição!',
            'description.min' => 'A descrição deve ter no minimo 5 caracteres!',
            'description.max' => 'A descrição deve ter no máximo 200 caracteres!',
        ];
    }
}