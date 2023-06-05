@extends('hospital.h_layout')
@section('mycontant')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-3 mt-5">
                <div class="white_box mb_30">
                    <div class="box_header ">
                        <div class="main-title">
                            <h3 class="mb-0">Hospital Profile</h3>
                        </div>
                    </div>
                    <div class="card text-center">
                        {{-- <div class="card-header">
                    Featured
                    </div> --}}
                        <div class="card-body">
                            <img width="70px" src="/Hospital_Images/{{ session()->get('hospital_image') }}" alt="">
                            <h5 class="card-title">{{ session()->get('hospital_name') }}</h5>
                            <p class="card-text">{{ session()->get('hospital_email') }}</p>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="{{ url('/hospital/profile_edit') }}" class="btn btn-primary">Update Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
