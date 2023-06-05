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
        <h3 class="mb-0">Update Profile</h3>
        </div>
        </div>
        <form action="{{ url('/admin/profile_update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$user->password}}" name="password">
        <div class="mb-3">
        <label class="form-label" for="exampleFormControlInput1">Name</label>
        <input type="name" name="name" class="form-control" id="exampleFormControlInput1" value="{{$user->name}}">
        </div>
        <div class="mb-3">
        <label class="form-label" for="exampleFormControlInput1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{$user->email}}">
        </div>

        <img src="{{url('/')}}/Admin_Images/{{$user->image}}" width="20px" alt="">
        <input type="hidden" value="{{$user->image}}" name="old_img">

        <div class="mb-3">
        <label class="form-label" for="exampleFormControlInput1">Upload Image</label>
        <input type="file" name="img" class="form-control" id="exampleFormControlInput1">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
</section>



@endsection
