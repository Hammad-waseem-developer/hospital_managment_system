@extends('hospital.h_layout')
@section('mycontant')
<br/>
<br/>
<br/>
<br/>
<br/>
<section class="main_content dashboard_part">
    <div class="white_box mb_30">
        <div class="box_header ">
        <div class="main-title">
        <h3 class="mb-0">Update Vaccine</h3>
        </div>
        </div>

        <form action="{{ url('/hospital/vaccine_update') }}/{{$vaccine->vac_av_id}}" method="POST">
            @csrf

        <div class="mb-3">
        <label class="form-label" for="exampleFormControlInput1">Vaccine Name</label>
        <input type="text" name="name" value="{{$vaccine->vaccine_name}}" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
        <label class="form-label" for="1">Next Available Date</label>
        <input type="date" name="date" value="{{$vaccine->next_available_date}}" class="form-control" id="1">
        </div>

        <select class="form-control"  name="stock">

            @if ($vaccine->stock == 1)
            <option class="" value="1" disabled selected>In Stock</option>
            @endif

            @if ($vaccine->stock == 0)
            <option class="" value="0" disabled selected>Out Stock</option>
            @endif

            <option value="1">In Stock</option>
            <option value="0">Out Stock</option>

        </select>
        <div class="mb-3">
            <label class="form-label" for="2">Vaccination Price</label>
            <input type="number" name="price" value="{{$vaccine->vaccination_price}}" class="form-control" id="2">
            </div>

        <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
</section>

@endsection
