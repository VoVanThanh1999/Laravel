@extends('Layout.layout')
@section('image_edit')
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
                                <h4 class="card-title">Create Image</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('store.image') }}"  enctype="multipart/form-data">
                                    @csrf
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="image" id="image"  >
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
            CKEDITOR.replace( 'information' );
        </script>
    </div>
@endsection


<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
 