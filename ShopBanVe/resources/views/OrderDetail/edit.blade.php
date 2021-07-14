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
                                <h4 class="card-title">Edit Order Detail</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('orderdetail.update') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Id</label>
                                        <input type="text" class="form-control" name="id"  value="{{ $order_detail->id }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="text" class="form-control" name="status" value="{{ $order_detail->status }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Id_order</label>
                                        <input type="text" class="form-control" name="id_order" value="{{ $order_detail->id_order }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Id_match</label>
                                        <input type="text" class="form-control" name="id_match" value="{{ $order_detail->id_match }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" value="{{ $order_detail->quantity }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="text" class="form-control" name="price" value="{{ $order_detail->price }}" id="" placeholder="">
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
