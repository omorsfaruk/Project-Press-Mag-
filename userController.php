<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();
class userController extends Controller
{
        public function index(){
          return view('layout');
        }
        public function Registration(){
          return view('user.registration');
        }

        public function save_registration(Request $request){
            $data=array();
              $data['user_first_name']=$request->user_first_name;
              $data['user_last_name']=$request->user_last_name;
              $data['user_email']=$request->user_email;
              $data['user_password']=$request->user_password;
              $data['user_confirm_password']=$request->user_confirm_password;
                    DB::table('tbl_regstrasion')->insert($data);
                    Session::put('message','Registration Successfully');
                    return Redirect::to('/user-login');

        }
        public function user_login(){
          return view('user.user_login');
        }
        public function login(Request $request){
          $user_email=$request->user_email;
          $user_password=$request->user_password;
            $user_data=DB::table('tbl_regstrasion')
                    ->where('user_email',$user_email)
                    ->where('user_password',$user_password)
                    ->first();
            if ($user_data) {
              Session::put('user_first_name',$user_data->user_first_name);
              Session::put('user_id',$user_data->user_id);
                  return Redirect::to('/');
            }
            else{
              return Redirect::to('/user-login');
            }

        }

        public function user_logout(){
          Session::flush();
          return Redirect::to('/');
        }
}
