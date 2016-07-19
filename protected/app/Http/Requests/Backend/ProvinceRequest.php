<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;

class ProvinceRequest extends Request
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
        $name_rules = 'required|alpha_num|max:255';

        return [
            'country_id' => 'required',
            'province_name' => 'required|max:255|unique:province,province_id'
        ];
    }
}
