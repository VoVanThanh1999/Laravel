@extends('UserHome.Layout.layout')
<link type="text/css" rel="stylesheet" href="{{ asset('css/cart.css') }}" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
@section('cart')
 
<div class="cart_section">

    <div class="container-fluid">

        <div class="row">
        
            <div class="col-lg-10 offset-lg-1">
            {!! $matchDetails[0]->information !!}
                <div class="cart_container">
                    <div class="cart_title">Chi tiết trận đấu</div>
                    <div class="cart_items">
                        <ul class="cart_list">
                            <li class="cart_item clearfix">
                                <div class="cart_item_image"><img width="150px" height="150px" src="{{ URL::to('/') }}/upload/images/{{$matchDetails[0]->image}}" alt=""></div>
                                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                   
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Trận đấu</div>
                                        <div class="cart_item_text">{{$matchDetails[0]->name}}</div>
                                    </div>
                                    <div>
                                      <div class="cart_item_title">Ngày thi đấu</div>
                                        <div class="cart_item_text">{{$matchDetails[0]->date_start}}</div>
                                    </div>
                                
                                    <div class="cart_item_quantity cart_info_col">
                                        <div class="cart_item_title">SL ghế trống khán đài A</div>
                                        <div class="cart_item_text">{{$matchDetails[0]->A_number_of_empty_seats}}</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Giá khán đài A</div>
                                        <div class="cart_item_text">{{$matchDetails[0]->A_price}}</div>
                                    </div>
                                    <div class="cart_item_price cart_info_col">
                                        <div class="cart_item_title">SL ghế trống khán đài B</div>
                                        <div class="cart_item_text">{{$matchDetails[0]->B_number_of_empty_seats}}</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Giá khán đài B</div>
                                        <div class="cart_item_text">{{$matchDetails[0]->B_price}}</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <br>
                </div>
               
                <div>
                  <h4> Đặt ghế ngay </h4>
                </div>
                <form action="{{ route('order.Ticket') }}" method="POST">
                    @csrf
                    <input style="display: none;" value="{{$matchDetails[0]->name}}" name="ten_tran_dau"/>
                    <input style="display: none;" value="{{$matchDetails[0]->date_start}}" name="ngay_thi_dau"/>
                    <input style="display: none;" value="{{$matchDetails[0]->IdMatchDetail}}" name="id_chi_tiet"/>
                    <input style="display: none;" value="{{$matchDetails[0]->id_match}}" name="id_tran_dau"/>
                    <input style="display: none;" value="{{$matchDetails[0]->A_number_of_empty_seats}}" name="so_ghe_trong_a">
                    <input style="display: none;" value="{{$matchDetails[0]->B_number_of_empty_seats}}" name="so_ghe_trong_b">
                    <input style="display: none;" value="{{$matchDetails[0]->A_price}}" name="gia_a">
                    <input style="display: none;" value="{{$matchDetails[0]->B_price}}" name="gia_b">
                    <input style="display: none;" value="{{$matchDetails[0]->A_number_of_seats_purchased}}" name="so_ghe_da_mua_a">
                    <input style="display: none;" value="{{$matchDetails[0]->A_number_of_seats_purchased}}" name="so_ghe_da_mua_b">

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Họ và tên</label>
                        <input type="text"  class="form-control" id="full_name" name="full_name" placeholder="vd:Nguyễn Văn A">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="email" name="email"   placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Địa chỉ 1</label>
                      <input type="text" class="form-control" id="address1" name="address1"   placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Địa chỉ 2</label>
                      <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Số điện thoại</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Số ghế khán đài A</label>
                        <input type="number" min="0" class="form-control" max="5" id="numOfChairA" name="kh_numOfChairA">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Số ghế khán đài B</label>
                        <input type="number" min="0" class="form-control"  max="5"  id="numOfChairB" name="kh_numOfChairB">
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Đặt vé</button>
                    </br>
                    </br> </br>
                    @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                    @endif
                    @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                    @endif
                  </form>
            </div>
        </div>
        
    </div>
</div>

@endsection