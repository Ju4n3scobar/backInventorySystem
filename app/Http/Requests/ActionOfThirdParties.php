<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActionOfThirdParties extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'parts_id'=>'required',
            'third_party_supplier_id' =>'required',
            'third_party_employee_id' => 'required',
            'third_party_technician_id' => 'required',
            'motive_assignament_id' => 'required',
        ];
    }
}
