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
    <h4>All Vaccines</h4>
   
    </div>
    <div class="QA_table mb_30">

        <table class="table lms_table_active">
            <thead class="bg-primary">
            <tr>
                <th class="text-warning fw-bold" scope="col">ID</th>
                <th class="text-warning fw-bold" scope="col">Vac Name</th>
                <th class="text-warning fw-bold" scope="col">Hospital</th>
                <th class="text-warning fw-bold" scope="col">Next Available Date</th>
                <th class="text-warning fw-bold" scope="col">Stock</th>
                <th class="text-warning fw-bold" scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($vaccine as $item)

                <tr>
                    <th class="fw-bold" scope="row"> <a href="#" class="question_content">{{ $item->vac_av_id }}</a></th>
                    <td class="fw-bold">{{ $item->vaccine_name }}</td>
                    <td class="fw-bold">{{ $item->hospital_name }}</td>
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
