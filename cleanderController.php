<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cleanderController extends Controller
{
    public function index(){
      return view('admin.cleander');
    }
}
