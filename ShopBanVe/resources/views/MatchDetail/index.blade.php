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
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Id</th>
                                            <th>A_seats</th>
                                            <th>A_purchased</th>
                                            <th>A_price</th>
                                            <th>B_seats</th>
                                            <th>B_purchased</th>
                                            <th>B_price</th>
                                            <th>Id_match</th>
                                            <th>Option</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($match_details as $match_detail)
                                                <tr>
                                                    <td>{{ $match_detail->id }}</td>
                                                    <td>{{ $match_detail->A_number_of_empty_seats }}</td>
                                                    <td>{{ $match_detail->A_number_of_seats_purchased }}</td>
                                                    <td>{{ $match_detail->A_price }}</td>
                                                    <td>{{ $match_detail->B_number_of_empty_seats }}</td>
                                                    <td>{{ $match_detail->B_number_of_seats_purchased }}</td>
                                                    <td>{{ $match_detail->B_price }}</td>
                                                    <td>{{ $match_detail->id_match }}</td>
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
