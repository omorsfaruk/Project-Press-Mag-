@extends('layout')
@section('content')
  <!--single video play start  -->
  <div class="container">
      <div class="row mt-5 ml-5">
        <div class="col-md-8 ">
          <div class="content  ">

              <video width="600" height="700" controls>
              <source src="{{asset($show_video->status)}}" type="video/mp4">
              </video>
         <h3>{{$show_video->status_title}}</h3>
         <p>{{$show_video->status_long_discription}}</p>
         </div>
       </div>
       <div class="col-md-4">
         <?php
           $user_show_video=DB::table('tbl_user_post')
                     ->where('publication_status',1)
                     ->get();

          ?>
         @foreach($user_show_video as $v_show)

               <div class="content-2">
               <a href="{{URL::to('/user-show-video/'.$v_show->user_post_id)}}">
               <video height="150px" width="200px;" width="600" height="700" controls>
               <source src="{{asset($v_show->status)}}" type="video/mp4">
               </video>
               </a>
              </video>
              <p>{{$v_show->status_title}}</p>

              </div>

           @endforeach


           <?php
             $show_video=DB::table('tbl_status')
                       ->where('publication_status',1)
                       ->limit(8)
                       ->get();

            ?>
           @foreach($show_video as $v_show)

                 <div class="content-2">
                 <a href="{{URL::to('/show-video/'.$v_show->status_id)}}">
                 <video height="150px" width="200px;" width="600" height="700" controls>
                 <source src="{{asset($v_show->status)}}" type="video/mp4">
                 </video>
                 </a>
                </video>
                <p>{{$v_show->status_title}}</p>

                </div>

             @endforeach
         </div>
       </div>








@endsection
