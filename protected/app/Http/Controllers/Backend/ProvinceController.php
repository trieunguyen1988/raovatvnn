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

	public function __construct()
	{
		$this->mProvince = new Province();
		$this->mCountry = new Country();
	}

	public function getAdd(){
    	$data['title'] = trans('province.lbl_add');
    	$this->mCountry = new Country();
        $countries = $this->mCountry->getAll();
        $data['countries'] = $countries;
        return view('backend.province.add', $data);
    }

    public function postAdd(ProvinceRequest $request){
    	$data['title'] = trans('province.lbl_add');

    	$this->mProvince                  = new Province();
    	$this->mProvince->country_id      = $request->country_id;
    	$this->mProvince->province_name   = $request->province_name;
    	$this->mProvince->published       = 1;
    	if ($this->mProvince->save()){
    		return redirect()->route('admin.province.getAdd')->with(['flash_message' => 'Thêm tỉnh/thành thành công']);
    	}

    	//load model
    	$this->mCountry = new Country();
    	$countries = $this->mCountry->getAll();
	    $data['countries'] = $countries;
    	return view('backend.province.add', $data);
    }

	/**
	 * Process datatables ajax request.
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getList()
	{
		$this->mProvince = new Province();
		$provinces = $this->mProvince->getAll();
		$data['provinces'] = $provinces;
		return view('backend.province.index', $data);
	}

	public function getDelete($province_id){
		$this->mProvince = new Province();
		$this->mProvince->find($province_id);
		$this->mProvince->delete($province_id);
		//return redirect()->route('admin.country.getList');
	}
}
