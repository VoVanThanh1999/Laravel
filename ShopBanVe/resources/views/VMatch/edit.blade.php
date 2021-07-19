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
                                <form method="POST" action="{{ route('vmatch.update') }}"  enctype="multipart/form-data">
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
                                    <label for="">Image</label>
                                        <input type="file" class="form-control" name="image" id="image"  >
                                    <div class="form-group">
                                        <label for="">information</label>
                                       
                                        <textarea type="text" value="{{ $v_match->information }}  name="information" id="information" placeholder=""></textarea>
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
        <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap3',
                format: 'yy/mm/dd',
                autoclose: true,
                todayHighlight: true
            });
            CKEDITOR.replace( 'information' );
        </script>
    </div>
@endsection
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
 