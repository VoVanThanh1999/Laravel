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
          @if(count($orders) =='0')
          <h1> Đơn đặt hàng không tồn tại</h1>
          @else
          <div class="cart_title">Xem đơn hàng</div>
          @foreach ($orders as $order)
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

                  @if($order->status == 0)
                  Trạng thái: Đang chờ xác nhận

                  @elseif($order->status == 1)
                  Trạng thái: Đã xác nhận

                  @elseif($order->status == 2)
                  Trạng thái: Đang vận chuyển

                  @elseif($order->status == 3)
                  Trạng thái: Đã giao thành công

                  @endif


                  <br>
                  Tên trận đấu: <?php echo \App\Http\Controllers\OrderDetailController::findMatchById($order->id_match)[0]->name ?>
                  <br>
                  Ngày đặt vé : {{$order->created_at}}
                  <br>
                  Số lượng ghế A: : {{$order->numOfChairA}}
                  <br>
                  Số lượng ghế B: {{$order->numOfChairB}}
                  <br>
                  Tổng tiền ghế A: {{number_format($order->totalMoneyChairA)}} vnđ
                  <br>
                  Tổng tiền ghế B: {{number_format($order->totalMoneyChairB)}} vnđ
                  <br>
                  Tổng tiền: {{number_format($order->totalPrice)}} vnđ
                </td>
                <td>
                  Họ và tên: {{$order->full_name}}
                  <br>
                  Email: {{$order->email}}
                  <br>
                  Số điện thoại: {{$order->phone}}
                  <br>
                  Địa chỉ 1: {{$order->address1}}
                  <br>
                  Địa chỉ 2: {{$order->address2}}
                </td>
              </tr>
            </tbody>
          </table>

          @endforeach
        </div>
        @endif

      </div>
    </div>
  </div>
</div>

@endsection