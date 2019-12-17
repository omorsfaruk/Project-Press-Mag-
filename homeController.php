<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Image;
use Illuminate\Support\Str;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class homeController extends Controller
{

      public function index(){
        $all_status_info=DB::table('tbl_status')
                      ->where('publication_status',1)
                      ->get();

        $mng_status=view('user.home')
                      ->with('all_status_info',$all_status_info);
        return view('layout')
                      ->with('user.home',$mng_status);
      }
      public function show_video($status_id){
                  $show_video_info=DB::table('tbl_status')
                      ->where('status_id',$status_id)
                      ->first();
                  $mng_video_show=view('user.video_show')
                      ->with('show_video_info',$show_video_info);
                  return view('layout')
                      ->with('user.video_show',$mng_video_show);


      }
      public function about_us(){
        return view('user.about_us');
      }
      public function contact(){
        return view('user.contact');
      }
      public function post(){
      $values= Session::get('user_id');
        if($values)
        return Redirect::to('/post-upload');
        else
          return Redirect::to('/user-login');

      }

      public function post_upload(){
        return view('user.post_page');
      }

      public function user_save_upload(Request $request){
        $data=array();
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
                        DB::table('tbl_status')->insert($data);
                        return Redirect::to('/');
                                      }
                           }
      }

}
