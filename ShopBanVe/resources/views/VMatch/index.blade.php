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
                                <h4 class="card-title">Match</h4>
                                <p class="card-category">
                                    Here is a subtitle for this table
                                </p>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-success" href="{{ route('vmatch.create') }}">CREATE MATCH</a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead class="thead-light text-primary">
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>DateStart</th>
                                            <th>Image</th>
                                            {{-- <th>Imformation</th> --}}
                                            <th>Option</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($v_matchs as $v_match)
                                                <tr>
                                                    <td>{{ $v_match->id }}</td>
                                                    <td>{{ $v_match->name }}</td>
                                                    <td>{{ $v_match->date_start }}</td>
                                                    <td><img width="85px" height="85px" src={{ URL::to('/') }}/upload/images/{{ $v_match->image }}></td>
                                                    {{-- <td>{{ $v_match->information }}</td> --}}
                                                    <td>
                                                        <a href="/admin/vmatches/edit/{{ $v_match->id }}">
                                                            <button class="btn btn-danger">Edit</button>
                                                        </a>
                                                        <a href="/admin/vmatches/delete/{{ $v_match->id }}">
                                                            <button class="btn btn-warning">Delete</button>
                                                        </a>
                                                        <a href="./matchdetails/getByIdMatch/{{ $v_match->id }}">
                                                            <button class="btn btn-primary">See details</button>
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
