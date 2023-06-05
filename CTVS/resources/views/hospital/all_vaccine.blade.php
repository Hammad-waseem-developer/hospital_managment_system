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
    <h4>All Vaccines</h4>
    
    </div>
    <div class="QA_table mb_30">

        <table class="table lms_table_active">
            <thead class="bg-primary">
            <tr>
                <th class="text-warning fw-bold" scope="col">ID</th>
                <th class="text-warning fw-bold" scope="col">Vac Name</th>
                {{-- <th class="text-warning fw-bold" scope="col">Hospital</th> --}}
                <th class="text-warning fw-bold" scope="col">Next Available Date</th>
                <th class="text-warning fw-bold" scope="col">Stock</th>
                <th class="text-warning fw-bold" scope="col">Price</th>
                <th class="text-warning fw-bold" scope="col">Update</th>
                <th class="text-warning fw-bold" scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($vaccine as $item)

                <tr>
                    <th class="fw-bold" scope="row"> <a href="#" class="question_content">{{ $item->vac_av_id }}</a></th>
                    <td class="fw-bold">{{ $item->vaccine_name }}</td>
                    {{-- <td class="fw-bold">{{ $item->hospital_id }}</td> --}}
                    <td class="fw-bold">{{ $item->next_available_date }}</td>

                    @if ($item->stock == 0)
                    <td class="fw-bold text-danger">Out Stock</td>
                    @endif
                    @if ($item->stock == 1)
                    <td class="fw-bold text-success">In Stock</td>
                    @endif

                    @if ($item->vaccination_price >0)
                    <td class="fw-bold">{{ $item->vaccination_price }}</td>
                    @endif
                    @if ($item->vaccination_price == 0)
                    <td class="fw-bold text-success">Free</td>
                    @endif

                    <td>
                        <button class="btn btn-primary btn-sm">
                            <a class="text-white" href="{{url('/hospital/edit_vaccine')}}/{{$item->vac_av_id}}">Update</a>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger btn-sm">
                            <a class="text-white" href="{{url('/hospital/vaccine_delete')}}/{{$item->vac_av_id}}">Delete</a>
                        </button>
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
