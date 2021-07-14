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
                                <h4 class="card-title">Create Match</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('store.vmatch') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Id</label>
                                        <input type="text" class="form-control" name="id" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name" id="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Date_start</label>
                                        <input type="text" class="form-control" name="date_start" id="datepicker" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="text" class="form-control" name="image" id="image" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Information</label>
                                        <input type="text" class="form-control" name="information" id="" placeholder="">
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
        <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap3',
                format: 'yy/mm/dd',
                autoclose: true,
                todayHighlight: true
            });
        </script>
    </div>
@endsection
