@extends('admin.layout')
@section('mycontant')
<br/>
<br/>
<br/>
<br/>
<br/>
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
    <h4>Patient Appointment</h4>
    
    </div>
    <div class="QA_table mb_30">

        <table class="table lms_table_active">
            <thead class="bg-primary">
            <tr>
                <th class="text-warning fw-bold" scope="col">Patient</th>
                <th class="text-warning fw-bold" scope="col">Hospital</th>
                <th class="text-warning fw-bold" scope="col">Date</th>
                <th class="text-warning fw-bold" scope="col">Time</th>
                <th class="text-warning fw-bold" scope="col">Type</th>
                <th class="text-warning fw-bold" scope="col">Status</th>
                <th class="text-warning fw-bold" scope="col">Approve</th>
                <th class="text-warning fw-bold" scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($appointment as $item)

                <tr>
                    <td class="fw-bold">{{ $item->patient_name }}</td>
                    <td class="fw-bold">{{ $item->hospital_name }}</td>
                    <td class="fw-bold">{{ $item->appointment_date }}</td>
                    <td class="fw-bold">{{ $item->appointment_time }}</td>

                    @if ($item->appointment_type == 0)
                    <td class="fw-bold">Covid Test</td>
                    @endif
                    @if ($item->appointment_type == 1)
                    <td class="fw-bold">Vaccination</td>
                    @endif

                    @if ($item->appointment_status == 0)
                    <td class="fw-bold text-danger">Pending</td>
                    @endif
                    @if ($item->appointment_status == 1)
                    <td class="fw-bold text-success">Approve</td>
                    @endif

                    @if ($item->appointment_status == 1)
                    <td><a href="" class="btn btn-dark disabled text-white">A</a></td>
                    @endif
                    @if ($item->appointment_status == 0)
                    <td><a href="{{url('/admin/approve_appointment')}}/{{$item->appointment_id}}" class="btn btn-primary text-white">A</a></td>
                    @endif

                    <td><a href="{{url('/admin/reject_appointment')}}/{{$item->appointment_id}}" class="btn btn-danger text-white">X</a></td>

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
