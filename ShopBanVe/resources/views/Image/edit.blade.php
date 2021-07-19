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
                                <h4 class="card-title">Edit Image</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('image.update') }}"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">ID</label>
                                        <input type="text" class="form-control" name="id" value="{{ $image->id }}">
                                    </div>
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="image" id="image"  >
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
 