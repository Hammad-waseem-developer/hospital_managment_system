@extends('hospital.h_layout')
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
    <h4>All Patient Profile</h4>
    
    </div>
    <div class="QA_table mb_30">

        <table class="table lms_table_active">
            <thead class="bg-primary">
            <tr>
                <th class="text-warning fw-bold" scope="col">Name</th>
                {{-- <th class="text-warning fw-bold but" scope="col">Email</th> --}}
                <th class="text-warning fw-bold but" scope="col">Age</th>
                <th class="text-warning fw-bold" scope="col">Gender</th>
                <th class="text-warning fw-bold" scope="col">Address</th>
                <th class="text-warning fw-bold" scope="col">City</th>
                <th class="text-warning fw-bold" scope="col">Type</th>
                <th class="text-warning fw-bold" scope="col">Phone #</th>
                <th class="text-warning fw-bold but" scope="col">Create Test</th>
                <th class="text-warning fw-bold" scope="col">Mail</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($patient as $item)

                <tr>
                    {{-- <td><div class="student_list_img mr_20">
                        <img src="img/patient/pataint.png" alt="" srcset="">
                        </div></td> --}}
                    <td class="fw-bold">{{ $item->patient_name }}</td>
                    {{-- <td class="fw-bold but">{{ $item->patient_email }}</td> --}}
                    <td class="fw-bold">{{ $item->patient_age }}</td>
                    <td class="fw-bold">{{ $item->patient_gender }}</td>
                    <td class="fw-bold">{{ $item->patient_address }}</td>
                    <td class="fw-bold">{{ $item->patient_city }}</td>

                    @if ($item->appointment_type == 1)
                    <td class="fw-bold">Vaccine</td>
                    @endif
                    @if ($item->appointment_type == 0)
                    <td class="fw-bold">Covid</td>
                    @endif

                    <td class="fw-bold">{{ $item->patient_phone_no }}</td>

                    @if ($item->appointment_type == 1)
                    <td class="fw-bold ">
                        <a class="text-white" href="{{url('/hospital/create_vaccine_status')}}/{{$item->appointment_id}}">
                        <button class="btn btn-sm btn-primary">Vaccine</button>
                        </a>
                    </td>
                    @endif
                    @if ($item->appointment_type == 0)
                    <td class="fw-bold">
                        <a class="text-white" href="{{url('/hospital/create_test')}}/{{$item->appointment_id}}">
                        <button class="btn  btn-sm btn-primary">&nbsp; Covid &nbsp;</button>
                        </a>
                    </td>
                    @endif

                    <td>
                        <a class="btn btn-sm btn-primary text-white" href="{{url('/hospital/send_mail')}}/{{$item->patient_id}}">Mail</a>
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
