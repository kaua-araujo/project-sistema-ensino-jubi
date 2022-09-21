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
            'name' => 'required',
            'email' => 'required|min:5|max:500',
            'birth_date'=> 'required'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['error'=>$validator->errors()->first()],400));
    }

    public function messages() 
    {
        return [
            'name.required' => 'É necessário preencher o nome do curso!',
            'email.required' => 'É necessário preencher o campo de email!',
            'birth_date'=> 'É necessário preencher a data de nascimento!'
        ];
    }
}