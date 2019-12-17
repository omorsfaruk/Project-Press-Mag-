<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
class SuperadminController extends Controller
{

    public function index(){
      $this->authcheck();
      return view('admin.deshbord');
    }
    public function logout(){
      Session::flush();
      return Redirect::to('/admin');
    }

    public function authcheck(){
      $admin_id=Session::get('admin_id');
      if ($admin_id){
            return;
      }
      else{
        return Redirect::to('/admin')->send();
      }
    }
}
