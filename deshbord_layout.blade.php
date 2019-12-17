<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device- width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="CSS/admin_dashboard.css">
  <title>Press-Mag | Admin dashboard</title>
</head>
<body>

<section>
  <div class="">
    <nav class="navbar navbar-expand-md " style="background-color: #34495E;">
      <a class="navbar-brand text-light" href="#">Deshbord || Press Meg</a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a  class="nav-link text-light" href="#">{{Session::get('admin_name')}}</a></li>
        <li class="nav-item"> <a  class="nav-link text-light" href="{{URL::to('logout')}}">Logout</a></li>
      </ul>
    </nav><!-- deshbord Admin end -->


      <div class="row">
        <div class="col-md-2" style="background-color:#34495E; border-radius: 5px;">
          <ul class="navbar-nav">




            <ul class="navbar-nav">
              <li class="nav-item text-center btn btn-outline-info"> <a class="nav-link text-light" href="{{URL::to('/deshbord')}}">Deshbord</a> </li>
              <li class="nav-item text-center btn btn-outline-info"> <a class="nav-link text-light" href="{{URL::to('/all-division')}}">All Division</a> </li>
              <li class="nav-item text-center btn btn-outline-info"> <a class="nav-link text-light" href="{{URL::to('/add-division')}}">Add Division</a> </li>

              <li class="nav-item text-center btn btn-outline-info"> <a class="nav-link text-light" href="{{URL::to('/all-status')}}">All Statu</a> </li>
              <li class="nav-item text-center btn btn-outline-info"> <a class="nav-link text-light" href="{{URL::to('/status')}}"> Add Status</a> </li>
              <li class="nav-item text-center btn btn-outline-info"> <a class="nav-link text-light" href="{{URL::to('/user-status')}}">User Statu</a> </li>
              <li class="nav-item text-center btn btn-outline-info"> <a class="nav-link text-light" href="#">Massage</a> </li>
              <li class="nav-item text-center btn btn-outline-info"> <a class="nav-link text-light" href="{{URL::to('/cleander')}}">Cleander</a> </li>
              <li class="nav-item text-center btn btn-outline-info"> <a class="nav-link text-light" href="#">Notifacaton</a> </li>
              <li class="nav-item text-center btn btn-outline-info"> <a class="nav-link text-light" href="{{URL::to('/logout')}}">Logout</a> </li>
            </ul>
          </ul>
        </div>


          @yield('content');

        </div>

      </div>
      <section class="d-flex " style="background-color: #34495E;">
        <div>
          <p class="text-light text-center  " style="text-align: center;  " >Create by toshar</p>
        </div>
      </section>

</section>












  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
