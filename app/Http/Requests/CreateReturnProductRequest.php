<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateReturnProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'product_quantity'    => [
                'required',
                'integer',
            ],
            'name'               => [
                'string',
                'required',
            ],
            'email'               => [
                'string',
                'required',
            ],
            'phone'               => [
                'string',
                'required',
            ],
            'order_id'               => [
                'string',
                'required',
            ],
            'product_name'               => [
                'string',
                'required',
            ],
            'product_code'               => [
                'string',
                'required',
            ],
            'reason'               => [
                'string'
            ],
            'other_details'               => [
                'string'
            ],
           
        ];
    }
}
