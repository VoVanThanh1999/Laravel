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
                                <form method="POST" action="{{ route('order.update') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Id</label>
                                        <input type="text" class="form-control" name="id" value="{{ $order->id }}" id=""
                                            placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="text" class="form-control" name="status" value="{{ $order->status }}"
                                            id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fullname</label>
                                        <input type="text" class="form-control" name="full_name"
                                            value="{{ $order->full_name }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address1</label>
                                        <input type="text" class="form-control" name="address1"
                                            value="{{ $order->address1 }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address2</label>
                                        <input type="text" class="form-control" name="address2"
                                            value="{{ $order->address2 }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Id_card</label>
                                        <input type="text" class="form-control" name="id_card"
                                            value="{{ $order->id_card }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{ $order->phone }}"
                                            id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{ $order->email }}"
                                            id="" placeholder="">
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
