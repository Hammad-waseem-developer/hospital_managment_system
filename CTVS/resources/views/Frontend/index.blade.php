@extends('Frontend.layout')
@section('mycontent')

@if (session()->has('error_message'))
<div class="alert alert-warning alert-dismissible fade show" style="background: rgb(255, 157, 0) !important" role="alert">
    {{session()->get('error_message')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  {{session()->forget('error_message');}}

@endif

@if (session()->has('message_succ'))
<div class="alert alert-warning alert-dismissible fade show" style="background: rgb(0, 255, 21) !important" role="alert">
    {{session()->get('message_succ')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  {{session()->forget('message_succ');}}

@endif

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(front_design/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
    <div class="col-md-6 text ftco-animate">
    <h1 class="mb-4">Helping Your <span>Stay Happy One</span></h1>
    <h3 class="subheading">Everyday We Bring Hope and Smile to the Patient We Serve</h3>
    <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a></p>
    </div>
    </div>
    </div>
    </div>
    <div class="slider-item" style="background-image:url(front_design/images/bg_2.jpg);">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
    <div class="col-md-6 text ftco-animate">
    <h1 class="mb-4">We Care <span>About Your Health</span></h1>
    <h3 class="subheading">Your Health is Our Top Priority with Comprehensive, Affordable medical.</h3>
    <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a></p>
    </div>
    </div>
    </div>
    </div>
    </section>

    <section class="ftco-services ftco-no-pb">
    <div class="container">
    <div class="row no-gutters">
    <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
    <div class="media block-6 d-block text-center">
    <div class="icon d-flex justify-content-center align-items-center">
    <span class="flaticon-doctor"></span>
    </div>
    <div class="media-body p-2 mt-3">
    <h3 class="heading">Qualitfied Doctors</h3>
    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
    </div>
    </div>
    </div>
    <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
    <div class="media block-6 d-block text-center">
    <div class="icon d-flex justify-content-center align-items-center">
    <span class="flaticon-ambulance"></span>
    </div>
    <div class="media-body p-2 mt-3">
    <h3 class="heading">Emergency Care</h3>
    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
    </div>
    </div>
    </div>
    <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
    <div class="media block-6 d-block text-center">
    <div class="icon d-flex justify-content-center align-items-center">
    <span class="flaticon-stethoscope"></span>
    </div>
    <div class="media-body p-2 mt-3">
    <h3 class="heading">Outdoor Checkup</h3>
    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
    </div>
    </div>
    </div>
    <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
    <div class="media block-6 d-block text-center">
    <div class="icon d-flex justify-content-center align-items-center">
    <span class="flaticon-24-hours"></span>
    </div>
    <div class="media-body p-2 mt-3">
    <h3 class="heading">24 Hours Service</h3>
    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

    <section class="ftco-intro" style="background-image: url(front_design/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row">
    <div class="col-md-9">
    <h2>We Provide Free Health Care Consultation</h2>
    <p class="mb-0">Your Health is Our Top Priority with Comprehensive, Affordable medical.</p>
    <p></p>
    </div>
    <div class="col-md-3 d-flex align-items-center">
    <p class="mb-0"><a href="{{url('/web/hospital')}}" class="btn btn-secondary px-4 py-3">Search Hospitals</a></p>
    </div>
    </div>
    </div>
    </section>




    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(front_design/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
    <div class="row">
    <div class="col-md-6 py-5 pr-md-5">
    <div class="heading-section heading-section-white ftco-animate mb-5">
    <span class="subheading">Consultation</span>
    <h2 class="mb-4">Free Consultation</h2>
    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>

<div class="form-group ml-md-2">
<a type="submit" value="Appointment" href="{{url('/web/hospital')}}" class="btn btn-secondary py-3 px-4">Appointment</a>
</div>

    </div>
    <div class="col-lg-6 p-5 bg-counter aside-stretch">
    <h3 class="vr">About Dr.Care Facts</h3>
    <div class="row pt-4 mt-1">
    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
    <div class="block-18 p-5 bg-light">
    <div class="text">
    <strong class="number" data-number="30">0</strong>
    <span>Years of Experienced</span>
    </div>
    </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
    <div class="block-18 p-5 bg-light">
    <div class="text">
    <strong class="number" data-number="4500">0</strong>
    <span>Happy Patients</span>
    </div>
    </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
    <div class="block-18 p-5 bg-light">
    <div class="text">
    <strong class="number" data-number="84">0</strong>
    <span>Number of Doctors</span>
    </div>
    </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
    <div class="block-18 p-5 bg-light">
    <div class="text">
    <strong class="number" data-number="300">0</strong>
    <span>Number of Staffs</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

@endsection
