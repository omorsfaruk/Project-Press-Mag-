<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();
class adminController extends Controller
{
    public function index(){
      return view('admin.login');
    }

    public function admin_login(Request $request){
      $admin_email=$request->admin_email;
      $admin_password=$request->admin_password;
      $data=DB::table('tbl_admin')
              ->where('admin_email',$admin_email)
              ->where('admin_password',$admin_password)
              ->first();
      if ($data) {
          Session::put('admin_name',$data->admin_name);
          Session::put('admin_id',$data->admin_id);
          return Redirect::to('/deshbord');
      }
      else {
          Session::put('massage','Your Email or Passowrd Incorrect');
          return Redirect::to('/admin');
      }

    }

    public function all_status(){
        return view('admin.all_status');
    }
}
