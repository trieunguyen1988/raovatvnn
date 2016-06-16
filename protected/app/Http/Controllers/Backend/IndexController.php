<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __construct(){
    	//$this->middleware('admin');
    }

    public function index(){
    	// return Auth::guard('admin')->user();
    	return view('backend.index');
    }
}
