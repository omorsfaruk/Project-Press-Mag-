<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use DB;
class usercommentController extends Controller

{


      public function save_user_comment(Request $request ,$status_id){
      $data=array();

            $data['status_id']=$status_id;
            $data['comment']=$request->comment;

                  DB::table('tbl_user_comment')->insert($data);
                  return redirect()->back();
}
}
