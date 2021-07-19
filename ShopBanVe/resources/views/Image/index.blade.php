@extends('Layout.layout')
@section('image')
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
                                <h4 class="card-title">Image</h4>
                                <p class="card-category">
                                    Here is a subtitle for this table
                                </p>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-success" href="{{ route('image.create') }}">CREATE IMAGE</a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead class="thead-light text-primary">
                                            <th>Id</th>
                                            <th>Image</th>
                                            <th>Option</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($images as $image)
                                                <tr>
                                                    <td>{{ $image->id }}</td>
                                                    <td><img width="85px" height="85px" src={{ URL::to('/') }}/upload/images/{{ $image->image }}></td>
                                                    <td>
                                                        <a href="/admin/images/edit/{{ $image->id }}">
                                                            <button class="btn btn-danger">Edit</button>
                                                        </a>
                                                        <a href="/admin/images/delete/{{ $image->id }}">
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
