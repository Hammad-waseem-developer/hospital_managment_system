@extends('Frontend.layout')
@section('mycontent')
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">

    {{-- {{print_r($hospital)}} --}}

    <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="staff" >
    <div class="img-wrap d-flex align-items-stretch">
    <div class="img align-self-stretch" style="background-image: url(/Hospital_Images/{{$hospital[0]->hospital_pic}});"></div>
    </div>
    <div class="text pt-3 text-center rounded" style="background: rgb(255, 228, 187) !important">
    <h3>{{$hospital[0]->hospital_name}}</h3>
    <span>City : {{$hospital[0]->hospital_city}}</span><br>
    <div class="faded">

        <span>Address : {{$hospital[0]->hospital_address}}</span><br>

        @foreach ($vaccine as $item)
        <span>Vaccine : {{$item->vaccine_name}} </span> <b> PKR : @if ($item->vaccination_price >0)
            {{$item->vaccination_price}}  </b><br>
            @endif

            @if ($item->vaccination_price  <1)
            Free </b><br>
        @endif
        @endforeach

    <ul style="background: rgb(255, 228, 187) !important" class="ftco-social text-center">
    <li class="ftco-animate"><a href="{{url('/web/request')}}/{{$hospital[0]->hospital_id}}">Appointment</a></li>
    </ul>
    </div>
    </div>
</div>
</div>


{{-- <div class="col-md-9 ftco-animate text-center">
<h1 class="mb-2 bread">Report Of Covid Test</h1>
</div>
</div>
</div>
<div class="card">
  <img src="/Hospital_Images/{{$hospital->hospital_pic}}" alt="Avatar" style="width:100%">
  <div class="my-container">
    <h4>F:Name</h4>
    <h5>Architect & Engineer</h5>
    <h4>L:Name</h4>
    <h5>Architect & Engineer</h5>
    <h4>Email</h4>
    <h5>Architect & Engineer</h5>
    <h4>Phone</h4>
    <h5>Architect & Engineer</h5> --}}
  </div>
</div>
@endsection
