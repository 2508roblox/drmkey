<nav id="main-nav-1">
    <ul class="nav-menu sm-horizontal">
        <li class="mobile-back text-end">Back<i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i></li>

        <!-- Bộ sưu tập -->
        <li>
            <a class="nav-link" href="#">Bộ sưu tập</a>
            <ul class="sub-menu">
                <li><a href="{{ url('/') }}">Gọng cận</a></li>
                <li><a href="{{ url('/collection/gong-lao-doc-bao') }}">Gọng Lão đọc báo</a></li>
                <li><a href="{{ url('/collection/gong-tre-em') }}">Gọng trẻ em</a></li>
                <li><a href="{{ url('/collection/gong-tro-gia-uu-dai') }}">Gọng trợ giá ƯU ĐÃI</a></li>
            </ul>
        </li>
        <li><a class="nav-link" href="{{url('san-pham')}}">Sản phẩm</a></li>
        <!-- Dịch vụ tròng -->
        <li>
            <a class="nav-link" href="{{ url('/services/trong') }}">DỊCH VỤ TRÒNG</a>
        </li>

        <!-- Về Chúng Tôi -->
        <li>
            <a class="nav-link" href="{{ url('/gioi-thieu') }}">Về Chúng Tôi</a>
        </li>
    </ul>
</nav>
