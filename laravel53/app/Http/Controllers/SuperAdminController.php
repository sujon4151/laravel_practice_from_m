<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Session;
//session_start();
class SuperAdminController extends Controller
{
    public function index(){
    	return view('admin.date');
    }


    public function logout(){
    	//session_destroy();
    	Session::forget('admin_name');
        Session::forget('admin_email');
        Session::forget('admin_password');
        return Redirect::to('/login');
    }
}
