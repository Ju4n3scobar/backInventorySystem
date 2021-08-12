<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeOfStatus extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'third_party_technician'=>'required',
            'states_id' =>'required',
            'part_id' => 'required',
        ];
    }
}
