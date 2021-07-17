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
                                        <input  type="text" class="form-control" name="id"  value="{{ $order_detail->id }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        @if($order_detail->status == '1')         
                                            <input type="checkbox" value="0"  name="status" {{ $order_detail->status == 1 ? ' checked="checked"' : '' }}>         
                                        @else
                                            <input type="checkbox" value="1"  name="status" {{ $order_detail->status == 1 ? ' checked="checked"' : '' }}> 
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Id_order</label>
                                        <input disabled  type="text" class="form-control" name="id_order" value="<?php echo \App\Http\Controllers\OrderDetailController::findOrderById( $order_detail->id_order)[0]->full_name?>" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Id_match</label>
                                        <input disabled type="text" class="form-control" name="id_match" value="<?php echo \App\Http\Controllers\OrderDetailController::findMatchById( $order_detail->id_match)[0]->name?>" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" value="{{ $order_detail->quantity }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Type_chair</label>
                                        <input type="text" class="form-control" name="type_chair" value="{{ $order_detail->type_chair }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="text" class="form-control" name="price" value="{{ $order_detail->price }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Created_at</label>
                                        <input type="text" class="form-control" name="created_at" value="{{ $order_detail->created_at }}" id="datepicker" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Updated_at</label>
                                        <input type="text" class="form-control" name="updated_at" value="{{ $order_detail->updated_at }}" id="datepicker1" placeholder="">
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
        <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap3',
                format: 'yy/mm/dd',
                autoclose: true,
                todayHighlight: true
            });
            $('#datepicker1').datepicker({
                uiLibrary: 'bootstrap3',
                format: 'yy/mm/dd',
                autoclose: true,
                todayHighlight: true
            });
        </script>
    </div>
@endsection
