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
                                <h4 class="card-title">Create Order Detail</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('store.orderdetail') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Id</label>
                                        <input type="text" class="form-control" name="id" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="text" class="form-control" name="status" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Id_order</label>
                                        <input type="text" class="form-control" name="id_order" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Id_match</label>
                                        <input type="text" class="form-control" name="id_match" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Type_chair</label>
                                        <input type="text" class="form-control" name="type_chair" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="text" class="form-control" name="price" id="" placeholder="">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create</button>
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
