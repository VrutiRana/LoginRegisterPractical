<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name' => 'required',
            'termscondition' => 'file|required|mimes:jpg,png',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'product_name.required'        =>  "Name is required",
            'termscondition.required'     =>  "Document is required",
            'termscondition.file'     =>  "Document should be File",
            'termscondition.mimes'     =>  "Please enter valid file",
        ];
    }
}
