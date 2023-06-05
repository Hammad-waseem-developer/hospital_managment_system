@extends('Frontend.layout')
@section('mycontent')
<section class="hero-wrap hero-wrap-2" style="background-image: url('/front_design/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
    <div class="col-md-9 ftco-animate text-center">
        <h1 style="font-weight: 700 !important; color: white !important;">My Appointment !</h1>
    </div>
    </div>
    </div>
    </section>

<div class="overlay"></div>

<div class="container">
    <div class="row">

        <div class="col-md-4"></div>


        <div class="col-md-4 m-t-5" style="margin: 20px !imporatnt;">
            {{-- <div class=""> --}}
                <img src="/front_design/images/bg_2.jpg" alt="Avatar" style="width:100%">
                <div class="my-container" style="background: rgb(165, 222, 255);">
                    <h5 >Patient Name : {{$appointment[0]->patient_name}}</h5>
                    <h5 >Appointment Time : {{$appointment[0]->appointment_time}}</h5>
                    <h5 >Appointment Date : {{$appointment[0]->appointment_date}}</h5>
                    @if ($appointment[0]->appointment_type == 1)
                    <h5 >Appointment Type : Vaccine</h5>
                    @endif
                    @if ($appointment[0]->appointment_type == 0)
                    <h5 >Appointment Type : Covid Test</h5>
                    @endif

                    @if ($appointment[0]->appointment_status == 0)
                    <h5 >Appointment Status : Pending</h5>
                    @endif
                    @if ($appointment[0]->appointment_status == 1)
                    <h5 >Appointment Status : Approve</h5>
                    @endif
              </div>
{{-- </div> --}}


</div>
</div>
</div>












{{-- <div class="card rounded">
  <img src="/front_design/images/bg_2.jpg" alt="Avatar" style="width:100%">
  <div class="my-container" style="background: rgb(30, 30, 30);">
      <h5 style="color: white; font-weight: 200;">Patient Name : {{$appointment[0]->patient_name}}</h5>
      <h5 style="color: white; font-weight: 200;">Appointment Time : {{$appointment[0]->appointment_time}}</h5>
      <h5 style="color: white; font-weight: 200;">Appointment Date : {{$appointment[0]->appointment_date}}</h5>
      @if ($appointment[0]->appointment_type == 1)
      <h5 style="color: white; font-weight: 200;">Appointment Type : Vaccine</h5>
      @endif
      @if ($appointment[0]->appointment_type == 0)
      <h5 style="color: white; font-weight: 200;">Appointment Type : Covid Test</h5>
      @endif

      @if ($appointment[0]->appointment_status == 0)
      <h5 style="color: white; font-weight: 200;">Appointment Status : Pending</h5>
      @endif
      @if ($appointment[0]->appointment_status == 1)
      <h5 style="color: white; font-weight: 200;">Appointment Status : Approve</h5>
      @endif
</div>
</div> --}}
@endsection
