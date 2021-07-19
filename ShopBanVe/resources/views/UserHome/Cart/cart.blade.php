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
                <div class="cart_container">
                    <div class="cart_title">Chi tiết trận đấu</div>
                    <div class="cart_items">
                        <ul class="cart_list">
                            <li class="cart_item clearfix">
                                <div class="cart_item_image"><img src="https://i.imgur.com/qqBRWD5.jpg" alt=""></div>
                                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Trận đấu</div>
                                        <div class="cart_item_text">ânnan</div>
                                    </div>
                                    <div class="cart_item_color cart_info_col">
                                        <div class="cart_item_title">Ngày thi đấu</div>
                                        <div class="cart_item_text"><span style="background-color:#999999;"></span>Silver</div>
                                    </div>
                                    <div class="cart_item_quantity cart_info_col">
                                        <div class="cart_item_title">SL ghế trống khán đài A</div>
                                        <div class="cart_item_text">1</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Giá khán đài A</div>
                                        <div class="cart_item_text">₹22000</div>
                                    </div>
                                    <div class="cart_item_price cart_info_col">
                                        <div class="cart_item_title">SL ghế trống khán đài B</div>
                                        <div class="cart_item_text">₹22000</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Giá khán đài B</div>
                                        <div class="cart_item_text">₹22000</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <br>
                </div>
                <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Họ và tên</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="vd:Nguyễn Văn A">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Địa chỉ</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Địa chỉ 2</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Số điện thoại</label>
                        <input type="text" class="form-control" id="inputCity">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Số ghế khán đài A</label>
                        <input type="number" min="0" class="form-control" id="inputZip">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Số ghế khán đài B</label>
                        <input type="number" min="0" class="form-control" id="inputZip">
                      </div>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Đặt vé</button>
                  </form>
            </div>
        </div>
        
    </div>
</div>

@endsection