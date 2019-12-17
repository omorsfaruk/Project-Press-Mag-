<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="CSS/login_form.css">
  <title>User Login</title>
</head>
<body>
  <div class="container pt-2">
    <div class="row">
      <div class="col-md-4">

      </div>
      <div class="col-md-4 mt-5 pt-5" style="background-color: #AEB6BF;">
        <h2 class="text-center">Press-Mag</h2>

        <?php
          $msg=Session::get('massage');
            if ($msg) {
            echo "<h5 class='text-danger'>$msg</h5>";
              Session::put('massage',null);
            }

         ?>

        <form class="" action="{{url('/admin-login')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="Email">Email</label>
            <input class="form-control"type="email" name="admin_email" value="" id="email" required placeholder="Enter Your Email Address">
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input class="form-control"type="password" name="admin_password" value="" id="password" required placeholder="Enter Your password*">
          </div>
          <div class="form-check">
                 <label class="form-check-label">
                 <input class="form-check-input" type="checkbox">
                    Remember me
                 </label>
          </div>
          <a href="#">Forget Password</a>
          <a class=" faruk"href="#">Create an account</a><br>
          <input class="float-right btn btn-secondary" type="submit" name="submit_btn" value="Login">
        </form>
      </div>
      <div class="col-md-4">

      </div>
    </div>
  </div>









  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
