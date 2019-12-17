<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
class userpostController extends Controller
{
    public function user_status(){
      $all_user_post=DB::table('tbl_user_post')
                    ->get();
          $all_user_post_mng=view('admin.user_status')
                    ->with('all_user_post',$all_user_post);
          return view('deshbord_layout')
                    ->with('admin.user_status',$all_user_post_mng);
    }
    public function user_post_unactive($user_post_id){
                DB::table('tbl_user_post')
                       ->where('user_post_id',$user_post_id)
                       ->update(['publication_status' => 0]);
                return Redirect::to('/user-status');
    }
    public function user_post_active($user_post_id){
              DB::table('tbl_user_post')
                      ->where('user_post_id',$user_post_id)
                      ->update(['publication_status' => 1]);
                        return Redirect::to('/user-status');

    }
    public function user_post_delete($user_post_id){
              DB::table('tbl_user_post')
                      ->where('user_post_id',$user_post_id)
                      ->delete();
              return Redirect::to('/user-status');
    }






    public function user_show_video($user_post_id){
          $show_video=DB::table('tbl_user_post')
                      ->where('user_post_id',$user_post_id)
                      ->first();
          $mng=view('user.user_show_video')
                      ->with('show_video',$show_video);
          return view('layout')
                      ->with('user.user_show_video',$mng);
    }
}
