@extends('Layout.layout')
@section('dashboard')
    <div class="main-panel">
        <!-- Navbar -->
        @include('Layout.header')
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">sports</i>
                                </div>
                                <p class="card-category">Tất cả trận đấu</p>
                                 <h3 class="card-title">
                                    <p>{{$a[0]}}</p>
                                </h3>
                            </div>
                             
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">store</i>
                                </div>
                                <p class="card-category">SL vé đã bán</p>
                                <h3 class="card-title">
                                    <p>{{$a[2]}}</p>
                                </h3>
                            </div>
                             
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-danger card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <p class="card-category">SL trận đấu sắp diễn ra</p>
                                <h3 class="card-title">
                                    <p>{{$a[1]}}</p>

                                </h3>
                                
                            </div>
                             
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-info card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">group</i>
                                </div>
                                <p class="card-category">SL admin</p>
                                <h3 class="card-title">
                                    <p>{{$a[3]}}</p>
                                </h3>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('Layout.footer')
    </div>
@endsection
