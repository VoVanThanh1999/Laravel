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
                            <h4 class="card-title">Admin</h4>
                            <p class="card-category">
                                Danh sách Admin
                            </p>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-success" href="{{ route('user.create') }}">CREATE ADMIN</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        {{-- <th>ID</th> --}}
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Phone</th>
                                        <th>Option</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            {{-- <td>{{ $user->id }}</td> --}}
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->password }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
                                                <a href="/admin/users/edit/{{ $user->id }}">
                                                    <button class="btn btn-danger">Edit</button>
                                                </a>
                                                <a href="/admin/users/delete/{{ $user->id }}">
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