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
                                <a class="btn btn-success" href="{{ route('order.create') }}">CREATE USER</a>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>I</th>
                                            <th>Status</th>
                                            <th>Fullname</th>
                                            <th>Address1</th>
                                            <th>Address1</th>
                                            <th>Id_card</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Option</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                                <tr>
                                                    

                                                    <td>{{ $order->id }}</td>
                                                    @if($order->status  =='0')         
                                                        <td>Đang chờ xác nhận</td>         
                                                    @else
                                                    <td>Đã xác nhận</td>        
                                                    @endif
                                                    <td>{{ $order->full_name }}</td>
                                                    <td>{{ $order->address1 }}</td>
                                                    <td>{{ $order->address2 }}</td>
                                                    <td>{{ $order->id_card }}</td>
                                                    <td>{{ $order->phone }}</td>
                                                    <td>{{ $order->email }}</td>
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
