@extends('hospital.h_layout')
@section('mycontant')
    <br />
    <br />
    <br />
    <br />
    <br />
    <section class="main_content dashboard_part">
        <div class="white_box mb_30">
            <div class="box_header ">
                <div class="main-title">
                    <h3 class="mb-0">Hospital Register !</h3>
                </div>
            </div>

            <form action="{{ url('/hospital/h_reg_store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="exampleFormControlInput1"
                        placeholder="name">
                    @error('name')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Email address</label>
                    <input type="email" name="hospital_email" value="{{ old('hospital_email') }}" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                        @error('hospital_email')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Password</label>
                    <input type="password" name="password" value="{{ old('password') }}" class="form-control" id="exampleFormControlInput1"
                        placeholder="Password">
                        @error('password')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Address</label>
                    <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="exampleFormControlInput1"
                        placeholder="Address">
                        @error('address')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">City</label>
                    <input type="text" name="city" value="{{ old('city') }}" class="form-control" id="exampleFormControlInput1"
                        placeholder="City">
                        @error('city')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Picture</label>
                    <input type="file" value="{{ old('pic') }}" name="pic" class="form-control" id="exampleFormControlInput1"
                        placeholder="pic">
                        @error('pic')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </section>
@endsection()
