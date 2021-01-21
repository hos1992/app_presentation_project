
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bigdeal admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Bigdeal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">

    <title>لوحة التحكم</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/assets/css/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/chartist.css">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/vector-map.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/admin.css">

    <style>
        .error {
            color: red;
            display: block;
            font-size: 10px;
            margin: 5px;
            text-align: right;
        }

        h5 {
            text-align: right;
        }
    </style>
</head>

<body class="rtl">

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row">

            <div class="nav-right col">
                <ul class="nav-menus">



                    <li>

                    </li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="https://via.placeholder.com/300.png

C/O https://placeholder.com/" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
{{--                            <li><a href="#">Profile<span class="pull-right"><i data-feather="user"></i></span></a></li>--}}
{{--                            <li><a href="#">Inbox<span class="pull-right"><i data-feather="mail"></i></span></a></li>--}}
{{--                            <li><a href="#">Taskboard<span class="pull-right"><i data-feather="file-text"></i></span></a></li>--}}
                            <li><a href="/admin/logout">تسجيل خروج<span class="pull-right"><i data-feather="user"></i></span></a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
            @include('admin.layout.side_menu')
        <!-- Page Sidebar Ends-->



        <div class="page-body">

            <!-- Container-fluid starts-->
                @yield('page_head')
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- Container-fluid Ends-->

        </div>

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2019 © Bigdeal All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->
    </div>

</div>

<!-- latest jquery-->
<script src="/assets/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="/assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
{{--<script src="/assets/js/sidebar-menu.js"></script>--}}

{{--<!--chartist js-->--}}
{{--<script src="/assets/js/chart/chartist/chartist.js"></script>--}}


{{--<!-- lazyload js-->--}}
{{--<script src="/assets/js/lazysizes.min.js"></script>--}}

{{--<!--copycode js-->--}}
{{--<script src="/assets/js/prism/prism.min.js"></script>--}}
{{--<script src="/assets/js/clipboard/clipboard.min.js"></script>--}}
{{--<script src="/assets/js/custom-card/custom-card.js"></script>--}}

{{--<!--counter js-->--}}
{{--<script src="/assets/js/counter/jquery.waypoints.min.js"></script>--}}
{{--<script src="/assets/js/counter/jquery.counterup.min.js"></script>--}}
{{--<script src="/assets/js/counter/counter-custom.js"></script>--}}

{{--<!--Customizer admin-->--}}
{{--<script src="/assets/js/admin-customizer.js"></script>--}}

{{--<!--map js-->--}}
{{--<script src="/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>--}}
{{--<script src="/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>--}}

{{--<!--apex chart js-->--}}
{{--<script src="/assets/js/chart/apex-chart/apex-chart.js"></script>--}}
{{--<script src="/assets/js/chart/apex-chart/stock-prices.js"></script>--}}

{{--<!--chartjs js-->--}}
{{--<script src="/assets/js/chart/flot-chart/excanvas.js"></script>--}}
{{--<script src="/assets/js/chart/flot-chart/jquery.flot.js"></script>--}}
{{--<script src="/assets/js/chart/flot-chart/jquery.flot.time.js"></script>--}}
{{--<script src="/assets/js/chart/flot-chart/jquery.flot.categories.js"></script>--}}
{{--<script src="/assets/js/chart/flot-chart/jquery.flot.stack.js"></script>--}}
{{--<script src="/assets/js/chart/flot-chart/jquery.flot.pie.js"></script>--}}
{{--<!--dashboard custom js-->--}}
{{--<script src="/assets/js/dashboard/default.js"></script>--}}

{{--<!--right sidebar js-->--}}
{{--<script src="/assets/js/chat-menu.js"></script>--}}

{{--<!--height equal js-->--}}
{{--<script src="/assets/js/equal-height.js"></script>--}}

{{--<!-- lazyload js-->--}}
{{--<script src="/assets/js/lazysizes.min.js"></script>--}}

{{--<!--script admin-->--}}
<script src="/assets/js/admin-script.js"></script>

@stack('script')

</body>
</html>
