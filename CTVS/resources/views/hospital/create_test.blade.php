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
                    <h3 class="mb-0">Add Vaccine</h3>
                </div>
            </div>

            <form action="{{ url('/hospital/test_store') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $appointment->appointment_id }}" name="id">

                <div class="mb-3">
                    <label class="form-label" for="1">Test Date</label>
                    <input type="date" name="date" class="form-control" id="1" placeholder="Enter Test Date">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="2">Test Result</label>
                    <select class="form-control" id="2" name="result">
                        <option value="1">Positive</option>
                        <option value="0">Negative</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="3">Recommendation</label>
                    <input type="text" name="Recommendation" class="form-control" id="3"
                        placeholder="Enter Recommendation">
                </div>

                <button type="submit" class="btn btn-primary">Insert</button>
            </form>
        </div>
    </section>
@endsection()
