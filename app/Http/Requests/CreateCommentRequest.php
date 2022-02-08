<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'product_id'    => [
                'required',
                'integer',
            ],
            'user_id'               => [
                'integer',
                'required',
            ],
            'comment'               => [
                'string',
                'required',
            ],
            'photo'               => [
                'string',
                'required',
            ],
           
        ];
    }
}
