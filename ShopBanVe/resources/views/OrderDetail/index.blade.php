
@extends('Layout.layout')
@section('orderdetail')
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
                                <h4 class="card-title">Order Detail</h4>
                                <p class="card-category">
                                    Here is a subtitle for this table
                                </p>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-success" href="{{ route('orderdetail.create') }}">CREATE ORDERDETAIL</a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead class="thead-light text-primary">
                                            <th>I</th>
                                            <th>Status</th>
                                            <th>Id_order</th>
                                            <th>Id_match</th>
                                            <th>Quantity</th>
                                            <th>Type_chair</th>
                                            <th>Price</th>
                                            <th>Created_at</th>
                                            <th>Updated_at</th>
                                            <th>Option</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($order_details as $order_detail)
                                                <tr>
                                                    <td>{{ $order_detail->id }}</td>
                                                
                                                    @if($order_detail->status  =='0')         
                                                        <td>Đang chờ xác nhận</td>         
                                                    @else
                                                        <td>Đã xác nhận</td>   
                                                    @endif
                                                    <td><?php echo \App\Http\Controllers\OrderDetailController::findOrderById( $order_detail->id_order)[0]->full_name?></td>
                                                    <td><?php echo \App\Http\Controllers\OrderDetailController::findMatchById( $order_detail->id_match)[0]->name?></td>                                        
                                                    <td>{{ $order_detail->quantity }}</td>
                                                    <td>{{ $order_detail->type_chair }}</td>
                                                    <td>{{ $order_detail->price }}</td>
                                                    <td>{{ $order_detail->created_at }}</td>
                                                    <td>{{ $order_detail->updated_at }}</td>
                                                    <td>
                                                        <a href="/admin/orderdetails/edit/{{ $order_detail->id }}">
                                                            <button class="btn btn-danger">Edit</button>
                                                        </a>
                                                        <a href="/admin/orderdetails/delete/{{ $order_detail->id }}">
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
