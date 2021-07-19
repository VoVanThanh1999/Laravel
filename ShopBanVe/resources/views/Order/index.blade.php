@extends('Layout.layout')
@section('user')
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
                                <h4 class="card-title">Order</h4>
                                <p class="card-category">
                                    Here is a subtitle for this table
                                </p>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-success" href="{{ route('order.create') }}">Thêm đơn đặt hàng</a>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                      
                                            <th>Trạng thái</th>
                                            <th>Ho Và tên</th>
                                            <th>Địa chỉ 1</th>
                                            <th>Địa chỉ 2</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Ngày đặt</th>
                                            <th>Ngày update </th>
                                            <th>Trận đấu </th>
                                            <th>SL ghế A </th>
                                            <th>SL ghế B </th>
                                            <th>Tổng tiền ghế A </th>
                                            <th>Tổng tiền ghế B </th>
                                            <th>Tổng tiền </th>
                                            <th>Option</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                                <tr>
                                              
                                                
                                                    @if($order ->status  =='0')         
                                                        <td>Đang chờ xác nhận</td>         
                                                    @else
                                                        <td>Đã xác nhận</td>   
                                                    @endif
                                                    <td>{{ $order->full_name }}</td>
                                                    <td>{{ $order->address1 }}</td>
                                                    <td>{{ $order->address2 }}</td>
                                          
                                                    <td>{{ $order->phone }}</td>
                                                    <td>{{ $order->email }}</td>
                                                    <td>{{ $order->created_at }}</td>
                                                    <td>{{ $order->updated_at }}</td>
                                                    <td>{{ $order->id_match}}</td>
                                                    <td>{{ $order->numOfChairA}}</td>  
                                                    <td>{{ $order->numOfChairB}}</td>  
                                                    <td>{{ $order->totalMoneyChairA}}</td>  
                                                    <td>{{ $order->totalMoneyChairB}}</td>  
                                                    <td>{{ $order->totalPrice}}</td>  
                                                    <td>
                                                        <a href="/admin/orders/edit/{{ $order->id }}">
                                                            <button class="btn btn-danger">Edit</button>
                                                        </a>
                                                        <a href="/admin/orders/delete/{{ $order->id }}">
                                                            <button class="btn btn-warning">Delete</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('Layout.footer')
    </div>
@endsection