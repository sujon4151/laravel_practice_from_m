<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use View;
use DB;
use Session;
use Response;
class AjaxController extends Controller
{
    public function index(){
    	return view('admin.ajax');
    }

    public function save_info(Request $request){
    	$data=$request->all();
    	//echo json_encode($data);
    	echo "<pre>";print_r($data);
    	//echo "Hi";
    	
    }
}
