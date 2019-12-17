<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="CSS/registration.css">
  <title>User Registration</title>
</head>
<body>
   <!--Registration form-->
   <div id="form" class="container    ">
     <div class="row">
      <div class="col-md-12  col-6 ">
      <h2 class="text-center pt-3">Press-Mag</h2>
   <form class="" action="{{url('/save-registration')}}" method="post">
     @csrf
     <div class="form-group">
       <label for="First Name">First Name</label>
       <input class="form-control"type="text" name="user_first_name" value="" id="first_name" required placeholder="Enter Your First Name*">
     </div>
     <div class="form-group">
       <label for="Last Name">Last Name</label>
       <input class="form-control"type="text" name="user_last_name" value="" id="last_name" required placeholder="Enter Your Last Name*">
     </div>
     <div class="form-group">
       <label for="Email">Email</label>
       <input class="form-control"type="email" name="user_email" value="" id="email" required placeholder="Enter Your Email Address*">
     </div>
     <div class="form-group">
       <label for="Password">Password</label>
       <input class="form-control"type="password" name="user_password" value="" id="password" required placeholder="Enter Your password*">
     </div>
     <div class="form-group">
       <label for="Confirm Password">Confirm Password</label>
       <input class="form-control"type="password" name="user_confirm_password" value="" id="confirm_password" required placeholder="Re-enter Your password*">
     </div>
      <div class="form-check">
             <label class="form-check-label">
             <input class="form-check-input" type="checkbox">
                I caccept the Terms of Use & Privacy Policy.
             </label>
      </div>
    <input class="btn btn-success" type="submit" name="user_submit_btn" value="Registration">
    <a id="account"class="ml-5 mt-4" href="#">Already have an account</a>
   </form>
     </div>
       </div>
    </div>










  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
