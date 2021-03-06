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
                                <h4 class="card-title">Edit Match</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('vmatch.update') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Id</label>
                                        <input type="text" class="form-control" name="id" value="{{ $v_match->id }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $v_match->name }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Date_start</label>
                                        <input type="text" class="form-control" name="date_start" value="{{ $v_match->date_start }}" id="datepicker" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="text" class="form-control" name="image" value="{{ $v_match->image }}" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">information</label>
                                        <input type="text" class="form-control" name="information" value="{{ $v_match->information }}"  id="" placeholder="">
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
