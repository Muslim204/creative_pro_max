
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Management Admin</title>

    <link rel="icon" href="img/mini_logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('backend/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/themify-icons.css')}}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/nice-select.css')}}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/owl.carousel.css')}}" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{asset('backend/css/gijgo.min.css')}}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/css/tagsinput.css')}}" />

    <!-- date picker -->
     <link rel="stylesheet" href="{{asset('backend/css/date-picker.css')}}" />

     <link rel="stylesheet" href="{{asset('backend/css/vectormap-2.0.2.css')}}" />
     
     <!-- scrollabe  -->
     <link rel="stylesheet" href="{{asset('backend/css/scrollable.css')}}" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/css/buttons.dataTables.min.css')}}" />
    <!-- text editor css -->
    <link rel="stylesheet" href="{{asset('backend/css/summernote-bs4.css')}}" />
    <!-- morris css -->
    <link rel="stylesheet" href="{{asset('backend/css/morris.css')}}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{asset('backend/css/material-icons.css')}}" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{asset('backend/css/metisMenu.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/default.css')}}" id="colorSkinCSS">
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}" />
</head>
<body class="crm_body_bg">
    


<!-- main content part here -->
 
 <!-- sidebar  -->
 <nav class="sidebar">
    <div class="logo d-flex justify-content-">
        <a class="large_logo" href="index.html"><img src="{{asset('backend/image/creative.png')}}" alt="" style="width: 100px;"></a>
        <a class="small_logo" href="index.html"><img src="{{asset('backend/image/creative.png')}}" alt="" style="width: 50%;"></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                   <i class="fa-solid fa-table-columns"></i>
                </div>
                <div class="nav_title">
                    <span>User Management </span>
                </div>
            </a>
        </li>

         <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                  <i class="fa-solid fa-image"></i>
                </div>
                <div class="nav_title">
                    <span>Bannar</span>
                </div>
            </a>
            <ul>
              <li><a href="{{route('bannar.create')}}">Add Bannar</a></li>
              <li><a href="{{route('bannar.index')}}">All Bannar</a></li>
              <li><a href="{{route('bannar.trash')}}">All Trash Bannar</a></li>
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                  <i class="fa-solid fa-image"></i>
                </div>
                <div class="nav_title">
                    <span>Seminar</span>
                </div>
            </a>
            <ul>
              <li><a href="{{route('seminar.create')}}">Add Seminar</a></li>
              <li><a href="{{route('seminar.index')}}">All Seminar</a></li>
            </ul>
        </li>
      </ul>
</nav>
 <!--/ sidebar  -->
<

<section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0 ">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="line_icon open_miniSide d-none d-lg-block h5">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <div class="serach_field-area d-flex align-items-center">
                        <div class="search_inner">
                            <form action="empty_page.html#">
                                <div class="search_field">
                                    <input type="text" placeholder="Search">
                                </div>
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i> </button>
                            </form>
                        </div>
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                        
                          
                        </div>
                        <div class="profile_info">
                            <img src="https://avatars.dicebear.com/api/adventurer/{{Auth::user()->name}}.svg" alt="#" style="width: 100px;">
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <h5>{{Auth::user()->name}}</h5>
                                </div>
                                <div class="profile_info_details">
                                    <a class="#" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ menu  -->
        <!--missing parts-->
        @yield('content')

      
       

</section>


    <!-- footer part -->
<section>
<div class="footer_part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_iner text-center">
                    <p>2020 © Influence - Designed by <a href="empty_page.html#"> <i class="ti-heart"></i> </a><a href="empty_page.html#"> DashboardPack</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- main content part end -->

<!-- ### CHAT_MESSAGE_BOX   ### -->




<!-- footer  -->
<script src="{{asset('backend/js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js --><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>
<script src="{{asset('backend/js/popper.min.js')}}"></script>
<!-- bootstarp js -->
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<!-- sidebar menu  -->
<script src="{{asset('backend/js/metisMenu.js')}}"></script>
<!-- waypoints js -->
<script src="{{asset('backend/js/jquery.waypoints.min.js')}}"></script>
<!-- waypoints js -->
<script src="{{asset('backend/js/Chart.min.js')}}"></script>
<!-- counterup js -->
<script src="{{asset('backend/js/jquery.counterup.min.js')}}"></script>

<!-- nice select -->
<script src="{{asset('backend/js/jquery.nice-select.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('backend/js/owl.carousel.min.js')}}"></script>

<!-- responsive table -->
<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('backend/js/jszip.min.js')}}"></script>
<script src="{{asset('backend/js/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/js/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/js/buttons.print.min.js')}}"></script>

<!-- datepicker  -->
<script src="{{asset('backend/js/datepicker.js')}}"></script>
<script src="{{asset('backend/js/datepicker.en.js')}}"></script>
<script src="{{asset('backend/js/datepicker.custom.js')}}"></script>

<script src="{{asset('backend/js/chart.min.js')}}"></script>
<script src="{{asset('backend/js/roundedBar.min.js')}}"></script>

<!-- progressbar js -->
<script src="{{asset('backend/js/jquery.barfiller.js')}}"></script>
<!-- tag input -->
<script src="{{asset('backend/js/tagsinput.js')}}"></script>
<!-- sweet alert 2 js-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- text editor js -->
<script src="{{asset('backend/js/custom.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('sweet_alert')
</body>
</html>

