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
        @foreach($images as $image)
            @if($image->id==5 )
                <div class="item active">
                    <img style="width: 100%; height:550px" src="{{ URL::to('/') }}/upload/images/{{ $image->image }}" alt="Chania">
                        <div class="carousel-caption">
                            <div class="slide-header-text wow slideInLeft" data-wow-duration="1s"
                            data-wow-delay="0s" data-wow-offset="10"></div> <br />
                            <a href="products.html" class="btn btn-red slider-link wow lightSpeedIn"
                            data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> </a>
                        </div>
                    </div>
            @else
                <div class="item">
                    <img style="width: 100%;  height:550px" src="{{ URL::to('/') }}/upload/images/{{ $image->image }}" alt="Chania">
                        <div class="carousel-caption">
                            <div class="slide-header-text wow slideInLeft" data-wow-duration="1s"
                            data-wow-delay="0s" data-wow-offset="10"></div> <br />
                            <a href="products.html" class="btn btn-red slider-link wow lightSpeedIn"
                            data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> </a>
                        </div>
                    </div>
            
            @endif
           
                
                
                
                 
            
            @endforeach
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