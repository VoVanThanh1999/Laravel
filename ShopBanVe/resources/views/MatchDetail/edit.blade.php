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
                                <h4 class="card-title">Edit MatchDetail</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('matchdetail.update') }}">
                                    @csrf
                                    <div class="form-group">
                                       
                                        <input style="display: none;"  type="text" class="form-control" name="id" value="{{ $match_detail->id }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số lượng ghế A trống</label>
                                        <input type="text" class="form-control" name="A_number_of_empty_seats" value="{{ $match_detail->A_number_of_empty_seats }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số lượng ghế A đã mua</label>
                                        <input type="text" class="form-control" name="A_number_of_seats_purchased" value="{{ $match_detail->A_number_of_seats_purchased }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Giá ghế A</label>
                                        <input type="text" class="form-control" name="A_price" value="{{ $match_detail->A_price }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số lượng ghế B trống</label>
                                        <input type="text" class="form-control" name="B_number_of_empty_seats" value="{{ $match_detail->B_number_of_empty_seats }}"  id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số lượng ghê B đã mua</label>
                                        <input type="text" class="form-control" name="B_number_of_seats_purchased" value="{{ $match_detail->B_number_of_seats_purchased }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Giá ghế B</label>
                                        <input type="text" class="form-control" name="B_price" value="{{ $match_detail->B_price }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                     
                                        <input type="text" style="display: none;" class="form-control" name="id_match" id="" placeholder="" value="{{$match_detail->id_match}}">
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
