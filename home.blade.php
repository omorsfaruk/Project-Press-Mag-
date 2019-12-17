@extends('layout')
@section('content')


@foreach($all_status_info as $v_status)
      <div class="col-md-3 mt-5">
        <div class="" style=" width: 200px; height: 250px;                                      ">
                  <div class="content-2">
                    <a href="{{URL::to('/show-video/'.$v_status->status_id)}}">
                          <video width="250" height="250" controls>
                          <source src="{{$v_status->status}}" type="video/mp4">
                          </video>
                    </a>
                 <b>{{$v_status->status_title}}</b>


                 </div>
                 </div>
    </div>
@endforeach


<!-- user post area--------------------------------------------------------->


<?php
  $all_user_post_show=DB::table('tbl_user_post')
                          ->where('publication_status',1)
                          ->get();

 ?>

@foreach($all_user_post_show as $v_status)
      <div class="col-md-3 mt-5">
        <div class="" style=" width: 200px; height: 250px;">
                  <div class="content-2">
                    <a href="{{URL::to('/user-show-video/'.$v_status->user_post_id)}}">
                          <video width="250" height="250" controls>
                          <source src="{{$v_status->status}}" type="video/mp4">
                          </video>
                    </a>
                 <b>{{$v_status->status_title}}</b>


                 </div>
                 </div>
    </div>
@endforeach



<!-- end recent uploads-->
<br>
<br>
<br>
<br>
<br>
<!-- footer-->


@endsection
