<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Status extends FormRequest
{
    public function authorize()
    {
        return false;
    }
    public function rules()
    {
        return [
            'description' => 'required',
        ];
    }
}
