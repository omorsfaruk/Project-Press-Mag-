<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use DB;
class userlikeController extends Controller
{
    public function user_like(Request $request ,$status_id){
      $data=array();
        $data['status_id']=$status_id;
          DB::table('tbl_user_like')->insert($data);
          return redirect()->back();
    }

}
