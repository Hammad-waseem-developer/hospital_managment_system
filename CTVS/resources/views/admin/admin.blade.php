@extends('admin.layout')
@section('mycontant')
    <section class="main_content dashboard_part">


        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="single_element">
                            <div class="quick_activity">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick_activity_wrap">
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="img/icon/hos.png" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">{{ $hospital_count }}</span> </h3>
                                                    <p>Hospital</p>
                                                </div>
                                            </div>
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="img/icon/wheel.svg" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">{{ $patient_count }}</span> </h3>
                                                    <p>Patients</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="main_content_iner ">
                        <div class="container-fluid p-0">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="QA_section">
                                        <div class="white_box_tittle list_header">
                                            <h4>Hospitals</h4>
                                        </div>





                                        <table class="table lms_table_active">
                                            <thead class="bg-primary">
                                                <tr>
                                                    <th class="text-warning fw-bold" scope="col">ID</th>
                                                    <th class="text-warning fw-bold" scope="col">Name</th>
                                                    <th class="text-warning fw-bold" scope="col">Email</th>
                                                    <th class="text-warning fw-bold" scope="col">Address</th>
                                                    <th class="text-warning fw-bold" scope="col">City</th>
                                                    {{-- <th class="text-warning fw-bold" scope="col">Image</th> --}}
                                                    <th class="text-warning fw-bold" scope="col">Status</th>
                                                    <th class="text-warning fw-bold" scope="col">Approve</th>
                                                    <th class="text-warning fw-bold" scope="col">X</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($hospital as $item)
                                                    <tr>
                                                        <th class="fw-bold" scope="row"> <a href="#"
                                                                class="question_content">{{ $item->hospital_id }}</a></th>
                                                        <td class="fw-bold">{{ $item->hospital_name }}</td>
                                                        <td class="fw-bold">{{ $item->hospital_email }}</td>
                                                        <td class="fw-bold">{{ $item->hospital_address }}</td>
                                                        <td class="fw-bold">{{ $item->hospital_city }}</td>
                                                        {{-- <td><div class="student_list_img mr_20">
                                <img src="img/patient/pataint.png" alt="" srcset="">
                                </div></td> --}}

                                                        @if ($item->hospital_approval_status == 0)
                                                            <td><a href="#"
                                                                    class="status_btn btn-sm bg-danger">Pending</a></td>
                                                        @endif
                                                        @if ($item->hospital_approval_status == 1)
                                                            <td><a href="#" class="status_btn btn btn-sm">Approve</a></td>
                                                        @endif


                                                        @if ($item->hospital_approval_status == 1)
                                                            <td><a href=""
                                                                    class="btn btn-sm btn-dark disabled">Approve</a></td>
                                                        @endif
                                                        @if ($item->hospital_approval_status == 0)
                                                            <td><a href="{{ url('/admin/approve_hospital') }}/{{ $item->hospital_id }}"
                                                                    class="btn btn-primary btn-sm">Approve</a></td>
                                                        @endif

                                                        <td><a href="{{ url('/admin/reject_hospital') }}/{{ $item->hospital_id }}"
                                                                class="btn btn-danger btn-sm">X</a></td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






    </section>
@endsection
