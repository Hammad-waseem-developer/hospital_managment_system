@extends('Frontend.layout')
@section('mycontent')
<section class="hero-wrap hero-wrap-2" style="background-image: url('/front_design/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
    <div class="col-md-9 ftco-animate text-center">
        <form action="">
            <input type="search" name="search" placeholder="Search Hospital By Name Or City ......" value="{{$search}}"  id="search-bar" class="hospital-input">

            <button for="search-bar" class="bt1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </form>

    </div>
    </div>
    </div>
    </section>

    <section class="ftco-section">
    <div class="container">
    <div class="row" style="display: flex !important; justify-content: center !important;">

        @foreach ($hospital as $item)


        <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="staff">
    <div class="img-wrap d-flex align-items-stretch">
    <div class="img align-self-stretch" style="background-image: url(/Hospital_Images/{{$item->hospital_pic}});"></div>
    </div>
    <div class="text pt-3 text-center">
    <h3>{{$item->hospital_name}}</h3>
    <span class="position mb-2">{{$item->hospital_address}}</span>
    <div class="faded">
    <p>{{$item->hospital_city}}</p>
    <ul class="ftco-social text-center">
    <li class="ftco-animate"><a href="{{url('/web/more_info')}}/{{$item->hospital_id}}">More Info</a></li>
    {{-- <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> --}}
    </ul>
    </div>
    </div>
</div>
</div>

@endforeach


    </div>
    </div>
    </section>
@endsection
