<div class="logo">
  <a href="{{ route('index.dashboard') }}" class="simple-text logo-normal">
    Những Chú Lính Chì
  </a>
</div>
<div class="sidebar-wrapper">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('index.dashboard') }}">
        <i class="material-icons">dashboard</i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ route('index.user') }}">
        <i class="material-icons">person</i>
        <p>Quản trị viên</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ route('index.order') }}">
        <i class="material-icons">shopping_cart</i>
        <p>Đặt hàng</p>
      </a>
    </li>
   
    <li class="nav-item ">
      <a class="nav-link" href="{{ route('index.vmatch') }}">
        <i class="material-icons">sports_soccer</i>
        <p>Trận đấu</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ route('index.matchdetail') }}">
        <i class="material-icons">details</i>
        <p>Trận đấu chi tiết</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ route('index.image') }}">
        <i class="material-icons">image</i>
        <p>Ảnh</p>
      </a>
    </li>
  </ul>
</div>