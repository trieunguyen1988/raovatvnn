<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;

class CountryRequest extends Request
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
            'country_name' => 'required|unique:country,country_name'
        ];
    }

    public function messages(){
        return [
            'country_name.required' => 'Vui lòng nhập tên quốc gia',
            'country_name.unique'   => 'Tên quốc gia đã tồn tại'
        ];
    }
}
