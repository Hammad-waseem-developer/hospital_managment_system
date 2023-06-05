@extends('hospital.h_layout')
@section('mycontant')
    <br />
    <br />
    <br />
    <br />
    <br />
    <section class="main_content dashboard_part">

        <div class="container-fluid g-0">
            <div class="row">

            </div>
        </div>
        <!-- ALL PAtient -->
        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Covid-19 Report</h4>
                                
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th class="text-warning fw-bold" scope="col">Patient</th>
                                            <th class="text-warning fw-bold" scope="col">Patient Age</th>
                                            <th class="text-warning fw-bold" scope="col">Patient Gender</th>
                                            <th class="text-warning fw-bold" scope="col">Hospital</th>
                                            <th class="text-warning fw-bold" scope="col">Test Date</th>
                                            <th class="text-warning fw-bold" scope="col">Result</th>
                                            <th class="text-warning fw-bold" scope="col">More Info</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($report as $item)
                                            <tr>
                                                <td class="fw-bold">{{ $item->patient_name }}</td>
                                                <td class="fw-bold">{{ $item->patient_age }}</td>
                                                <td class="fw-bold">{{ $item->patient_gender }}</td>
                                                <td class="fw-bold">{{ $item->hospital_name }}</td>
                                                <td class="fw-bold">{{ $item->appointment_date }}</td>

                                                @if ($item->test_result == 0)
                                                    <td class="fw-bold text-danger">Negative</td>
                                                @endif
                                                @if ($item->test_result == 1)
                                                    <td class="fw-bold text-success">Positive</td>
                                                @endif

                                                <td><a href="{{ url('/hospital/test_info') }}/{{ $item->patient_id }}"
                                                        class="btn btn-success text-white">Info</a>
                                                    </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ALL PAtient -->
    </section>
@endsection
