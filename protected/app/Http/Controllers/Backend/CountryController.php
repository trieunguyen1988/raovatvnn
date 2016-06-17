<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CountryRequest;
use App\Models\Country;

class CountryController extends Controller
{
    public function getAdd(){
    	return view('backend.country.add');
    }

    public function postAdd(CountryRequest $request){
    	print_r($request->country_name);
    	$country = new Country();
    	$country->country_name    = $request->country_name;
    	$country->published       = 1;
    	$country->save();
    	return redirect()->route('admin.country.getAdd')->with(['flash_message' => 'Thêm quốc gia thành công']);
    }
}
