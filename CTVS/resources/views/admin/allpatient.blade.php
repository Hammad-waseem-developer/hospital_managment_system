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
    <h4>All Patient Profile</h4>
    {{-- <div class="box_right d-flex lms_block">
    <div class="serach_field_2">
    <div class="search_inner">
    <form Active="#">
    <div class="search_field">
    <input type="text" placeholder="Search content here...">
    </div>
    <button type="submit"> <i class="ti-search"></i> </button>
    </form>
    </div>
    </div>
    <div class="add_button ms-2">
    <a href="#" data-bs-toggle="modal" data-bs-target="#addcategory" class="btn_1">Add New</a>
    </div>
    </div> --}}
    </div>

    <div class="QA_table mb_30">

        <table class="table lms_table_active">
            <thead class="bg-primary">
            <tr>
                <th class="text-warning fw-bold" scope="col">ID</th>
                <th class="text-warning fw-bold" scope="col">Name</th>
                <th class="text-warning fw-bold" scope="col">Email</th>
                <th class="text-warning fw-bold" scope="col">Age</th>
                <th class="text-warning fw-bold" scope="col">Gender</th>
                <th class="text-warning fw-bold" scope="col">Address</th>
                <th class="text-warning fw-bold" scope="col">City</th>
                <th class="text-warning fw-bold" scope="col">Phone #</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($patient as $item)

                <tr>
                    <th class="fw-bold" scope="row"> <a href="#" class="question_content">{{ $item->patient_id }}</a></th>
                    {{-- <td><div class="student_list_img mr_20">
                        <img src="img/patient/pataint.png" alt="" srcset="">
                        </div></td> --}}
                    <td class="fw-bold">{{ $item->patient_name }}</td>
                    <td class="fw-bold">{{ $item->patient_email }}</td>
                    <td class="fw-bold">{{ $item->patient_age }}</td>
                    <td class="fw-bold">{{ $item->patient_gender }}</td>
                    <td class="fw-bold">{{ $item->patient_address }}</td>
                    <td class="fw-bold">{{ $item->patient_city }}</td>
                    <td class="fw-bold">{{ $item->patient_phone_no }}</td>

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
