<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CountryRequest;
use App\Models\Country;
use App\DataTables\Backend\CountryDatatable;

class CountryController extends Controller
{
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $mCountry = new Country();
        $countries = $mCountry->getAll();
        $data['countries'] = $countries;
        return view('backend.country.index', $data);
    }

    public function getAdd(){
        return view('backend.country.add');
    }

    public function postAdd(CountryRequest $request){
    	$country = new Country();
    	$country->country_name    = $request->country_name;
    	$country->published       = 1;
    	$country->save();
    	return redirect()->route('admin.country.getAdd')->with(['flash_message' => 'Thêm quốc gia thành công']);
    }

    public function getEdit($country_id){
        $mCountry = new Country();
        $country = $mCountry->getById($country_id);

        if (!$country){
            redirect(route('admin.country.index'));
        }

        $data['country'] = $country;
        return view('backend.country.edit', $data);
    }

    public function postEdit(CountryRequest $request){
        $country = new Country();
        $country->country_name    = $request->country_name;
        $country->save();
        return redirect()->route('admin.country.getAdd')->with(['flash_message' => 'Thêm quốc gia thành công']);
    }

    public function getDelete($country_id){
        $mCountry = new Country();
        $isDelete = $mCountry->deleteById($country_id);
        return redirect()->route('admin.country.getList');
    }
}
