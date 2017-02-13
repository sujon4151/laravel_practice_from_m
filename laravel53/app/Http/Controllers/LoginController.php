<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use View;
use DB;
use Session;
session_start();
class LoginController extends Controller
{
    //
    public function index(){
    	 if(View::exists('admin.login')){
    		return view('admin.login');
    	} else{
    		return "No view avaiable";
    	}
    }

    public function check_login(Request $request){
        $email=$request->admin_email;
        $password=$request->admin_password;
        $admin_info=DB::table('users')
                    ->select("name","email","password")
                    ->where('email',$email)
                    ->where('password',$password)
                    ->first();
        //echo '<pre>';print_r($admin_info);die();
        if (isset($admin_info)) {
            Session::put('admin_name',$admin_info->name);
            Session::put('admin_email',$admin_info->email);
            Session::put('admin_password',$admin_info->password);
            return Redirect::to('/date');
        }else{
            return Redirect::to('/login');
        }
    }
}
