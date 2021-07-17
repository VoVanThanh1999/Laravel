<!DOCTYPE html>
<html>

<head>
    <title>Ecommerce Dynamic Web Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Language" content="en-US" />
    <meta name="description" content="Dynamic responsive Ecommerce free web template" />
    <meta name="keywords" content="Ecommerce template, Ecommerce free responsive template, free template" />
    <meta name="author" content="Maniruzzaman Akash">

    <!-- CSS links -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />


    <!-- Animate.css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/animate.css') }}" />

    <!-- Owl Carousel CSS-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />



    <!-- Mega navigation bar -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/webslidemenu.css') }}" />

    <!-- Main css link -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="icon" href="{{ asset('img/logo.png') }}" />

</head>

<body>
    <div class="wrapper">
        <!-- Header part  -->
        <div class="header" id="top">
            <!-- Start Top Header -->
            <div class="top-header">
                <div class="top-header-left pull-left">
                    <a href="products.html">Upto 50% Discount today</a>
                </div>

                <div class="clear"></div>
            </div>
            <!-- End Top Header -->
            <!-- Start Header Main, logo, search bar,cart -->
            <div class="header-bottom">
                <div class="container">
                    <div class="header-logo pull-left">
                        <a href="index.html">
                            <img src="{{ asset('img/logo.png') }}" alt="Your Shop Logo" class="img img-responsive">
                        </a>
                    </div>

                    <div class="header-search pull-left">
                        <form action="#" method="post">
                            <input type="search" name="Search" placeholder="Search by CMND" required="">
                            <button type="submit" class="btn btn-default" aria-label="Left Align">
                                <i class="fa fa-search" aria-hidden="true"> </i>
                            </button>
                        </form>
                    </div>
                    <!-- Cart Modal -->
                    <div id="cart-item" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;
                                    </button>
                                    <h4 class="modal-title">Cart Products</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Item Name</th>
                                                <th>Item Image</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Digital Camera</td>
                                                <td><img src="{{ asset('img/product-slide/product2.png') }}"
                                                        class="img img-responsive img-thumbnail" alt=""></td>
                                                <td>3</td>
                                                <td>200$</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Samsung Galaxy 7</td>
                                                <td><img src="images/product-slide/product3.png"
                                                        class="img img-responsive img-thumbnail" alt=""></td>
                                                <td>1</td>
                                                <td>500$</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" rowspan="5">
                                                    Total Price <span class="bold text-primary"
                                                        style="margin-left: 73%">800$</span>
                                                </td>
                                            </tr>
                                            <div class="clearfix"></div>
                                        </tbody>
                                    </table>
                                    <p class="text-right text-danger">There are <span style="font-weight: bold">2</span>
                                        more products in the cart. Click Checkout now to buy the items..</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel
                                    </button>
                                    <a href="cart.html" class="btn btn-yellow">Check Out</a>
                                </div>
                            </div>

                        </div>
                    </div> <!-- End Model -->

                </div>
            </div>
            <!-- End Header Main, logo, search bar,cart -->




            <div class="content-area">
                <div class="main-slider">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="img" src="{{ asset('img/slider/slider4.jpg') }}" alt="Chania">
                                <div class="carousel-caption">
                                    <div class="slide-header-text wow slideInLeft" data-wow-duration="1s"
                                        data-wow-delay="0s" data-wow-offset="10">Ông Park hoàn tất danh sách triệu tập ĐT Việt Nam tại VL World Cup 2022</div> <br />
                                   
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{ asset('img/slider/slider4.jpg') }}" alt="Chania">
                                <div class="carousel-caption">
                                    <div class="slide-header-text wow rotateIn" data-wow-duration="1s"
                                        data-wow-delay="0s" data-wow-offset="10">Ông Park hoàn tất danh sách triệu tập ĐT Việt Nam tại VL World Cup 2022
                                    </div> <br />
                                  
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{ asset('img/slider/slider4.jpg') }}" alt="Flower">
                                <div class="carousel-caption">
                                    <div class="slide-header-text wow rollIn" data-wow-duration="1s" data-wow-delay="0s"
                                        data-wow-offset="10">Ông Park hoàn tất danh sách triệu tập ĐT Việt Nam tại VL World Cup 2022</div> <br />
                                    {{-- <a href="products.html" class="btn btn-red slider-link wow zoomIn"
                                        data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">View Our All
                                        Products</a> --}}
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{ asset('img/slider/slider4.jpg') }}" alt="Flower">
                                <div class="carousel-caption">
                                    <div class="slide-header-text wow bounceInLeft" data-wow-duration="1s"
                                        data-wow-delay="0s" data-wow-offset="10">Ông Park hoàn tất danh sách triệu tập ĐT Việt Nam tại VL World Cup 2022</div> <br />
                                  
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>

                        </a>

                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                </div> <!-- End Main slider class -->



                <div class="latest-products">
                    <div class="container">
                        <h2 class="title-div wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s"
                            data-wow-offset="10">Danh sách các trận đấu</h2>
                        <div class="products">
                            <div class="row">
                                @foreach($v_matches as $v_match)
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="https://image2.tienphong.vn/w890/Uploaded/2021/neg-olyrlys/2021_05_26/av-2917.png"
                                                    class="img img-responsive" />
                                            </a>

                                            <div class="product-price">
                                                <a href="product_single.html">{{ $v_match->name }}</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html" class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Đặt vé
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div><!-- End Latest products[single] -->
                                @endforeach
                                <div class="clearfix"></div>
                            </div> <!-- End Latest products row-->
                            <a href="products.html" class="btn btn-blue btn-lg pull-right btn-more wow slideInRight"
                                data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                                <span>Xem thêm ...</span>
                            </a>
                            <div class="clear"></div>
                        </div> <!-- End products div-->
                    </div> <!-- End container latest products-->
                </div> <!-- End Latest products -->

                <div class="services-area">
                    <div class="services">
                        <div class="container">
                            <div class="ftr-toprow">
                                <div class="col-md-4 ftr-top-grids wow slideInLeft" data-wow-duration="1s"
                                    data-wow-delay="0s" data-wow-offset="10">
                                    <div class="ftr-top-left pull-left">
                                        <i class="fa fa-truck" aria-hidden="true"></i>
                                    </div>
                                    <div class="ftr-top-right">
                                        <h4>FREE DELIVERY</h4>
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
                                        <h4>CUSTOMER CARE</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo
                                            ac </p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="col-md-4 ftr-top-grids wow slideInRight" data-wow-duration="1s"
                                    data-wow-delay="0s" data-wow-offset="10">
                                    <div class="ftr-top-left pull-left">
                                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                    </div>
                                    <div class="ftr-top-right">
                                        <h4>GOOD QUALITY</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo
                                            ac </p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Service -->

            </div> <!-- End content Area class -->


           <!-- -------- START FOOTER 1 w/ COMPANY DESCRIPTION AND 4 COLS ------- -->
