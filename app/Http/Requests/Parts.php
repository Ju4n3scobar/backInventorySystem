<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Parts extends FormRequest
{
    public function authorize()
    {
        return false;
    }
    public function rules()
    {
        return [
            'cod_active'=>'required',
            'serial' =>'required',
            'responsible_employee' => 'required',
            'comment' => 'required',
            'price' => 'required',
            'model_devices_id' => 'required',
            'third_party_supplier_id' => 'required',
            'third_party_employee_id' => 'required',
            'third_party_technician_id' => 'required',
        ];
    }
}
