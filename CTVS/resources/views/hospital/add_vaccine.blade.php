@extends('hospital.h_layout')
@section('mycontant')
    <br />
    <br />
    <br />
    <br />
    <br />
    <section class="main_content dashboard_part">
        <div class="white_box mb_30">
            <div class="box_header ">
                <div class="main-title">
                    <h3 class="mb-0">Add Vaccine</h3>
                </div>
            </div>

            <form action="{{ url('/hospital/vaccine_store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Vaccine Name</label>
                    <input type="text" name="name" autocomplete="off" class="form-control" id="exampleFormControlInput1"
                        placeholder="Enter Vaccine Name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="1">Vaccine Next Available Date</label>
                    <input type="date" name="date" class="form-control" id="1"
                        placeholder="Enter Next Available Date">
                </div>
                <div class="mb-3">
                    <select class="form-control" name="stock">
                        <option selected disabled>--- Select Status ---</option>
                        <option value="1">In Stock</option>
                        <option value="0">Out Stock</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="2">Price</label>
                    <input type="number" name="price" class="form-control" id="2"
                        placeholder="Enter Price">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection()
