<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use DB;
use Illuminate\Database\Connection;


Session_start();
class divisionController extends Controller
{
  public function index(){
    return view('admin.division');
  }
  public function save_division(Request $request){
    $data=array();
        $data['division_name']=$request->division_name;
        $data['division_discription']=$request->division_discription;
        $data['publication_status']=$request->publication_status;
              DB::table('tbl_division')->insert($data);
              return Redirect::to('/add-division');
  }
  public function all_division(){
    $all_division=DB::table('tbl_division')->get();
          $mng=view('admin.all_division')
          ->with('all_division',$all_division);
    return view('deshbord_layout')
          ->with('admin.division',$mng);
  }

  public function unactive_division($division_id){
          DB::table('tbl_division')
          ->where('division_id',$division_id)
          ->update(['publication_status' => 0]);
          return Redirect::to('/all-division');
  }
  public function active_division($division_id){
          DB::table('tbl_division')
          ->where('division_id',$division_id)
          ->update(['publication_status' => 1]);
          return Redirect::to('/all-division');
  }

  public function edit_division($division_id){
          $division_mng_info=DB::table('tbl_division')
                            ->where('division_id',$division_id)
                            ->first();
          $division_values=view('admin.edit_division')
                            ->with('division_mng_info',$division_mng_info);
          return view('deshbord_layout')
                            ->with('admin.edit_division',$division_values);
  }
  public function update_division(Request $request, $division_id){
    $division_data_update=array();
                $division_data_update['division_name']=$request->division_name;
                $division_data_update['division_discription']=$request->division_discription;
                          DB::table('tbl_division')
                                ->where('division_id',$division_id)
                                ->update($division_data_update);
                return Redirect::to('/all-division');
  }

  public function delete_division($division_id){
            DB::table('tbl_division')
                    ->where('division_id',$division_id)
                    ->delete();
            return Redirect::to('/all-division');
  }


  public function division_ways_show($division_id){
              $all_division_info=DB::table('tbl_status')
                        ->join('tbl_division','tbl_status.status_city','=','tbl_division.division_id')
                        ->select('tbl_status.*','tbl_division.division_name')
                        ->where('tbl_division.division_id',$division_id)
                        ->limit(6)
                        ->get();



              $mng_show=view('user.division_ways_show')
                        ->with('all_division_info',$all_division_info);
              return view('layout')
                        ->with('user.division_ways_show',$mng_show);

  }




}
