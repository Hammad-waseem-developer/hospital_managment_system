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
                                <h4>Vaccination Status</h4>
                                
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th class="text-warning fw-bold" scope="col">Patient</th>
                                            <th class="text-warning fw-bold" scope="col">Patient Age</th>
                                            <th class="text-warning fw-bold" scope="col">Patient Gender</th>
                                            <th class="text-warning fw-bold" scope="col">Hospital</th>
                                            <th class="text-warning fw-bold" scope="col">Status</th>
                                            <th class="text-warning fw-bold" scope="col">Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vaccine_status as $item)
                                            <tr>
                                                <td class="fw-bold">{{ $item->patient_name }}</td>
                                                <td class="fw-bold">{{ $item->patient_age }}</td>
                                                <td class="fw-bold">{{ $item->patient_gender }}</td>
                                                <td class="fw-bold">{{ $item->hospital_name }}</td>


                                                @if ($item->status == 0)
                                                    <td class="fw-bold text-danger">Pending</td>
                                                @endif
                                                @if ($item->status == 1)
                                                    <td class="fw-bold text-success">Vaccinated</td>
                                                @endif

                                                <td><a href="{{ url('/hospital/vaccine_status_update') }}/{{ $item->v_status_id }}"
                                                        class="btn btn-success text-white">Update</a>
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
