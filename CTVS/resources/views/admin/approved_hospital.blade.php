@extends('admin.layout')
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
                                <h4>Approved Hospitals</h4>
                                
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th class="text-warning fw-bold" scope="col">ID</th>
                                            <th class="text-warning fw-bold" scope="col">Name</th>
                                            <th class="text-warning fw-bold" scope="col">Email</th>
                                            <th class="text-warning fw-bold" scope="col">Address</th>
                                            <th class="text-warning fw-bold" scope="col">City</th>
                                            <th class="text-warning fw-bold" scope="col">Image</th>
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
                                                <td>
                                                    <div class="student_list_img mr_20">
                                                        <img src="/Hospital_Images/{{$item->hospital_pic}}" alt="" srcset="">
                                                    </div>
                                                </td>

                                                <td><a href="{{ url('/admin/reject_hospital') }}/{{ $item->hospital_id }}"
                                                        class="btn btn-danger text-white">X</a></td>
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
