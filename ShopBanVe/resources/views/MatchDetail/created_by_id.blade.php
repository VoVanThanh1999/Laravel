

@extends('Layout.layout')
@section('matchdetail_edit')
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
                                <h4 class="card-title">Create MatchDetail</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('insertByIdMatch.matchdetail') }}">
                                    @csrf
                                    {{-- <div class="form-group">
                                        <label for="">Id</label>
                                        <input type="text" class="form-control" name="id" id="" placeholder="">
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="">Số lượng ghế A trống</label>
                                        <input type="text" class="form-control" name="A_number_of_empty_seats" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số lượng ghế A đã mua</label>
                                        <input type="text" class="form-control" name="A_number_of_seats_purchased" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Giá ghế A</label>
                                        <input type="text" class="form-control" name="A_price" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số lượng ghế B trống</label>
                                        <input type="text" class="form-control" name="B_number_of_empty_seats" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số lượng ghế B đã mua</label>
                                        <input type="text" class="form-control" name="B_number_of_seats_purchased" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Giá ghế B</label>
                                        <input type="text" class="form-control" name="B_price" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tên trận đấu</label>
                                        <input type="text" disabled class="form-control"   placeholder="" value="{{$data['name']}}">
                                        <input type="text" style="display: none;" class="form-control" name="id_match" id="" placeholder="" value="{{$data['IdMatch']}}">
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
