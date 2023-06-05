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

            <form action="{{ url('/hospital/status_store') }}" method="POST">
                @csrf

                <input type="hidden" value="{{ $appointment->appointment_id }}" name="id">

                <div class="mb-3">
                    <label class="form-label" for="2">vaccination Status</label>
                    <select class="form-control" id="2" name="status">
                        <option selected disabled>-- Select Status --</option>
                        <option value="1">Vaccinated</option>
                        <option value="0">Pending</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Insert</button>
            </form>
        </div>
    </section>
@endsection
