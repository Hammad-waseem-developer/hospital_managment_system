<!DOCTYPE html>
<html lang="zxx">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Admin</title>
<link rel="icon" href="{{url('img/logo.png" type="image/png')}}"/>

<link rel="stylesheet" href="{{url('css/bootstrap1.min.css')}}"/>

<link rel="stylesheet" href="{{url('vendors/themefy_icon/themify-icons.css')}}"/>

<link rel="stylesheet" href="{{url('vendors/swiper_slider/css/swiper.min.css')}}"/>

<link rel="stylesheet" href="{{url('vendors/select2/css/select2.min.css')}}"/>

<link rel="stylesheet" href="{{url('vendors/niceselect/css/nice-select.css')}}"/>

<link rel="stylesheet" href="{{url('vendors/owl_carousel/css/owl.carousel.css')}}"/>

<link rel="stylesheet" href="{{url('vendors/gijgo/gijgo.min.css')}}"/>

<link rel="stylesheet" href="{{url('vendors/font_awesome/css/all.min.css')}}"/>
<link rel="stylesheet" href="{{url('vendors/tagsinput/tagsinput.css')}}"/>

<link rel="stylesheet" href="{{url('vendors/datatable/css/jquery.dataTables.min.css')}}"/>
<link rel="stylesheet" href="{{url('vendors/datatable/css/responsive.dataTables.min.css')}}"/>
<link rel="stylesheet" href="{{url('vendors/datatable/css/buttons.dataTables.min.css')}}"/>

<link rel="stylesheet" href="{{url('vendors/text_editor/summernote-bs4.css')}}"/>

<link rel="stylesheet" href="{{url('vendors/morris/morris.css')}}"/>

<link rel="stylesheet" href="{{url('vendors/material_icon/material-icons.css ')}}"/>

<link rel="stylesheet" href="{{url('css/metisMenu.css')}}"/>

<link rel="stylesheet" href="{{url('css/style1.css ')}}"/>
<link rel="stylesheet" href="{{url('css/colors/default.css" id="colorSkinCSS')}}"/>
</head>
<body class="crm_body_bg">
    <section class="main_content dashboard_part">

        <div class="container-fluid g-0">
        <div class="row">
        <div class="col-lg-12 p-0">
        <div class="header_iner d-flex justify-content-between align-items-center">
        <div class="sidebar_icon d-lg-none">
        <i class="ti-menu"></i>
        </div>
        @if (session()->has('admin_name'))
        <h4 class="pe-5">Welcome : {{session()->get('admin_name')}}</h4>

        <a href="{{url('/admin/profile')}}">
            <img class="rounded-circle" src="/Admin_Images/{{session()->get('admin_image')}}" width="60px" alt="logo">
        </a>

        @endif
        @if (!session()->has('admin_name'))
        <h4>Please Login !</h4>
        @endif
    </div>
</div>
</div>
</div>

    </section>




<nav class="sidebar">
<div class="logo d-flex justify-content-between">
<a href="index.html"><img src="/Admin_Images/{{session()->get('admin_image')}}" class="rounded-circle" alt=""></a>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>
<ul id="sidebar_menu">
<li class="side_menu_title">
<span>Admin</span>
</li>
<li class="mm-active">
<a class="has-arrow" href="#" aria-expanded="false">

<img src="img/menu-icon/1.svg" alt="">
<span>Dashboard</span>
</a>

<ul>
<li><a class="" href="{{url('/admin')}}">Home</a></li>
</ul>
<ul>
<li><a class="" href="{{url('/admin/allpatient')}}">All Patient</a></li>
</ul>
<ul>
<li><a class="" href="{{url('/admin/reportcovid')}}">Covid Report</a></li>
</ul>
<ul>
<li><a class="" href="{{url('/admin/vaccine')}}">Vaccine List</a></li>
</ul>
<ul>
<li><a class="" href="{{url('/admin/patient_appointment')}}">Patient Appointment</a></li>
</ul>
<ul>
<li><a class="" href="{{url('/admin/patient_booking')}}">Patient Booking</a></li>
</ul>
<ul>
<li><a class="" href="{{url('/admin/approved_hospital')}}">Approved Hospital</a></li>
</ul>
<ul>
    @if (session()->has('admin_name'))
    <li><a class="text-danger fw-bold" href="{{url('/admin/logout')}}">Log Out</a></li>
    @endif
</ul>

</li>


</nav>

@yield('mycontant')


<section class="main_content dashboard_part">

    <div class="footer_part">
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <div class="footer_iner text-center">
    <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Dashboard</a></p>
    </div>
    </div>
    </div>
    </div>
    </div>

</section>











    <script src="{{url('js/jquery1-3.4.1.min.js')}}"></script>

    <script src="{{url('js/popper1.min.js')}}"></script>

<script src="{{url('js/bootstrap1.min.js')}}"></script>

<script src="{{url('js/metisMenu.js')}}"></script>

<script src="{{url('vendors/count_up/jquery.waypoints.min.js')}}"></script>

<script src="{{url('vendors/chartlist/Chart.min.js')}}"></script>

<script src="{{url('vendors/count_up/jquery.counterup.min.js')}}"></script>

<script src="{{url('vendors/swiper_slider/js/swiper.min.js')}}"></script>

<script src="{{url('vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>

<script src="{{url('vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{url('vendors/gijgo/gijgo.min.js')}}"></script>

<script src="{{url('vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{url('vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{url('vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{url('vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{url('vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{url('vendors/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{url('js/chart.min.js')}}"></script>

<script src="{{url('vendors/progressbar/jquery.barfiller.js')}}"></script>

<script src="{{url('vendors/tagsinput/tagsinput.js')}}"></script>

<script src="{{url('vendors/text_editor/summernote-bs4.js')}}"></script>
<script src="{{url('vendors/apex_chart/apexcharts.js')}}"></script>

<script src="{{url('js/custom.js')}}"></script>
<script src="{{url('vendors/apex_chart/bar_active_1.js')}}"></script>
<script src="{{url('vendors/apex_chart/apex_chart_list.js')}}"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/hospital-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2023 07:54:40 GMT -->
</html>
