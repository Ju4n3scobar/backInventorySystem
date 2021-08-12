<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleOfTypeThirdParties extends FormRequest
{
    public function authorize()
    {
        return false;
    }
    public function rules()
    {
        return [
            'type_of_third_party_id' => 'required',
            'third_parties_id' => 'required',
        ];
    }
}
