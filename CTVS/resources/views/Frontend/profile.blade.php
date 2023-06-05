@extends('Frontend.layout')
@section('mycontent')

<section class="hero-wrap hero-wrap-2" style="background-image: url('/front_design/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
    <div class="col-md-9 ftco-animate text-center">
        <h1 style="font-weight: 700 !important; color: white !important;">My Profile !</h1>
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
@if (session('message'))
      <p class="alert alert-success">{{ session('message') }}</p>

      {{session()->forget('message')}}
  @endif
<div class="card">
  <div class="my-container" style="background: rgb(163, 195, 255);">
      <h6>Patient Name : {{$patient[0]->patient_name}}</h6>
      <h6>Patient email : {{$patient[0]->patient_email}}</h6>
      <h6>Patient age : {{$patient[0]->patient_age}}</h6>
      <h6>Patient gender : {{$patient[0]->patient_gender}}</h6>
      <h6>Patient address : {{$patient[0]->patient_address}}</h6>
      <h6>Patient city : {{$patient[0]->patient_city}}</h6>
      <h6>Patient phone : {{$patient[0]->patient_phone_no}}</h6>
      <button class="btn btn-success btn-sm"><a href="{{url('/web/profile/edit')}}/{{$patient[0]->patient_id}}">Update</a> </button>


</div>
</div>
@endsection
