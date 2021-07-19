@extends('UserHome.Layout.layout')
<link type="text/css" rel="stylesheet" href="{{ asset('css/cart.css') }}" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
@section('vieworder')
<div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title">Xem đơn hàng</div>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Thông tin đơn hàng</th>
                            <th scope="col">Khách hàng</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                                Trạng thái: 
                                <br>
                                Ngày thêm: 
                                <br>
                                Ngày cập nhật:
                                <br>
                                Số lượng ghế A:
                                <br>
                                Số lượng ghế B:
                                <br>
                                Tổng tiền ghế A:
                                <br>
                                Tổng tiền ghế B:
                                <br>
                                Tổng tiền:
                            </td>
                            <td>
                                Họ và tên:
                                <br>
                                Email: 
                                <br>
                                Số điện thoại:
                                <br>
                                Địa chỉ 1:
                                <br>
                                Địa chỉ 2:
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection