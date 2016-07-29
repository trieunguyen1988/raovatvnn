<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Crypt;

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
        $province_id = $this->segment(4);
        $rules = [
            'country_id' => 'required',
            'province_name' => 'required|max:255|unique:province,province_name'
        ];

        if (!empty($province_id)){
            $province_id = Crypt::decrypt($province_id);
            $rules['province_name'] = $rules['province_name'] . ','.$province_id.',province_id';
        }

        return $rules;
    }
}
