@extends('layout')
@section('content')
  <!--ABOUT US-->
  <br><br>

   <div class="section-padding">
     <div class="container">
       <div class="row" >
         <div class="col-md-12">
           <div class="section-heading">
             <h2>OUR MISSION</h2>
           </div>
           <div class="section-content">
             <p>Every citizen become a journalist.</p>
           </div>
         </div>
       </div>
    </div>
    </div>

    <div class="about-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="img/journalist.jpg" class="img-flouid rounded" alt="">
          </div>
          <div class="col-md-6">
            <div class="sec-heading">
              <h2>Press-Mag</h2>
            </div>
            <div class="sec-content">
              <p>Press-mag is an online base media platform in Bangladesh. Our technology will help every single person to become a journalist. This will allow people from anywhere in the country to raise their grievances and problems.This is a news channel through which you can find all the news in your country.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="about-area1">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="sec-heading">
              <h2 class="h23">Our Motivation</h2>
            </div>
            <div class="sec-content">
              <p>People almost never see the news about my village or the country's rare places. The reason is that the news media can't get there. Because of this, such news cannot reach all of us. There are some places in the country where our general journalists are away, the administrative people are afraid to go there. But if people in that area want to, then they have this problem, Be able to highlight it to everyone.</p>
            </div>
          </div>
          <div class="col-md-6">
              <img src="img/jou.jpg" class="img-fluid rounded" alt="">
          </div>
        </div>
      </div>
    </div>
<br><br><br><br><br>
    <div class="team-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="team-heading">
              <h2>Our Team</h2>
              <p>Be yourself, Be confident</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3  ">
            <div class="single-team-item">

             <img height="200px;" width="300px;" class="imgs"src="{{asset('about_img/boktiar.jpg')}}" alt="">

             <div class="team-social-icons">
               <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
               <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
               <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
               <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
             </div>
             <h4>Bokhtiar Toshar <span>Web Developer</span></h4>
           </div>
          </div>
          <div class="col-md-3 ">
            <div class="single-team-item">

             <img height="200px;" width="300px;" class="imgs"src="{{asset('about_img/faruk.jpg')}}" alt="">

             <div class="team-social-icons">
               <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
               <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
               <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
               <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
             </div>
             <h4>Omer Faruk <span>Web Designer</span></h4>
           </div>
          </div>
          <div class="col-md-3 ">
            <div class="single-team-item">

             <img height="200px;" width="300px;" class="imgs"src="{{asset('about_img/riaz.jpg')}}" alt="">

             <div class="team-social-icons">
               <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
               <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
               <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
               <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
             </div>
             <h4>Riaz AR<span>Founder & CEO</span></h4>
           </div>
          </div>
          <div class="col-md-3  ">
            <div class="single-team-item">

             <img height="200px;" width="300px;" class="imgs"src="{{asset('about_img/rabiul.jpg')}}" alt="">

             <div class="team-social-icons">
               <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
               <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
               <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
               <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
             </div>
             <h4>Rabiul Islam<span>Project Manager</span></h4>
           </div>
          </div>
      </div>
    </div>

<br><br><br><br>

    <!--footer area-->
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
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Terms of conditions</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

@endsection
