<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/drcare/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jan 2023 20:18:00 GMT -->
<head>
<title>Dr.care - Free Bootstrap 4 Template by Colorlib</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="{{url('/https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900')}}" rel="stylesheet">
<link rel="stylesheet" href="{{url('front_design/css/open-iconic-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('front_design/css/animate.css')}}">
<link rel="stylesheet" href="{{url('front_design/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{url('front_design/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{url('front_design/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{url('front_design/css/aos.css')}}">
<link rel="stylesheet" href="{{url('front_design/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{url('front_design/css/bootstrap-datepicker.css')}}">
<link rel="stylesheet" href="{{url('front_design/css/jquery.timepicker.css')}}">
<link rel="stylesheet" href="{{url('front_design/css/flaticon.css')}}">
<link rel="stylesheet" href="{{url('front_design/css/icomoon.css')}}">
<link rel="stylesheet" href="{{url('front_design/css/style.css')}}">
<link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css')}}" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script nonce="6b69cd39-dd00-46ac-b5ad-c047a3f558da">(function(w,d){!function(f,g,h,i){f[h]=f[h]||{};f[h].executed=[];f.zaraz={deferred:[],listeners:[]};f.zaraz.q=[];f.zaraz._f=function(j){return function(){var k=Array.prototype.slice.call(arguments);f.zaraz.q.push({m:j,a:k})}};for(const l of["track","set","debug"])f.zaraz[l]=f.zaraz._f(l);f.zaraz.init=()=>{var m=g.getElementsByTagName(i)[0],n=g.createElement(i),o=g.getElementsByTagName("title")[0];o&&(f[h].t=g.getElementsByTagName("title")[0].text);f[h].x=Math.random();f[h].w=f.screen.width;f[h].h=f.screen.height;f[h].j=f.innerHeight;f[h].e=f.innerWidth;f[h].l=f.location.href;f[h].r=g.referrer;f[h].k=f.screen.colorDepth;f[h].n=g.characterSet;f[h].o=(new Date).getTimezoneOffset();if(f.dataLayer)for(const s of Object.entries(Object.entries(dataLayer).reduce(((t,u)=>({...t[1],...u[1]})))))zaraz.set(s[0],s[1],{scope:"page"});f[h].q=[];for(;f.zaraz.q.length;){const v=f.zaraz.q.shift();f[h].q.push(v)}n.defer=!0;for(const w of[localStorage,sessionStorage])Object.keys(w||{}).filter((y=>y.startsWith("_zaraz_"))).forEach((x=>{try{f[h]["z_"+x.slice(7)]=JSON.parse(w.getItem(x))}catch{f[h]["z_"+x.slice(7)]=w.getItem(x)}}));n.referrerPolicy="origin";n.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(f[h])));m.parentNode.insertBefore(n,m)};["complete","interactive"].includes(g.readyState)?zaraz.init():f.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
<nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
<div class="container">
<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0" style="width: 100% !important">
<div class="col-lg-2 pr-4 align-items-center">
<a class="navbar-brand" href="index-2.html">Dr.<span>care</span></a>
</div>
<div class="col-lg-10 d-none d-md-block">
<div class="row d-flex">

    {{-- @if (session()->has('patient_id'))
    <div class="col-md-4 pr-4 d-flex topper align-items-center">
        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="fa-solid fa-user"></span></div>
        <span class="text">WELCOME : {{session()->get('patient_email')}}</span>
    </div>
    @endif --}}

    @if (session()->has('patient_id'))
<div  style="margin-left: 680px !important; " class="col-md pr-4 d-flex topper align-items-center">
<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"> <a href="{{url('/web/profile')}}"> <span class="fa-solid fa-user"></span> </a></div>
<span class="text">WELCOME : {{session()->get('patient_name')}}</span>
</div>
@endif

</div>
</div>
</div>
</div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container d-flex align-items-center">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>
@if (session()->has('patient_id'))
<p class="button-custom order-lg-last mb-0" style="margin-left: 30px;"><a href="{{url('/web/logout')}}" class="btn btn-secondary py-2 px-3">Logout</a></p>
@endif

<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav mr-auto">
<li class="nav-item active"><a href="{{url('/')}}" class="nav-link pl-0">Home</a></li>
<li class="nav-item"><a href="{{url('/web/hospital')}}" class="nav-link">Hospital</a></li>

