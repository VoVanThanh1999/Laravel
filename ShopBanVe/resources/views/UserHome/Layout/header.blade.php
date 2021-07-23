{{-- <!-- Start Top Header -->
 <div class="top-header">
    <div class="top-header-left pull-left">
        <a href="{{ route('homepage') }}">IT17A1.11</a>
    </div>

    <div class="clear"></div>
</div>
<!-- End Top Header -->
<!-- Start Header Main, logo, search bar,cart -->
<div class="header-bottom">
    <div class="container">
        <div class="header-logo pull-left">

        </div>

        <div class="header-search pull-left" style="
            margin-left: 230px;
            margin-top: 25px;
        ">
            <form method="POST" action="{{ route('viewOrder.viewOrder') }}">
            @csrf
                <input type="search" name="sdt" placeholder="Tìm kiếm vé đã mua bằng SĐT"
                    required="">
                <button type="submit" class="btn btn-default" aria-label="Left Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
            </form>
        </div>
        <!-- Cart Modal -->
        <div id="cart-item" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;
                        </button>
                        <h4 class="modal-title">Cart Products</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Item Name</th>
                                    <th>Item Image</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Digital Camera</td>
                                    <td><img src="images/product-slide/product2.png"
                                            class="img img-responsive img-thumbnail" alt=""></td>
                                    <td>3</td>
                                    <td>200$</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Samsung Galaxy 7</td>
                                    <td><img src="images/product-slide/product3.png"
                                            class="img img-responsive img-thumbnail" alt=""></td>
                                    <td>1</td>
                                    <td>500$</td>
                                </tr>
                                <tr>
                                    <td colspan="5" rowspan="5">
                                        Total Price <span class="bold text-primary"
                                            style="margin-left: 73%">800$</span>
                                    </td>
                                </tr>
                                <div class="clearfix"></div>
                            </tbody>
                        </table>
                        <p class="text-right text-danger">There are <span style="font-weight: bold">2</span>
                            more products in the cart. Click Checkout now to buy the items..</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel
                        </button>
                        <a href="cart.html" class="btn btn-yellow">Check Out</a>
                    </div>
                </div>

            </div>
        </div> <!-- End Model -->

    </div>
</div>
<!-- End Header Main, logo, search bar,cart --> --}}
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand1" style="padding-left: 100px;  text-decoration: none;" href="{{ route('homepage') }}">Những
        chú lính chì</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="form-inline my-2 my-lg-0" style="padding-left: 627px" method="POST"
            action="{{ route('viewOrder.viewOrder') }}">
            @csrf
            <input class="form-control control1 mr-sm-2" style="width: 250px" name="sdt" type="search"
                placeholder="Tìm kiếm vé đã mua bằng SĐT" aria-label="Search">
            <button class="btn btn1 btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
        </form>
    </div>
</nav>
