<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <link rel="stylesheet" href="CSS/index.css">
   <title>Press-Mag | Welcome to Prss-Mag</title>
</head>
<body>




 <!--Navbar-->
  <nav style="background-color: #3c1d6f" class="navbar  navbar-dark navbar-expand-md ">
    <a class="" style="height: 50px; margin-bottom:5px;" href="#"><img height="60px;" width="70px;"  src="{{asset('img/p.png')}}" alt=""><p class="text-light mb-2"></p> </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ml-5 ">
        <li class="nav-item "><a class="nav-link active" href="{{URL::to('/')}}">Home</a></li>
        <li class="nav-item ml-2"><a class="nav-link" href="{{URL::to('/about-us')}}">About Us</a></li>
        <li class="nav-item ml-2"><a class="nav-link" href="{{URL::to('/contact')}}">Contact</a></li>
        <li class="nav-item ml-2"><a class="nav-link" href="{{URL::to('/post')}}">Post</a></li>

     </ul>
    <form class="form-inline ml-5" action=" " method="post">
        <input class="form-control pl-5 px-5" type="text" name="search" placeholder="Search" value="">
        <button class="btn btn-primary"type="submit" name="button">Search</button>
    </form>
    </div>



    <div class="">

      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <?php
            $session_v=Session::get('user_id');
           ?>
           @if($session_v)
           <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#"><i class="far fa-user"></i>{{Session::get('user_first_name')}}</a>
           @else
           <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#"><i class="far fa-user"></i>Sing Up</a>
           @endif
            <div class="dropdown-menu mr-5">

            <?php
              $session_id=Session::get('user_id');
             ?>
             @if($session_id)
            <a class="dropdown-item " href="{{URL::to('/user-deshbord/'.$session_id)}}">My Profile</a>
            @else
            <a class="dropdown-item " href="{{URL::to('/registration')}}">New Account</a>
            @endif
            <?php
              $session_values=Session::get('user_id');
             ?>
             @if($session_values)
            <a class="dropdown-item " href="{{URL::to('/user_logout')}}">Log Out</a>
            @else
            <a class="dropdown-item " href="{{URL::to('/user-login')}}">Login</a>
            @endif
           </div>
        </li>


      </ul>
    </div>

  </nav>
<!--END OF NAVBAR-->




<!--recent uploads-->
<section class="recent-upload">
  <div class="row">


<div class="col-md-2 mt-3" >
  <?php
    $all_division_show=DB::table('tbl_division')
                  ->where('publication_status',1)
                  ->get();
   ?>

   @foreach($all_division_show as $v_division_show)
      <ul class="navbar-nav bg-light">
        <style media="screen">
          li a:hover{
            color: white;
            display: block;
          }
        </style>
        <li style="border-radius: 10px; " class="nav-item btn btn-outline-info"><a  class="nav-link " href="{{URL::to('/division-ways-show',$v_division_show->division_id)}}">{{$v_division_show->division_name}}</a> </li>

   @endforeach
        <li><h4 class=" d-block text-success" style="color: #ffff; background-color: #CCD1D1; margin:10px;" >Help Info</h4></li>
        <li class="nav-item btn">Police Line 999 </li>
        <li class="nav-item btn">govt service info 333</li>
        <li class="nav-item btn">Police Line 999 </li>
        <li class="nav-item btn">govt service info 333</li>
        <li><h5 class=" d-block text-success" style="color: #ffff; background-color: #CCD1D1; " >News Cover Report</h5></li>



        <li>
<br>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2016 25%</div>
</div>
<br>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">2017 50%</div>
</div>
<br>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">2018 75%</div>
</div>
<br>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">2019 100%</div>
</div>
        </li>
   </ul>
</div>



<div class="col-md-10 mt-3">
  <div class="row">
    @yield('content');
    </div>

</div>




  </div>


</section>











  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
