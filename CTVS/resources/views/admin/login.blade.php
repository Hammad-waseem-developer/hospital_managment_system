@extends('admin.layout')
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
        <h3 class="mb-0">Admin Login</h3>
        </div>
        </div>
        <form action="{{ url('/admin/store') }}" method="POST">
            @csrf
        <div class="mb-3">
        <label class="form-label" for="exampleFormControlInput1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
        <label class="form-label" for="exampleFormControlInput1">Password</label>
        <input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
</section>



@endsection
