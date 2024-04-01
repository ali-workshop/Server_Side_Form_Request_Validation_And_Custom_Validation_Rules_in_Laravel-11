<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //  i plan to handle authorization logic for the request in another part of my application,
        // so i could remove the authorize method completely, or simply return true like below :) ali :)
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'productname' => 'required|string|max:255',
            'price' => 'required|integer',
            'qty' => 'required|integer'
        ];
    }


public function messages(): array{


    return [
            'productname.required'=> 'pls fill the name of the product man it is required ولو ',
              'price.required' => 'pls fill the price it is required man'  

    ];
}

}
