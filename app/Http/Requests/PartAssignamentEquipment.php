<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartAssignamentEquipment extends FormRequest
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
            'part_son_id'=>'required',
            'part_father_id' =>'required',
            'assignament_date' => 'required',
            'third_party_technician_id' => 'required',
        ];
    }
}
