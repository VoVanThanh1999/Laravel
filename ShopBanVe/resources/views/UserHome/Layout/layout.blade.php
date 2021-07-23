<!DOCTYPE html>
<html>

<head>
    <title>HomePage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Language" content="en-US" />
    <meta name="description" content="Dynamic responsive Ecommerce free web template" />
    <meta name="keywords" content="Ecommerce template, Ecommerce free responsive template, free template" />
    <meta name="author" content="Maniruzzaman Akash">

    <!-- CSS links -->
    {{-- <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <!-- Animate.css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <!-- Owl Carousel CSS-->
    {{-- <link type="text/css" rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- Mega navigation bar -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/webslidemenu.css') }}" />
    <!-- Main css link -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="icon" href="{{ asset('images/logo.png') }}" />
</head>

<body>
    <div class="wrapper">
        <!-- Header part  -->
        <div class="header" id="top">
            @include('UserHome.Layout.header')
            <div class="content-area">
                @yield('slideshow')
                @yield('content')
                @yield('cart')
                @yield('vieworder')
                {{-- <div class="services-area">
                    <div class="services">
                        <div class="container">
                            <div class="ftr-toprow">
                                <div class="col-md-4 ftr-top-grids wow slideInLeft" data-wow-duration="1s"
                                    data-wow-delay="0s" data-wow-offset="10">
                                    <div class="ftr-top-left pull-left">
                                        <i class="fa fa-truck" aria-hidden="true"></i>
                                    </div>
                                    <div class="ftr-top-right">
                                        <h4>Miễn phí vận chuyển</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo
                                            ac </p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="col-md-4 ftr-top-grids wow slideInUp" data-wow-duration="1s"
                                    data-wow-delay="0s" data-wow-offset="10">
                                    <div class="ftr-top-left pull-left">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                    <div class="ftr-top-right">
                                        <h4>Dịch vụ an toàn</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo
                                            ac </p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="col-md-4 ftr-top-grids wow slideInRight" data-wow-duration="1s"
                                    data-wow-delay="0s" data-wow-offset="10">
                                    <div class="ftr-top-left pull-left">
                                        <i class="fa fa-clock" aria-hidden="true"></i>
                                    </div>
                                    <div class="ftr-top-right">
                                        <h4>Đảm bảo thời gian</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo
                                            ac </p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Service --> --}}
            </div> <!-- End content Area class -->
            @include('UserHome.Layout.footer')
            <div class="scroll">
                <a href="#top" class="scroll-to-top hidden">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div> <!-- End wrapper -->
            <!-- Scripts -->
            <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
            <script src="js/wow.min.js"></script>
            <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/webslidemenu.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

</body>

</html>
