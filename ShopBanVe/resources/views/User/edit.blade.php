@extends('Layout.layout')
@section('user_edit')
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
                                <h4 class="card-title">Edit user</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('user.update') }}">
                                    @csrf
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Id</label>
                                      <input type="text" class="form-control" name="id" value="{{ $user->id }}" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Enter email">
                                      </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Email address</label>
                                      <input type="text" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email address">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="text" class="form-control" name="password" value="{{ $user->password }}" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" placeholder="Phone">
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
