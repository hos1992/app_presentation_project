<!DOCTYPE html>

<html lang="en-US">

<!-- Mirrored from vcv.moltaqa.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jan 2021 21:05:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>تطبيق فيديو سي في </title>
    <meta name="description" content="Pixa - App Landing Page Pack with Page builder">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/user/images/settings/1608234656-logo-new.png">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="/assets/user/website/assets/bootstrap/css/bootstrap.min.css" type="text/css"
          media="all">
    <link rel="stylesheet" href="/assets/user/website/assets/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/assets/user/website/assets/css/et-line.css" type="text/css" media="all">
    <link rel="stylesheet" href="/assets/user/website/assets/css/magnific-popup.css" type="text/css" media="all">
    <link rel="stylesheet" href="/assets/user/website/assets/css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" href="/assets/user/website/assets/css/hover-min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/assets/user/website/assets/css/style.css" type="text/css" media="all">

    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="/assets/user/website/assets/css/style-rtl.css" type="text/css" media="all">
        @endif
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
<body>
<div class="preloader-outer">
    <div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar"></div>
</div>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" class=
            "navbar-toggle collapsed" data-target="#navbar" data-toggle=
                    "collapse" type="button"><span class="sr-only">Toggle
            navigation</span> <span class="icon-bar"></span> <span class=
                                                                   "icon-bar"></span> <span class="icon-bar"></span>
            </button>

            <!-- Logo -->
            <a class="navbar-brand" href="#section-1-1">
                <img src="/assets/user/images/settings/1608234656-logo-new.png" alt="homepage" class="light-logo"/>
            </a>

            <!-- Logo end -->

        </div>
        <div class="navbar-collapse collapse" id="navbar">

            <div class="navbar-right">

                <ul class="nav navbar-nav">
                    <li>
                        <a href="#section-1-1">@lang('trans.home')</a>
                    </li>
                    <li>
                        <a href="#section-1-2">@lang('trans.how it work')</a>
                    </li>
                    <li>
                        <a href="#section-1-12">@lang('trans.contact us')</a>
                    </li>
                </ul>

                <!-- Menu end -->

                <!-- Social Icons -->
                <ul class="nav navbar-nav social">
                    <li><a href="{{ $shared['settings']['facebook_link'] ?? '#' }}" target="_blank" class="external"><i
                                class="fa fa-facebook"
                                aria-hidden="true"></i></a></li>
                    <li><a href="{{ $shared['settings']['twitter_link'] ?? '#' }}" target="_blank" class="external"><i
                                class="fa fa-twitter"
                                aria-hidden="true"></i></a></li>

                    @if(app()->getLocale() == 'ar')

                    <li><a href="/set-locale/en" class="external">EN</a></li>

                    @else

                        <li><a href="/set-locale/ar" class="external">عربى</a></li>

                    @endif

                </ul>

            </div>

        </div><!--/.nav-collapse -->
    </div>
</nav>


@yield('content')

<footer id="footer-1" class="footer">
    <div class="container">

        <!-- footer menu -->
        <ul class="footer-menu">
            <li>
                <a href="#section-1-1">@lang('trans.home')</a>
            </li>
            <li>
                <a href="#section-1-2"> @lang('trans.how it work')</a>
            </li>
            <li>
                <a href="#section-1-12"> @lang('trans.contact us') </a>
            </li>
            <li>
                @if(app()->getLocale() == 'ar')
                    <a href="/set-locale/en">English</a>

                @else
                    <a href="/set-locale/ar">عربى</a>

                @endif
            </li>
        </ul>
        <!-- copyright text -->
        <span class="copyright">All Rights Received 2020 <br/>
        <a href="https://moltaqa.net/">Alkayan elaseel - moltaqa tech</a></span>

        <!-- social icons -->
        <ul class="social-icons">
            <li><a href="{{ $shared['settings']['facebook_link'] ?? '#' }}"><i class="fa fa-facebook"
                                                                               aria-hidden="true"></i></a></li>
            <li><a href="{{ $shared['settings']['twitter_link'] ?? '#' }}"><i class="fa fa-twitter"
                                                                              aria-hidden="true"></i></a></li>
            <li><a href="{{ $shared['settings']['instagram_link'] ?? '#' }}"><i class="fa fa-instagram"
                                                                                aria-hidden="true"></i></a></li>
        </ul>

    </div>
</footer>
<!-- Section footer 1 end -->

<!-- SCRIPTS -->
<script type="text/javascript" src="/assets/user/website/assets/js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="/assets/user/website/assets/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="/assets/user/website/assets/js/jquery.single-page.min.js"></script>
<script type="text/javascript" src="/assets/user/website/assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/assets/user/website/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/user/website/assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="/assets/user/website/assets/js/jquery.ajaxchimp.js"></script>
<script type="text/javascript" src="/assets/user/website/assets/js/countdown.js"></script>
<script type="text/javascript" src="/assets/user/website/assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="/assets/user/website/assets/js/slick.min.js"></script>
<script type="text/javascript" src="/assets/user/website/assets/js/scrollreveal.min.js"></script>
<script type="text/javascript" src="/assets/user/website/assets/js/classie.js"></script>
<script type="text/javascript" src="/assets/user/website/assets/js/custom.js"></script>
</body>

<!-- Mirrored from vcv.moltaqa.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jan 2021 23:06:27 GMT -->
</html>
