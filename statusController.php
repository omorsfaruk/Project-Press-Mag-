<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Image;
use Illuminate\Support\Str;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;


class statusController extends Controller
{
    public function index(){
      return view('admin.status');
    }
    public function save_status(Request $request){
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
                      return Redirect::to('/status');
                                    }
                         }


                         dd($image_name);

    }
    public function all_status(){
        $db_status=DB::table('tbl_status')->get();
              $mng_status=view('admin.all_status')
                    ->with('db_status',$db_status);
        return view('deshbord_layout')
                    ->with('admin.all_status',$mng_status);
        }

    public function unactive($status_id){
          DB::table('tbl_status')
                ->where('status_id',$status_id)
                ->update(['publication_status' => 0]);
          return Redirect::to('all-status');
    }
    public function active($status_id){
      DB::table('tbl_status')
            ->where('status_id',$status_id)
            ->update(['publication_status' => 1]);
      return Redirect::to('all-status');
    }
    public function edit_status($status_id){
      $status_info=DB::table('tbl_status')
                  ->where('status_id',$status_id)
                  ->first();
      $mng_status_info=view('admin.edit_status')
                  ->with('status_info',$status_info);
      return view('deshbord_layout')
                  ->with('admin.edit_status',$mng_status_info);
    }
    public function update_status(Request $request, $status_id){
      $status_data=array();
      $status_data['status_title']=$request->update_status_title;
      $status_data['status_short_discription']=$request->update_status_short_discription;
      $status_data['status_long_discription']=$request->update_status_long_discription;
                    DB::table('tbl_status')
                          ->where('status_id',$status_id)
                          ->update($status_data);
                  return Redirect::to('all-status');
    }
    public function delete_status($status_id){
      DB::table('tbl_status')
          ->where('status_id',$status_id)
          ->delete();
            return Redirect::to('all-status');
    }





}
