@extends('Frontend.layout')
@section('mycontent')

<section class="hero-wrap hero-wrap-2" style="background-image: url('/front_design/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
    <div class="col-md-9 ftco-animate text-center">
        <h1 style="font-weight: 700 !important; color: white !important;">My Report !</h1>
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

<div class="container">
    <div class="row">

        <div class="col-md-4"></div>


        <div class="col-md-4 m-t-5" style="margin: 20px !imporatnt;">
            {{-- <div class=""> --}}
  <img src="/front_design/images/bg_2.jpg" alt="Avatar" style="width:100%">
  <div class="my-container" style="background: rgb(165, 222, 255);">
      <h5>Patient Name : {{$patient_report[0]->patient_name}}</h5>
      <h5>Test Date : {{$patient_report[0]->test_date}}</h5>
      @if ($patient_report[0]->test_result == 0)
      <h5>Result : Negative</h5>
      @endif
      @if ($patient_report[0]->test_result == 1)
      <h5>Result : Positive</h5>
      @endif
      <h5>Recommendation : {{$patient_report[0]->Recommendation}}</h5>
</div>
{{-- </div> --}}


</div>
</div>
</div>

@endsection
