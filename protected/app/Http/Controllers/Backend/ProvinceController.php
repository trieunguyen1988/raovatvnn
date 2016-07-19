<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Backend\ProvinceRequest;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Province;
use Validator;

class ProvinceController extends Controller
{
    public function getAdd(){
    	$data['title'] = trans('province.lbl_add');
    	$mCountry = new Country();
        $countries = $mCountry->getAll();
        $data['countries'] = $countries;
        return view('backend.province.add', $data);
    }

    public function postAdd(ProvinceRequest $request){
    	$data['title'] = trans('province.lbl_add');

    	$mProvince                  = new Province();
    	$mProvince->country_id      = $request->country_id;
    	$mProvince->province_name   = $request->province_name;
    	$mProvince->published       = 1;
    	if ($mProvince->save()){
    		return redirect()->route('admin.province.getAdd')->with(['flash_message' => 'Thêm tỉnh/thành thành công']);
    	}

    	//load model
    	$mCountry = new Country();
    	$countries = $mCountry->getAll();
	    $data['countries'] = $countries;
    	return view('backend.province.add', $data);
    }
}
