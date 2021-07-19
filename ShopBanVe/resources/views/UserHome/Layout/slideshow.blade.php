@section('slideshow')
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
                <img src="{{ asset('images/slider/slider1.jpg') }}" alt="Chania">
                <div class="carousel-caption">
                    <div class="slide-header-text wow slideInLeft" data-wow-duration="1s"
                        data-wow-delay="0s" data-wow-offset="10"></div> <br />
                    <a href="products.html" class="btn btn-red slider-link wow lightSpeedIn"
                        data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> </a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('images/slider/slider2.jpg') }}" alt="Chania">
                <div class="carousel-caption">
                    <div class="slide-header-text wow rotateIn" data-wow-duration="1s"
                        data-wow-delay="0s" data-wow-offset="10"> </div> <br />
                    <a href="products.html" class="btn btn-red slider-link wow lightSpeedIn"
                        data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> </a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('images/slider/slider3.jpg') }}" alt="Flower">
                <div class="carousel-caption">
                    <div class="slide-header-text wow rollIn" data-wow-duration="1s" data-wow-delay="0s"
                        data-wow-offset="10"> </div> <br />
                    <a href="products.html" class="btn btn-red slider-link wow zoomIn"
                        data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> </a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('images/slider/slider4.jpg') }}" alt="Flower">
                <div class="carousel-caption">
                    <div class="slide-header-text wow bounceInLeft" data-wow-duration="1s"
                        data-wow-delay="0s" data-wow-offset="10"> </div> <br />
                    <a href="products.html" class="btn btn-red slider-link wow slideInRight"
                        data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> </a>
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
@endsection