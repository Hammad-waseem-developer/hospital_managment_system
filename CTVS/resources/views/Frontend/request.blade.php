@extends('Frontend.layout')
@section('mycontent')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('front_design/images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Request for covid-19 test / vaccination</h1>
                </div>
            </div>
        </div>
    </section>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter"
        style="background-image: url(front_design/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 py-5 pr-md-5">
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                        <span class="subheading">Consultation</span>
                        <h2 class="mb-4">Free Consultation</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts.</p>
                    </div>
                    <center>
                        @if (session()->has('error_appointment'))
                        <div class="alert alert-warning alert-dismissible fade show" style="background: rgb(255, 157, 0) !important" role="alert">
                            {{session()->get('error_appointment')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        {{session()->forget('error_appointment');}}
                        @endif
                </center>
                    <form action="{{ url('/web/create_appointment') }}" method="POST"
                        class="appointment-form ftco-animate">
                        @csrf
                        <input type="hidden" value="{{ $hospital[0]->hospital_id }}" name="hospital_id">
                        <input type="hidden" value="{{ session()->get('patient_id') }}" name="patient_id">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <center>
                                    <div class="input-wrap">
                                        <input type="date" name="date" value="{{ old('date') }}"
                                            style="width: 250px; background: none !important; border: none !important; border-bottom: 1px solid rgb(255, 255, 255) !important; color: white !important"
                                            class="" placeholder="Date">
                                        @error('date')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <input type="time" value="{{ old('time') }}" name="time"
                                        style="width: 250px; background: none !important; border: none !important; border-bottom: 1px solid rgb(255, 255, 255) !important; color: white !important"
                                        placeholder="Time">
                                    @error('time')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                </center>
                            </div>
                        </div>


                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="type" id="type" class="form-control">
                                            <option disabled selected>Select Type</option>
                                            <option value="1">Vaccine</option>
                                            <option value="0">Covid</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="vaccine" id="vaccine" class="form-control">
                                            <option disabled selected>Select Vaccine</option>
                                            @foreach ($vaccine as $item)
                                                <option value="{{ $item->vaccine_name }}">{{ $item->vaccine_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="d-md-flex">
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Appointment" class="btn btn-secondary py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById("type").addEventListener("change", function() {
            if (this.value === "1") {
                document.getElementById("vaccine").style.display = "block";
            }else {
                document.getElementById("vaccine").style.display = "none";
            }
        });
    </script>
@endsection
