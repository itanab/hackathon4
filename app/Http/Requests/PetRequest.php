<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
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
           'name' => 'required|max:250|regex:/^[a-zA-Z]+$/',
           'client_id' => 'required|numeric',
           'breed' => 'required|max:250|regex:/^[a-zA-Z]+$/',
           'weight' => 'required|numeric',
           'age' => 'nullable|numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name field is required',
            'name.max' => 'The name should not be longer than 250 chars',
            'name.regex' => 'The name should be a string',
        
            'breed.required' => 'Breed field is required',
            'breed.max' => 'The breed name should not be longer than 250 chars',
            'breed.regex' => 'The breed name should be a string',

            'weight.required' => 'Weight field is required',
            'weight.numeric' => 'The weight should be an number'

            
        ];
    }
}