@if (session()->has('patient_id'))
<li class="nav-item"><a href="{{url('/web/hospital')}}" class="nav-link">Request</a></li>
@endif
@if (session()->has('patient_id'))
<li class="nav-item"><a href="{{url('/web/report')}}" class="nav-link">My Report</a></li>
@endif
@if (session()->has('patient_id'))
<li class="nav-item"><a href="{{url('/web/vac_status')}}" class="nav-link">My Vaccine Status</a></li>
@endif
@if (session()->has('patient_id'))
<li class="nav-item"><a href="{{url('/web/my_appointment')}}" class="nav-link">My Appointment</a></li>
@endif
<div class="dropdown">
  <button class="btn login-btn mt-2 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Login
  </button>
  <div class="dropdown-menu" aria-labelledby="">
    <a class="dropdown-item" href="{{url('/web/login')}}">Patient Login</a>
    <a class="dropdown-item" href="{{url('/hospital/h_login')}}">Hospital Login</a>
    <a class="dropdown-item" href="{{url('/admin/admin_login')}}">Admin Login</a>
  </div>
</div>

</ul>
</div>
 </div>
</nav>

@yield('mycontent')


<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
    <div class="row mb-5">
    <div class="col-md">
    <div class="ftco-footer-widget mb-5">
    <h2 class="ftco-heading-2 logo">Dr.<span>care</span></h2>
    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>
    <div class="ftco-footer-widget mb-5">
    <h2 class="ftco-heading-2">Have a Questions?</h2>
    <div class="block-23 mb-3">
    <ul>
    <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
    <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="99f0f7fff6d9e0f6ecebfdf6f4f8f0f7b7faf6f4">[email&#160;protected]</span></span></a></li>
    </ul>
    </div>
    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
    </ul>
    </div>
    </div>
    <div class="col-md">
    <div class="ftco-footer-widget mb-5 ml-md-4">
    <h2 class="ftco-heading-2">Links</h2>
    <ul class="list-unstyled">
    <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
    <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
    <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
    <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
    <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
    </ul>
    </div>
    <div class="ftco-footer-widget mb-5 ml-md-4">
    <h2 class="ftco-heading-2">Services</h2>
    <ul class="list-unstyled">
    <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Neurolgy</a></li>
    <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Dentist</a></li>
    <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Ophthalmology</a></li>
    <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Cardiology</a></li>
    <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Surgery</a></li>
    </ul>
    </div>
    </div>
    <div class="col-md">
    <div class="ftco-footer-widget mb-5">
    <h2 class="ftco-heading-2">Recent Blog</h2>
    <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
    <div class="text">
    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
    <div class="meta">
    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
    </div>
    </div>
    </div>
    <div class="block-21 mb-5 d-flex">
    <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
    <div class="text">
    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
    <div class="meta">
    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md">
    <div class="ftco-footer-widget mb-5">
    <h2 class="ftco-heading-2">Opening Hours</h2>
    <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>We are open 24/7</h3>
    </div>
    <div class="ftco-footer-widget mb-5">
    <h2 class="ftco-heading-2">Subscribe Us!</h2>
    <form action="#" class="subscribe-form">
    <div class="form-group">
    <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
    <input type="submit" value="Subscribe" class="form-control submit px-3">
    </div>
    </form>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 text-center">
    <p>
    Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
    </p>
    </div>
    </div>
    </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
    <script src="{{url('front_design/js/jquery.min.js')}}"></script>
    <script src="{{url('front_design/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{url('front_design/js/popper.min.js')}}"></script>
    <script src="{{url('front_design/js/bootstrap.min.js')}}"></script>
    <script src="{{url('front_design/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{url('front_design/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('front_design/js/jquery.stellar.min.js')}}"></script>
    <script src="{{url('front_design/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('front_design/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('front_design/js/aos.js')}}"></script>
    <script src="{{url('front_design/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{url('front_design/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{url('front_design/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{url('front_design/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
    <script src="{{url('front_design/js/google-map.js')}}"></script>
    <script src="{{url('front_design/js/main.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"78b58d803def99ba","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
    </body>

    <!-- Mirrored from preview.colorlib.com/theme/drcare/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jan 2023 20:18:00 GMT -->
    </html>
