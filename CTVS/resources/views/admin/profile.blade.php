@extends('admin.layout')
@section('mycontant')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-3 mt-5">
                <div class="white_box mb_30">
                    <div class="box_header ">
                        <div class="main-title">
                            <h3 class="mb-0">Admin Profile</h3>
                        </div>
                    </div>
                    <div class="card text-center">
                        {{-- <div class="card-header">
                    Featured
                    </div> --}}
                        <div class="card-body">
                            <img class="rounded-circle" width="70px" src="/Admin_Images/{{ session()->get('admin_image') }}" alt="">
                            <h5 class="card-title">{{ session()->get('admin_name') }}</h5>
                            <p class="card-text">{{ session()->get('admin_email') }}</p>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="{{ url('/admin/profile_edit') }}" class="btn btn-primary">Update Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
