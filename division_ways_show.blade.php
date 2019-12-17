
@extends('layout')
@section('content')


<div class="row pt-4">
  @foreach($all_division_info as $v_division_show)
  <div class="col-md-3 ml-5">
    <div class="content-2 ml-5">
    <a href="{{URL::to('/show-video/'.$v_division_show->status_id)}}">
      <video height="200px" width="200px; " controls>
      <source src="{{asset($v_division_show->status)}}" type="video/mp4">
      </video>
    </a>

   <p><b>{{$v_division_show->status_title}}</b></p>


   </div>
  </div>
@endforeach
</div>

<!-- end recent uploads-->
<br>
<br>
<br>
<br>
<br>
<!-- footer-->



@endsection
