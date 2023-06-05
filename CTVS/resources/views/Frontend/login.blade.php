@extends('Frontend.layout')
@section('mycontent')
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter"
        style="background-image: url('front_design/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 py-5 pr-md-5">
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                        <h2>Login</h2>
                    </div>
                    <form action="{{url('/web/patient_login')}}" method="POST" class="appointment-form ftco-animate">
                        @csrf
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                @error('email')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                @error('password')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="d-md-flex">


                            <div class="form-group ml-md-4">
                                <input type="submit" value="Log In" class="btn btn-secondary py-3 px-4">
                            </div>
                        </div>
                    </form>
                    <center>
                        <a class="btn btn-secondary py-2 px-5" href="{{ url('/web/register') }}">Register</a>
                    </center>
                </div>
            </div>
        </div>
    </section>
@endsection
