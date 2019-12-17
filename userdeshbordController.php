<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
use Illuminate\Support\Str;
use App\Http\Requests;

class userdeshbordController extends Controller
{
    public function user_deshbord($user_id){
              DB::table('tbl_regstrasion')
                    ->where('user_id',$user_id)
                    ->first();
        return view('user.user_deshbord');
    }

    public function user_status(){
      return view('user.user_status');
    }

    public function save_user_status(Request $request , $user_id){

      $data=array();
      $data['user_id']=$user_id;
      $data['status_title']=$request->status_title;
      $data['status_city']=$request->status_city;
      $data['status_short_discription']=$request->status_short_discription;
      $data['status_long_discription']=$request->status_long_discription;
      $data['publication_status']=$request->publication_status;

      $path=$request->file('status')->store('/image');

        $image=$request->file('status');
                if ($image){

                  $image_name=Str::random(20);
                  $ext=strtolower($image->getClientOriginalExtension());
                  $image_full_name=$image_name.'.'.$ext;
                  $upload_path='image/';
                  $image_url=$upload_path.$image_full_name;
                  $success=$image->move($upload_path,$image_full_name);
                      if ($success) {
                      $data['status']=$image_url;
                      DB::table('tbl_user_post')->insert($data);
                      return Redirect::to('/user-status');
                                    }
                         }
    }


    public function user_all_status(){

      $session_values=Session::get('user_id');
          $user_all_post=DB::table('tbl_user_post')
                    ->where('user_id',$session_values)
                    ->get();

        $maneg=view('user.user_all_status')
                    ->with('user_all_post',$user_all_post);
        return view('user_deshbord_layout')
                    ->with('user.user_all_status',$maneg);


    }
    public function delete_user_status($user_post_id){
        DB::table('tbl_user_post')
              ->where('user_post_id',$user_post_id)
              ->delete();
        return Redirect::to('/user-all-status');
    }

}
