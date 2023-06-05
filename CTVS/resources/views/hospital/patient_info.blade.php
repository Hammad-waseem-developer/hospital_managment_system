@extends('hospital.h_layout')
@section('mycontant')
    <div class="container">
        <div class="row">
            <center>
                <h3 class="text-center m-2">Patient's Covid-19 Report</h3>
                <div class="col-md-6 mt-4">
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Report</div>
                        <div class="card-body text-success">
                            <h5 class="card-text">Patient : {{ $patient_report[0]->patient_name }}</h5>
                            <p class="card-text">Hospital : {{ $patient_report[0]->hospital_name }}</p>
                            <p class="card-text">Age : {{ $patient_report[0]->patient_age }}</p>
                            <p class="card-text">Gender : {{ $patient_report[0]->patient_gender }}</p>
                            <p class="card-text">Test Date : {{ $patient_report[0]->test_date }}</p>

                            @if ($patient_report[0]->test_result == 0)
                                <p class="card-text text-danger">result : Negative</p>
                            @endif
                            @if ($patient_report[0]->test_result == 1)
                                <p class="card-text text-success">result : positive</p>
                            @endif

                            <p class="card-text">Recommendation : {{ $patient_report[0]->Recommendation }}</p>
                            <button class="btn btn-primary btn-sm mt-3">
                                @if ($patient_report[0]->test_result == 1)
                                    <a class="text-white"
                                        href="{{ url('/hospital/report_update') }}/{{ $patient_report[0]->test_id }}">Negative</a>
                                @endif
                                @if ($patient_report[0]->test_result == 0)
                                    <a class="text-white"
                                        href="{{ url('/hospital/report_update') }}/{{ $patient_report[0]->test_id }}">Positive</a>
                                @endif
                            </button>

                            <button class="btn btn-sm btn-warning mt-3">
                                <a href="{{url('/hospital/edit_recom')}}/{{$patient_report[0]->test_id}}">Update Recommendation</a>
                            </button>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
@endsection
