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
                                <h4 class="card-title">Edit order</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('store.order') }}">
                                    @csrf                      
                                    <div class="form-group">
                                        <label for="">Fullname</label>
                                        <input type="text" class="form-control" name="full_name" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address1</label>
                                        <input type="text" class="form-control" name="address1" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address2</label>
                                        <input type="text" class="form-control" name="address2" id="" placeholder="">
                                    </div>

                              
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="number" class="form-control" name="phone" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" name="email" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Trận đấu</label>
                                        <input type="text" class="form-control" name="id_match" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ngày đặt</label>
                                        <input type="datetime-local" class="form-control" name="created_at" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số lượng ghế A</label>
                                        <input type="number" class="form-control" name="numOfChairA" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số lượng ghế B</label>
                                        <input type="number" class="form-control" name="numOfChairB" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tổng tiền ghế A</label>
                                        <input type="text" class="form-control" name="totalMoneyChairA" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tổng tiền ghế B</label>
                                        <input type="number" class="form-control" name="totalMoneyChairB" id="" placeholder="">
                                    </div>
                                    <div>
                                        <label for="">Tổng tiền</label>
                                        <input type="number" class="form-control" name="totalPrice" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email" id="" placeholder="">
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