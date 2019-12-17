@extends('layout')
@section('content')
  <!--Contact-->
  <div class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>have some question?</h2>
            <p><i class="fa fa-map-marker"></i> Asulia, Saver, Dhaka</p>
            <p><i class="fa fa-envelope"></i> contact@press-mag.com</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
          <form class="contact-form" action="index.html" method="post">
            <div class="form-group">
                <input class="form-control"type="text" name="firstName" value="" placeholder="First Name">
            </div>
            <div class="form-group">
              <input class="form-control"type="text" name="lastName" value="" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input class="form-control"type="email" name="email" value="" placeholder="What's your email:">
            </div>
            <div class="form-group">
               <textarea class="form-control" id="message" placeholder="Your question..." rows="" ></textarea>
             </div>

          </form>
          <a href="#" class="send-message btn btn-success ml-auto">SEND MESSAGE</a>
        </div>
      </div>
    </div>
  </div>


<br><br><br><br><br>
  <!--FOOTER-->
  <div class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="footer-wid">
            <h3>Press-mag</h3>
            <p>Press-mag is an online base media platform in Bangladesh. Our technology will help every single person to become a journalist. This will allow people from anywhere in the country to raise their grievances and problems.</p>
          </div>
          <div class="social-links">
             <a href="#"><i class="fa fa-facebook"></i></a>
             <a href="#"><i class="fa fa-twitter"></i></a>
             <a href="#"><i class="fa fa-linkedin"></i></a>
             <a href="#"><i class="fa fa-youtube"></i></a>
           </div>
        </div>
        <div class="col-md-4"  >
          <div class="footer-wid">
          <h3>Quick Links</h3>
         <ul class="navbar-nav">
           <li><a href="#">Home</a></li>
           <li><a href="#">About Us</a></li>
           <li><a href="#">Contact</a></li>
           <li><a href="#">Profile</a></li>
           <li><a href="#">Log Out</a></li>
           </ul>
        </div>
        </div>
        <div class="col-md-3">
          <div class="footer-wid">
          <p class="contact-info"><i class="fa fa-map-marker"></i>Asulia, Savar <br> Dhaka, Bangladesh</p>
           <p class="contact-info"><i class="fa fa-envelope"></i><a href="mailto:omorsfaruk@gmail.com">omorsfaruk@gmail.com</a></p>
           <p class="contact-info"><i class="fa fa-phone"></i><a href="tell:8801764758976">+8801764758976</a></p>
           </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright-area">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>Copyright © 2019 All right reserved by PRESS-MAG | This Site is made with ♥ by <a href="about.html">PRESS-MAG</a> </p>
        </div>
        <div class="col-md-6 text-right">
          <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of conditions</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
