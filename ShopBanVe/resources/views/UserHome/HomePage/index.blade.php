@extends('UserHome.Layout.layout')
@section('content')
@include('UserHome.Layout.slideshow')
<div class="latest-products">
    <div class="container">
        <h2 class="title-div wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s"
            data-wow-offset="10">Những trận đấu sắp diễn ra</h2>
        <div class="products">
            <div class="row">
                @foreach ($v_matches as $v_match)
                    <div class="col-md-3">
                        <div class="product-item">
                            <div class="product-borde-inner">
                                <a href="">
                                    <img src="{{ URL::to('/') }}/upload/images/{{ $v_match->image }}"
                                        class="img img-responsive" />
                                </a>

                                <div class="product-price">
                                    <a href="">{{ $v_match->name }}</a><br />
                                   
                                    <span class="current-price">
                                        {{ $v_match->date_start }}
                                    </span>
                                </div>

                                <a href="{{ route('homepage.cart') }}"
                                    class="btn btn-cart text-center add-to-cart pull-right">
                                    <i class="fas fa-cart-plus"></i>
                                    Đặt vé
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="clearfix"></div>





            </div> <!-- End Latest products row-->

            <div class="clear"></div>
        </div> <!-- End products div-->
    </div> <!-- End container latest products-->
</div> <!-- End Latest products -->
@endsection