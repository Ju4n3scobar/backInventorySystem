<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThirdParties extends FormRequest
{
    public function authorize()
    {
        return false;
    }
    public function rules()
    {
        return [
            'state' => 'required',
            'identification_card' => 'required',
            'employee_areas_id' => 'required',
        ];
    }
}