<footer class="footer py-9">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 mb-5 mb-lg-0">
          <h6 class="text-uppercase mb-2">Soft</h6>
          <p class="mb-4 pb-2">
              The next generation of design systems.
          </p>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-3">
            <span class="text-lg fab fa-facebook"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-3">
            <span class="text-lg fab fa-twitter"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-3">
            <span class="text-lg fab fa-instagram"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-3">
            <span class="text-lg fab fa-pinterest"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-3">
            <span class="text-lg fab fa-github"></span>
          </a>
        </div>
        <div class="col-md-2 col-6 ms-lg-auto mb-md-0 mb-4">
          <h6 class="text-sm">Company</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                About Us
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                Careers
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                Press
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                Blog
              </a>
            </li>
          </ul>
        </div>
  
        <div class="col-md-2 col-6 mb-md-0 mb-4">
          <h6 class="text-sm">Pages</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                Login
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                Register
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                Add list
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                Contact
              </a>
            </li>
          </ul>
        </div>
  
        <div class="col-md-2 col-6 mb-md-0 mb-4">
          <h6 class="text-sm">Legal</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                Terms
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                About Us
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                Team
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                Privacy
              </a>
            </li>
          </ul>
        </div>
  
        <div class="col-md-2 col-6 mb-md-0 mb-4">
          <h6 class="text-sm">Resources</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                Blog
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                Service
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                Product
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link text-secondary" href="https://www.creative-tim.com" target="_blank">
                Pricing
              </a>
            </li>
          </ul>
        </div>
      </div>
      <hr class="horizontal dark mt-lg-5 mt-4 mb-sm-4 mb-1">
      <div class="row">
        <div class="col-8 mx-lg-auto text-lg-center">
          <p class="text-sm text-secondary">
            Copyright © <script>document.write(new Date().getFullYear())</script> Soft by Creative Tim.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 1 w/ COMPANY DESCRIPTION AND 4 COLS ------- -->
            <div class="footer-bottom">
                <p class="footer-credit">
                    <script type="text/javascript">
                        document.write(new Date().getFullYear())
                    </script> - All rights reserved <a href="index.html">Your shop</a> | Designed by <a
                        href="https://maniruzzaman-akash.blogspot.com"> Maniruzzaman Akash </a>
                </p>
            </div>
            <!--End Footer bottom -->

            <div class="scroll">
                <a href="#top" class="scroll-to-top hidden">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>


        </div> <!-- End wrapper -->



        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

        <script type="text/javascript">
            jQuery(document).ready(function() {
                // alert('test message');

                // var bd_phone_pattern = /^(?:\+88|01)?\d{11}$/;
                // var contact1 = "01951233084";
                // var contact2 = "+8801951233084";
                // alert(bd_phone_pattern.test(contact1));
                // if (bd_phone_pattern.test(contact1)) {
                //     alert('Regexp Has Matched');
                // }else{
                //     alert('Regexp Hasn\'t Matched');
                // }
            });
        </script>



        <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>

        <script src="{{ asset('js/wow.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/webslidemenu.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
