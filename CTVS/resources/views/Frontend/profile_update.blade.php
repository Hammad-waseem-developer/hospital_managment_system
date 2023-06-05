@extends('Frontend.layout')
@section('mycontent')
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter"
        style="background-image: url('front_design/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 py-5 pr-md-5">
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                        <h2>Update Profile</h2>
                    </div>
                    <form action="{{ url('/web/update_profile') }}/{{ $patient->patient_id }}" method="POST"
                        class="appointment-form ftco-animate">
                        @csrf
                        <div class="d-md-flex">

                            <div class="form-group">
                                <input type="text" name="name" value="{{ $patient->patient_name }}"
                                    class="form-control" placeholder="First Name">
                                @error('name')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group ml-md-4">
                                <input type="email" value="{{ $patient->patient_email }}" name="patient_email"
                                    class="form-control" placeholder="Email">
                                @error('patient_email')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <input type="hidden" name="password" value="{{ $patient->patient_password }}"
                                class="form-control" placeholder="password">


                        </div>

                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="gender" class="form-control">
                                            @if ($patient->patient_gender == 'male')
                                                <option class="" value="1" disabled selected>Male</option>
                                            @endif

                                            @if ($patient->patient_gender == 'female')
                                                <option class="" value="0" disabled selected>Female</option>
                                            @endif
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group ml-md-4">
                                <input type="number" value="{{ $patient->patient_age }}" name="age"
                                    class="form-control" placeholder="age">
                                @error('age')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <div class="d-md-flex">

                            <div class="form-group">
                                <input type="text" value="{{ $patient->patient_address }}" name="address"
                                    class="form-control" placeholder="Address">
                                @error('address')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group ml-md-4">
                                <input type="text" value="{{ $patient->patient_city }}" name="city"
                                    class="form-control" placeholder="City">
                                @error('city')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group ml-md-4">
                                <input type="number" value="{{ $patient->patient_phone_no }}" name="phone"
                                    class="form-control" placeholder="Pnone">
                                @error('phone')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>


                        </div>

                        <div class="d-md-flex">
                            <div class="form-group ml-md-4">
                                <input value="Update" type="submit" class="btn btn-secondary py-3 px-4">
                            </div>
                        </div>

                    </form>

                    
                </div>
            </div>
        </div>
    </section>
@endsection
