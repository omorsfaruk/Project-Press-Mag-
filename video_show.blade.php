@extends('layout')
@section('content')
  <!--single video play start  -->
  <div class="container">
      <div class="row mt-5 ml-5">
        <div class="col-md-8 ">
          <div class="content ">

              <video width="650" height="500" controls>
              <source src="{{asset($show_video_info->status)}}" type="video/mp4">
              </video>
         <h3>{{$show_video_info->status_title}}</h3>
         <p>{{$show_video_info->status_long_discription}}</p>
         </div>

         <!-- session values start point -->

         <!-- session values start point -->
         <!-- comment box start point-->
         <?php
           $session_value_comment=Session::get('user_id');
          ?>
         <!-- like start -->
         <?php
            $all_like=DB::table('tbl_user_like')
                    ->where('status_id',$show_video_info->status_id)
                    ->get();

                    echo count($all_like);
          ?>
         <a href="{{URL::to('/user-like/'.$show_video_info->status_id)}}"><i class="fas fa-thumbs-up"></i></a>

            <!-- like start -->
         @if($session_value_comment)
         <form class="" action="{{url('/save-user-comment/'.$show_video_info->status_id)}}" method="post">
          @csrf
           <label class="h4" for="" style="color: green" >Comment</label>
           <input class="form-control" type="text" name="comment" placeholder="Enter Your Commment" value="">
           <input class="btn btn-success ml-auto" type="submit" name="comment_submit" value="Comment">
         </form>
         @else
         <a href="{{URL::to('/user-login')}}">Comment</a>
         @endif
         <!-- comment box end point-->
         <!-- show commeent box start -->
              <?php
                  $all_comment=DB::table('tbl_user_comment')
                          ->where('status_id',$show_video_info->status_id)
                          ->get();
               ?>


               @foreach ($all_comment as $v_comment)
               <div class="form-inline">
                 {{$v_comment->comment}}

               </div>


               @endforeach
         <!-- show commeent box end -->
        </div>

        <div class="col-md-2 ml-4">
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
  </div>






  <!--single video play start  -->
  <!--Most watch video-->
@endsection
