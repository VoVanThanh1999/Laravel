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
                                <h4 class="card-title">Match Detail</h4>
                                <p class="card-category">
                                    Here is a subtitle for this table
                                </p>
                            </div>
                            <div class="card-body">
                           
                            <a class="btn btn-success" href="{{ route('matchdetail.create') }}">CREATE MATCH DETAIL</a>
                              
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead class="thead-light">
                                            <th>Id</th>
                                            <th>Số lượng ghế A trống</th>
                                            <th>Số lượng ghế A đã mua</th>
                                            <th>Giá ghế A</th>
                                            <th>Số lượng ghế B trống</th>
                                            <th>Số lượng ghế B đã mua</th>
                                            <th>Giá ghế B</th>
                                            <th>Tên trận đấu</th>
                                            <th>Option</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($match_details as $match_detail)
                                                <tr>
                                                    <td>{{ $match_detail->id }}</td>
                                                    <td>{{ number_format($match_detail->A_number_of_empty_seats) }} ghế</td>
                                                    <td>{{ number_format($match_detail->A_number_of_seats_purchased) }} ghế</td>
                                                    <td>{{ number_format($match_detail->A_price)}} vnđ</td>
                                                    <td>{{ number_format($match_detail->B_number_of_empty_seats)}} ghế</td>
                                                    <td>{{ number_format($match_detail->B_number_of_seats_purchased)}} ghế</td>
                                                    <td>{{ number_format($match_detail->B_price)}} vnđ</td>
                                                    <td><?php echo \App\Http\Controllers\MatchDetailController::findMatchById( $match_detail->id_match)[0]->name?></td>                                        
                                                    <td>
                                                        <a href="/admin/matchdetails/edit/{{ $match_detail->id }}">
                                                            <button class="btn btn-danger">Edit</button>
                                                        </a>
                                                        <a href="/admin/matchdetails/delete/{{ $match_detail->id }}">
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
