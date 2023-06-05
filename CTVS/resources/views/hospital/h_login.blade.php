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
                    <h3 class="mb-0">Hospital Login</h3>
                </div>
            </div>

            <form action="{{ url('/hospital/h_store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Email address</label>
                    <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                        @error('email')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Password</label>
                    <input type="password" value="{{ old('pass') }}" name="pass" class="form-control" id="exampleFormControlInput1"
                        placeholder="Password">
                        @error('pass')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <center>
            <a href="{{ url('/hospital/h_register') }}">
                <button type="submit" class="btn btn-success mt-2 text-white">Register</button>
            </a>
        </center>
        </div>
    </section>
@endsection
