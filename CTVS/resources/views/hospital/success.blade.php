@extends('hospital.h_layout')
@section('mycontant')
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <section class="main_content dashboard_part">
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session()->get('success') }}
                <p>Please wait for Approve</p>
            </div>
            <div class="alert alert-success text-center">
                @if ($hospital[0]->hospital_approval_status == 0)
                Status : Pending
                @endif
                @if ($hospital[0]->hospital_approval_status == 1)
                Status : Approve <br><br>
                <button class="btn btn-success"> <a class="text-white" href="{{url('/hospital/h_login')}}">Login</a> </button>
                @endif
            </div>
        @endif
    </section>
@endsection()
