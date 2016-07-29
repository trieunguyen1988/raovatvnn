<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Backend\ProvinceRequest;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Province;
use Illuminate\Support\Facades\Crypt;

class ProvinceController extends Controller
{

	public function __construct()
	{
		$this->mProvince = new Province();
		$this->mCountry = new Country();
	}

	/**
	 * Process datatables ajax request.
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index()
	{
		$provinces = $this->mProvince->getAll();
		$data['provinces'] = $provinces;
		return view('backend.province.index', $data);
	}

	public function getAdd(){
    	$data['title'] = trans('province.lbl_add');
        $countries = $this->mCountry->getAll();
        $data['countries'] = $countries;
        return view('backend.province.add', $data);
    }

    public function postAdd(ProvinceRequest $request){
    	$data['title'] = trans('province.lbl_add');

    	$this->mProvince->country_id      = $request->country_id;
    	$this->mProvince->province_name   = $request->province_name;
    	$this->mProvince->published       = 1;
    	if ($this->mProvince->save()){
    		return redirect()->route('admin.province.getAdd')->with(['flash_message' => 'Thêm tỉnh/thành thành công']);
    	}

    	//load model
    	$countries = $this->mCountry->getAll();
	    $data['countries'] = $countries;
    	return view('backend.province.add', $data);
    }

	public function getEdit($province_id){
		if (!$province_id){
			return redirect()->route('admin.province.index')->with(['flash_message_err' => 'Thông tin không được tìm thấy']);;
		}

		try {
			$province_id = Crypt::decrypt($province_id);
		} catch(\Illuminate\Contracts\Encryption\DecryptException $e) {
			return redirect()->route('admin.province.index');
		}

		//get province info
		$province = $this->mProvince->getById($province_id);
		if (!$province){
			return redirect()->route('admin.province.index')->with(['flash_message_err' => 'Thông tin không được tìm thấy']);;
		}

		$data['title'] = trans('province.lbl_edit');
		$data['province'] = $province;

		$countries = $this->mCountry->getAll();
		$data['countries'] = $countries;
		return view('backend.province.edit', $data);
	}

	public function postEdit($province_id, ProvinceRequest $request){
		$data['title'] = trans('province.lbl_edit');

		try {
			$province_id = Crypt::decrypt($province_id);
		} catch(\Illuminate\Contracts\Encryption\DecryptException $e) {
			return redirect()->route('admin.province.index');
		}

		$params = array(
			'country_id' => $request->country_id,
				'province_name' => $request->province_name
		);
		if ($this->mProvince->updateById($province_id, $params)){
			return redirect()->route('admin.province.index')->with(['flash_message_succ' => 'Sửa tỉnh/thành thành công']);
		}

		//load model
		$countries = $this->mCountry->getAll();
		$data['countries'] = $countries;
		return view('backend.province.edit', $data);
	}

	public function getDelete($province_id){
		try {
			$province_id = Crypt::decrypt($province_id);
		} catch(\Illuminate\Contracts\Encryption\DecryptException $e) {
			return redirect()->route('admin.province.index');
		}

		$this->mProvince->deleteProvince($province_id);
		return redirect()->route('admin.province.index')->with(['flash_message_succ' => 'Xóa thành công']);
	}
}
