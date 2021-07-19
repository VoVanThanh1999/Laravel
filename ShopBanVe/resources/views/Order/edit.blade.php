@extends('Layout.layout')
@section('order_edit')
<div class="main-panel">
    <!-- Navbar -->
    @include('Layout.header')
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">

                            <h4 class="card-title">Edit Order</h4>

                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('order.update') }}">
                                @csrf
                                <div class="form-group">

                                    <input style="display: none;" type="text" disable class="form-control" name="id" value="{{ $order->id }}" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-control" name="status" id="" value="{{ $order->status }}" >
                                        <option {{($order->status ) == '0' ? 'selected' : '' }}  value="1">Đang chờ xác nhận</option>
                                        <option {{($order->status ) == '1' ? 'selected' : '' }}  value="2">Đã xác nhận</option>
                                        <option {{($order->status ) == '2' ? 'selected' : '' }} value="3">Đang giao</option>
                                        <option {{($order->status ) == '3' ? 'selected' : '' }} value="4">Giao thành công</option>
                                    </select>
                                    

                                </div>
                                <div class="form-group">
                                    <label for="">Fullname</label>
                                    <input type="text" class="form-control" name="full_name" value="{{ $order->full_name }}" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Address1</label>
                                    <input type="text" class="form-control" name="address1" value="{{ $order->address1 }}" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Address2</label>
                                    <input type="text" class="form-control" name="address2" value="{{ $order->address2 }}" id="" placeholder="">
                                </div>


                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $order->phone }}" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $order->email }}" id="" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="">Ngày đặt</label>
                                    <input disabled type="text" class="form-control" name="created_at" value="{{ $order->created_at }}"  placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="">Trận đấu</label>
                                    <input disabled type="text" class="form-control" name="id_match" value="{{ $order->id_match }}"   placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">SL ghế A</label>
                                    <input type="text" class="form-control" name="numOfChairA" value="{{ $order->numOfChairA }}" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">SL ghế B</label>
                                    <input type="text" class="form-control" name="numOfChairB" value="{{ $order->numOfChairB }}" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for=""> Tổng tiền ghế A </label>
                                    <input type="text" class="form-control" name="totalMoneyChairA" value="{{ $order->totalMoneyChairA }}" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for=""> Tổng tiền ghế B </label>
                                    <input type="text" class="form-control" name="totalMoneyChairB" value="{{ $order->totalMoneyChairB }}" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for=""> Tổng tiền  </label>
                                    <input type="text" class="form-control" name="totalPrice" value="{{ $order->totalPrice }}" id="" placeholder="">
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Layout.footer')
</div>
@endsection