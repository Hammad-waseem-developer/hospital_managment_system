@extends('Frontend.layout')
@section('mycontent')

<section class="hero-wrap hero-wrap-2" style="background-image: url('/front_design/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
    <div class="col-md-9 ftco-animate text-center">
        <h1 style="font-weight: 700 !important; color: white !important;">My Vaccination Status !</h1>
    </div>
    </div>
    </div>
    </section>

<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">
<div class="col-md-9 ftco-animate text-center">
</div>
</div>
</div>
<div class="card">
  <img src="/front_design/images/bg_2.jpg" alt="Avatar" style="width:100%">
  <div class="my-container" style="background: rgb(30, 30, 30);">
      <h5>Patient Name : {{$patient_status[0]->patient_name}}</h5>
      <h5>Test Date : {{$patient_status[0]->appointment_date}}</h5>
      @if ($patient_status[0]->status == 0)
      <h5>Status : Pending</h5>
      @endif
      @if ($patient_status[0]->status == 1)
      <h5>Status : Vaccinated</h5>
      @endif
</div>
</div>
@endsection
