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
        <h3 class="mb-0">Update Recommendation</h3>
        </div>
        </div>

        <form action="{{ url('/hospital/recom_update') }}/{{$rec->test_id}}" method="POST">
            @csrf
        <div class="mb-3">
        <label class="form-label" for="exampleFormControlInput1">Email address</label>
        <input type="text" name="rec" value="{{$rec->Recommendation}}" class="form-control" id="exampleFormControlInput1">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
</section>

@endsection
