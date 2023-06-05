@extends('hospital.h_layout')
@section('mycontant')
<br/>
<br/>
<br/>
<br/>
<br/>
<section class="main_content dashboard_part">
    <div class="white_box mb_30">
        <div class="box_header ">
        <div class="main-title">
        <h3 class="mb-0">Send Email</h3>
        </div>
        </div>

        <form action="{{ url('/hospital/send') }}" method="POST">
            @csrf
            <input type="hidden" value="{{$patient->patient_name}}" name="name">
            <input type="hidden" value="{{$patient->patient_email}}" name="email">

        <textarea name="message" cols="30" rows="10"></textarea>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
</section>

@endsection()
