<div>

    <head>
        <title>Trang chủ</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Katie">
        <meta name="keywords" content="Katie">
        <meta name="author" content="pixelstrap">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

        <!-- Google Font Outfit -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&amp;display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/fontawesome.css') }}">

        <!-- Iconsax icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/iconsax.css') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" id="rtl-link" href="{{ asset('assets/css/vendors/bootstrap.css') }}">

        <!-- Additional CSS -->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/css/vendors/swiper-slider/swiper-bundle.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/toastify.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

        <!-- JS -->
        <script defer src="{{ asset('assets/css/landing_page.js') }}"></script>
        <script defer src="{{ asset('assets/css/style.js') }}"></script>
        <style>
            .product-box-3 .img-wrapper .product-image {
                background-color: white !important;
            }

            .pro-first.bg-size {
                background-size: contain !important;
            }
        </style>
    </head>
    <div>


        <body>
            <div class="tap-top">
                <div><i class="fa-solid fa-angle-up"></i></div>
            </div><span class="cursor"><span class="cursor-move-inner"><span class="cursor-inner"></span></span><span
                    class="cursor-move-outer"><span class="cursor-outer"></span></span></span>
            <header>

                <div class="custom-container container header-1">
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="mobile-fix-option">
                                <ul>
                                    <li> <a href="{{ url('/') }}"><i class="iconsax"
                                                data-icon="home-1"></i>Home</a></li>
                                    <li><a href="search.html"><i class="iconsax"
                                                data-icon="search-normal-2"></i>Search</a></li>
                                    <a href="/gio-hang" title="Xem giỏ hàng" wire:navigate><i class="iconsax pe-2"
                                            data-icon="basket-2"> </i> Giỏ hàng</a>


                                    <li> <a href="dashboard.html"> Account</a></li>
                                </ul>
                            </div>
                            <div class="offcanvas offcanvas-start" id="staticBackdrop" data-bs-backdrop="static"
                                tabindex="-1" aria-labelledby="staticBackdropLabel">
                                <div class="offcanvas-header">
                                    <h3 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h3><button
                                        class="btn-close" type="button" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div></div>I will not close if you click outside of me.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="main-menu"> <a class="brand-logo" href="{{ url('/') }}"> <img
                                        class="img-fluid for-light" src="../assets/images/logo/logo.png"
                                        alt="logo"><img class="img-fluid for-dark"
                                        src="../assets/images/logo/logo-white-1.png" alt="logo"></a>
                                <nav id="main-nav">
                                    <ul class="nav-menu sm-horizontal theme-scrollbar" id="sm-horizontal">
                                        <li class="mobile-back" id="mobile-back">Back<i
                                                class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i></li>

                                        <li> <a class="nav-link" href="{{ url('/') }}">Bộ sưu tập<span> <i
                                                        class="fa-solid fa-angle-down"></i></span></a>
                                            <ul class="nav-submenu">
                                                <li><a href="{{ url('/') }}">Gọng cận</a></li>
                                                <li><a href="{{ url('/collection/gong-lao-doc-bao') }}">Gọng Lão đọc
                                                        báo</a></li>
                                                <li><a href="{{ url('/collection/gong-tre-em') }}">Gọng trẻ em</a>
                                                </li>
                                                <li><a href="{{ url('/collection/gong-tro-gia-uu-dai') }}">Gọng trợ
                                                        giá ƯU ĐÃI</a></li>
                                            </ul>
                                        </li>


                                        <li><a class="nav-link" href="{{ url('san-pham') }}">Sản phẩm</a></li>
                                        <!-- Dịch vụ tròng -->
                                        <li>
                                            <a class="nav-link" href="{{ url('/services/trong') }}">Dịch vụ tròng
                                            </a>
                                        </li>

                                        <!-- Về Chúng Tôi -->
                                        <li>
                                            <a class="nav-link" href="{{ url('/gioi-thieu') }}">Về Chúng Tôi</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="sub_header">
                                    <div class="toggle-nav" id="toggle-nav"><i
                                            class="fa-solid fa-bars-staggered sidebar-bar"></i></div>
                                    <ul class="justify-content-end">
                                        <li> <button href="#" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i
                                                    class="iconsax" data-icon="search-normal-2"></i></button></li>

                                        <li class="onhover-div"><a href="#"> </a>
                                            <div class="onhover-show-div user">
                                                <ul>
                                                    <li> <a href="login.html">Login </a></li>
                                                    <li> <a href="sign-up.html">Register</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="onhover-div shopping-cart"> <a class="p-0" href="#"
                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                aria-controls="offcanvasRight">
                                                <a href="/gio-hang" title="Xem giỏ hàng" wire:navigate><i
                                                        class="iconsax pe-2" data-icon="basket-2"> </i> Giỏ hàng</a>

                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="section-b-space pt-0">
                <div class="heading-banner">
                    <div class="custom-container container">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4>Danh sách sản phẩm</h4>
                            </div>
                            <div class="col-sm-6">
                                <ul class="breadcrumb float-end">
                                    <li class="breadcrumb-item"> <a href="{{ url('/') }}">Home </a></li>
                                    <li class="breadcrumb-item active"> <a href="#">Danh sách sản phẩm </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-b-space pt-0">
                <div class="custom-container container">
                    <div class="row">
                        <div class="col-3">
                            <div class="custom-accordion theme-scrollbar left-box">
                                <div class="left-accordion">
                                    <h5>Back </h5><i class="back-button fa-solid fa-xmark"></i>
                                </div>
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="search-box">
                                        <input type="search" name="text" placeholder="Search here..."
                                            wire:model.live="searchTerm">
                                        <i class="iconsax" data-icon="search-normal-2"></i>
                                    </div>
                                    {{-- {{ implode(', ', $selectedCategories) }}
                                    {{ implode(', ', $selectedBrands) }} --}}

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseEight">
                                                <span>Thương hiệu</span>
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse show"
                                            id="panelsStayOpen-collapseEight">
                                            <div class="accordion-body">
                                                <ul class="collection-list">
                                                    @foreach ($brands as $brand)
                                                        <li>
                                                            <input class="custom-checkbox"
                                                                id="brand{{ $brand->id }}" type="checkbox"
                                                                wire:model.live="selectedBrands"
                                                                value="{{ $brand->id }}">
                                                            <label
                                                                for="brand{{ $brand->id }}">{{ $brand->name }}</label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseTwo">
                                                <span>Danh mục</span>
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse show" id="panelsStayOpen-collapseTwo">
                                            <div class="accordion-body">
                                                <ul class="catagories-side theme-scrollbar">
                                                    @foreach ($categories as $category)
                                                        <li>
                                                            <input class="custom-checkbox"
                                                                id="category{{ $category->id }}" type="checkbox"
                                                                wire:model.live="selectedCategories"
                                                                value="{{ $category->id }}">
                                                            <label
                                                                for="category{{ $category->id }}">{{ $category->name }}

                                                            </label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="accordion-item">
                                        <h2 class="accordion-header tags-header"><button
                                                class="accordion-button"><span>Shipping
                                                    & Delivery</span><span></span></button></h2>
                                        <div class="accordion-collapse collapse show"
                                            id="panelsStayOpen-collapseSeven">
                                            <div class="accordion-body">
                                                <ul class="widget-card">
                                                    <li><i class="iconsax" data-icon="truck-fast"></i>
                                                        <div>
                                                            <h6>Free Shipping</h6>
                                                            <p>Free shipping for all US order</p>
                                                        </div>
                                                    </li>
                                                    <li><i class="iconsax" data-icon="headphones"></i>
                                                        <div>
                                                            <h6>Support 24/7</h6>
                                                            <p>Free shipping for all US order</p>
                                                        </div>
                                                    </li>
                                                    <li><i class="iconsax" data-icon="exchange"></i>
                                                        <div>
                                                            <h6>30 Days Return</h6>
                                                            <p>Free shipping for all US order</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="sticky">
                                <div class="top-filter-menu">
                                    <div> <a class="filter-button btn">
                                            <h6> <i class="iconsax" data-icon="filter"></i>Filter Menu </h6>
                                        </a>
                                        <div class="category-dropdown">
                                            <label for="sort">Sort By :</label>
                                            <select class="form-select" id="sort" name="sort"
                                                wire:model.live="sortBy">
                                                <option value="price_asc">Giá: Tăng dần</option>
                                                <option value="price_desc">Giá: Giảm dần</option>
                                            </select>
                                        </div>
                                    </div>
                                    <ul class="filter-option-grid">
                                        <li class="nav-item d-none d-md-flex"> <button class="nav-link"
                                                data-grid="2"><svg>
                                                    <use href="../assets/svg/icon-sprite.svg#grid-2"></use>
                                                </svg></button></li>
                                        <li class="nav-item d-none d-md-flex"> <button class="nav-link"
                                                data-grid="3"><svg>
                                                    <use href="../assets/svg/icon-sprite.svg#grid-3"></use>
                                                </svg></button></li>
                                        <li class="nav-item d-none d-lg-flex"> <button class="nav-link active"
                                                data-grid="4"><svg>
                                                    <use href="../assets/svg/icon-sprite.svg#grid-4"></use>
                                                </svg></button></li>
                                        <li class="nav-item d-none d-md-flex"> <button class="nav-link"
                                                data-grid="list"><svg>
                                                    <use href="../assets/svg/icon-sprite.svg#grid-list"></use>
                                                </svg></button></li>
                                    </ul>
                                </div>
                                <div class="product-tab-content ratio1_3">
                                    <div
                                        class="row-cols-lg-4 row-cols-md-3 row-cols-2 grid-section view-option row g-3 g-xl-4">
                                        @foreach ($products as $product)
                                            <div class="col" wire:key="item-{{ $product->id }}">
                                                <div class="product-box-3">
                                                    <div class="img-wrapper">
                                                        <!-- Wishlist Icon -->
                                                        <div class="label-block">
                                                            <a class="label-2 wishlist-icon" href="javascript:void(0)"
                                                                tabindex="0">
                                                                <i class="iconsax" data-icon="heart"
                                                                    aria-hidden="true" data-bs-toggle="tooltip"
                                                                    data-bs-title="Add to Wishlist"></i>
                                                            </a>
                                                        </div>
                                                        <!-- Product Images -->
                                                        <div class="product-image">
                                                            <a class="pro-first"
                                                                href="{{ url('/san-pham/' . $product->category->slug . '/' . $product->slug) }}">
                                                                <img class="bg-img"
                                                                    src="{{ Storage::url(is_array($product->images) ? $product->images[0] : $product->images) }}"
                                                                    alt="{{ $product->name }}">
                                                            </a>
                                                            @if (count($product->images) > 1)
                                                                <a class="pro-sec"
                                                                    href="{{ url('/san-pham/' . $product->category->slug . '/' . $product->slug) }}">
                                                                    <img class="bg-img"
                                                                        src="{{ Storage::url(is_array($product->images) ? $product->images[1] : $product->images) }}"
                                                                        alt="{{ $product->name }}">
                                                                </a>
                                                            @endif
                                                        </div>
                                                        <!-- Cart Info Icons -->
                                                        <div class="cart-info-icon">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#addtocart" tabindex="0">
                                                                <i class="iconsax" data-icon="basket-2"
                                                                    aria-hidden="true" data-bs-toggle="tooltip"
                                                                    data-bs-title="Add to card"></i>
                                                            </a>
                                                            <a href="compare.html" tabindex="0">
                                                                <i class="iconsax" data-icon="arrow-up-down"
                                                                    aria-hidden="true" data-bs-toggle="tooltip"
                                                                    data-bs-title="Compare"></i>
                                                            </a>
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view" tabindex="0">
                                                                <i class="iconsax" data-icon="eye" aria-hidden="true"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-title="Quick View"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- Product Detail -->
                                                    <div class="product-detail">
                                                        <!-- Rating -->
                                                        <ul class="rating">
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                                            <li><i class="fa-regular fa-star"></i></li>
                                                            <li>4.3</li>
                                                            <!-- You can dynamically set this value based on your data -->
                                                        </ul>
                                                        <!-- Product Title -->
                                                        <a
                                                            href="{{ url('/san-pham/' . $product->category->slug . '/' . $product->slug) }}">
                                                            <h6>{{ $product->name }}</h6>
                                                        </a>
                                                        <!-- Description -->
                                                        <p class="list-per">
                                                            {{ $product->description }}
                                                        </p>
                                                        <!-- Price -->
                                                        <p>
                                                            {{ number_format($product->price, 0, ',', '.') }} VNĐ
                                                            @if ($product->discount)
                                                                <del>{{ number_format($product->original_price, 0, ',', '.') }}
                                                                    VNĐ</del>
                                                                <span>-{{ $product->discount }}%</span>
                                                            @endif
                                                        </p>
                                                        <!-- Quick Shop Button -->
                                                        <div class="listing-button">
                                                            <a class="btn"
                                                                href="{{ url('/san-pham/' . $product->category->slug . '/' . $product->slug) }}">Quick
                                                                Shop</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                                <div class="pagination-wrap">
                                    <ul class="pagination">
                                        {{-- Previous Page Link --}}
                                        @if ($products->onFirstPage())
                                            <li class="disabled"><a class="prev" href="javascript:void(0)"><i
                                                        class="iconsax" data-icon="chevron-left"></i></a></li>
                                        @else
                                            <li><a class="prev" href="javascript:void(0)"
                                                    wire:click="previousPage"><i class="iconsax"
                                                        data-icon="chevron-left"></i></a></li>
                                        @endif

                                        @php
                                            $currentPage = $products->currentPage();
                                            $lastPage = $products->lastPage();
                                            $paginationLimit = 4; // Number of page links to show
                                            $halfLimit = floor($paginationLimit / 2);

                                            $start = max(1, $currentPage - $halfLimit);
                                            $end = min($lastPage, $currentPage + $halfLimit);

                                            // Adjust the start and end to ensure pagination covers the total range properly
                                            if ($end - $start < $paginationLimit - 1) {
                                                $start = max(1, $end - $paginationLimit + 1);
                                            }
                                        @endphp

                                        {{-- Display Ellipsis if Necessary --}}
                                        @if ($start > 1)
                                            <li><a href="javascript:void(0)" wire:click="gotoPage(1)">1</a></li>
                                            @if ($start > 2)
                                                <li class="disabled"><span>...</span></li>
                                            @endif
                                        @endif

                                        {{-- Page Links --}}
                                        @for ($i = $start; $i <= $end; $i++)
                                            <li class="{{ $i == $currentPage ? 'active' : '' }}">
                                                <a href="javascript:void(0)"
                                                    wire:click="gotoPage({{ $i }})">{{ $i }}</a>
                                            </li>
                                        @endfor

                                        {{-- Display Ellipsis if Necessary --}}
                                        @if ($end < $lastPage)
                                            @if ($end < $lastPage - 1)
                                                <li class="disabled"><span>...</span></li>
                                            @endif
                                            <li><a href="javascript:void(0)"
                                                    wire:click="gotoPage({{ $lastPage }})">{{ $lastPage }}</a>
                                            </li>
                                        @endif

                                        {{-- Next Page Link --}}
                                        @if ($products->hasMorePages())
                                            <li><a class="next" href="javascript:void(0)" wire:click="nextPage"><i
                                                        class="iconsax" data-icon="chevron-right"></i></a></li>
                                        @else
                                            <li class="disabled"><a class="next" href="javascript:void(0)"><i
                                                        class="iconsax" data-icon="chevron-right"></i></a></li>
                                        @endif
                                    </ul>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="footer-layout-img">
                <section class="section-b-space footer-1">
                    <div class="custom-container container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="footer-content">
                                    <div class="footer-logo">
                                        <a href="{{ url('/') }}">
                                            <img class="img-fluid" src="../assets/images/logo/logo-white-1.png"
                                                alt="Footer Logo">
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <i class="iconsax" data-icon="location"></i>
                                            <h6>213 Tôn Đức Thắng, Hà Nội</h6>
                                        </li>
                                        <li>
                                            <i class="iconsax" data-icon="phone-calling"></i>
                                            <h6>0865213988</h6>
                                        </li>
                                        <li>
                                            <i class="iconsax" data-icon="mail"></i>
                                            <h6>martian@martian.vn</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col">
                                <div class="footer-content">
                                    <div class="footer-title d-md-block">
                                        <h5>Thông Tin</h5>
                                        <ul class="footer-details accordion-hidden">
                                            <li><a class="nav" href="#">Hướng Dẫn Mua Hàng</a></li>
                                            <li><a class="nav" href="#">Chính Sách Bảo Hành & Đổi Trả</a>
                                            </li>
                                            <li><a class="nav" href="#">Hướng Dẫn Bảo Quản</a></li>
                                            <li><a class="nav" href="#">Điều Khoản</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="footer-content">
                                    <div class="footer-title d-md-block">
                                        <h5>Kết Nối</h5>
                                        <ul class="footer-details accordion-hidden">
                                            <li><a class="nav" href="#">Facebook</a></li>
                                            <li><a class="nav" href="#">Instagram</a></li>
                                            <li><a class="nav" href="mailto:martian@martian.vn">Email Chúng Tôi</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="sub-footer">
                    <div class="custom-container container">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12">
                                <div class="footer-end">
                                    <h6>© Copyright MARTIAN – All Rights Reserved – Powered by MARTIAN</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <div class="bg-overlay"></div>
            <div class="modal theme-modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog"
                aria-modal="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body modal1">
                            <div class="custom-container container">
                                <div class="row">
                                    <div class="col-12 px-0">
                                        <div class="modal-bg addtocart"><button class="btn-close" type="button"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="d-flex"><a href="#"><img
                                                        class="img-fluid blur-up lazyload pro-img"
                                                        src="../assets/images/modal/0.jpg" alt=""></a>
                                                <div class="add-card-content align-self-center text-center"><a
                                                        href="#">
                                                        <h6><i class="fa-solid fa-check"> </i>Item <span>men full
                                                                sleeves</span><span> successfully added to your
                                                                Cart</span></h6>
                                                    </a>
                                                    <div class="buttons"><a class="view-cart btn btn-solid"
                                                            href="cart.html">Your cart</a><a
                                                            class="checkout btn btn-solid" href="check-out.html">Check
                                                            out</a><a class="continue btn btn-solid"
                                                            href="{{ url('/') }}">Continue shopping</a></div>
                                                    <div class="upsell_payment"><img
                                                            class="img-fluid blur-up lazyload"
                                                            src="../assets/images/payment_cart.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="product-upsell">
                                            <h5>Products Loved by Our Customers</h5><svg>
                                                <use href="../assets/svg/icon-sprite.svg#main-line"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="card-img"> <img src="../assets/images/modal/1.jpg"
                                                alt="user"><a href="#">
                                                <h6>Woven Jacket</h6>
                                                <p>$25</p>
                                            </a></div>
                                        <div class="card-img"> <img src="../assets/images/modal/2.jpg"
                                                alt="user"><a href="#">
                                                <h6>Printed Dresses</h6>
                                                <p>$25</p>
                                            </a></div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="card-img"> <img src="../assets/images/modal/3.jpg"
                                                alt="user"><a href="#">
                                                <h6>Woven Jacket</h6>
                                                <p>$25</p>
                                            </a></div>
                                        <div class="card-img"> <img src="../assets/images/modal/4.jpg"
                                                alt="user"><a href="#">
                                                <h6>Printed Dresses</h6>
                                                <p>$25</p>
                                            </a></div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="card-img"> <img src="../assets/images/modal/5.jpg"
                                                alt="user"><a href="#">
                                                <h6>Woven Jacket</h6>
                                                <p>$25</p>
                                            </a></div>
                                        <div class="card-img"> <img src="../assets/images/modal/6.jpg"
                                                alt="user"><a href="#">
                                                <h6>Printed Dresses</h6>
                                                <p>$25</p>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas offcanvas-end shopping-details" id="offcanvasRight" tabindex="-1"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h4 class="offcanvas-title" id="offcanvasRightLabel">Shopping Cart</h4><button class="btn-close"
                        type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body theme-scrollbar">
                    <ul class="offcanvas-cart">
                        <li> <a href="#"> <img src="../assets/images/cart/1.jpg" alt=""></a>
                            <div>
                                <h6 class="mb-0">Shirts Men's Clothing</h6>
                                <p>$35<del>$40</del><span class="btn-cart">$<span class="btn-cart__total"
                                            id="total">105</span></span></p>
                                <div class="btn-containter">
                                    <div class="btn-control"><button class="btn-control__remove"
                                            id="btn-remove">&minus;</button>
                                        <div class="btn-control__quantity">
                                            <div id="quantity-previous">2</div>
                                            <div id="quantity-current">3</div>
                                            <div id="quantity-next">4</div>
                                        </div><button class="btn-control__add" id="btn-add">+</button>
                                    </div>
                                </div>
                            </div><i class="iconsax delete-icon" data-icon="trash"></i>
                        </li>
                        <li> <a href="#"> <img src="../assets/images/cart/2.jpg" alt=""></a>
                            <div>
                                <h6 class="mb-0">Shirts Men's Clothing</h6>
                                <p>$35<del>$40</del><span class="btn-cart">$<span class="btn-cart__total"
                                            id="total1">105</span></span></p>
                                <div class="btn-containter">
                                    <div class="btn-control"><button class="btn-control__remove"
                                            id="btn-remove1">&minus;</button>
                                        <div class="btn-control__quantity">
                                            <div id="quantity1-previous">2</div>
                                            <div id="quantity1-current">3</div>
                                            <div id="quantity1-next">4</div>
                                        </div><button class="btn-control__add" id="btn-add1">+</button>
                                    </div>
                                </div>
                            </div><i class="iconsax delete-icon" data-icon="trash"></i>
                        </li>
                        <li> <a href="#"> <img src="../assets/images/cart/3.jpg" alt=""></a>
                            <div>
                                <h6 class="mb-0">Shirts Men's Clothing</h6>
                                <p>$35<del>$40</del><span class="btn-cart">$<span class="btn-cart__total"
                                            id="total2">105</span></span></p>
                                <div class="btn-containter">
                                    <div class="btn-control"><button class="btn-control__remove"
                                            id="btn-remove2">&minus;</button>
                                        <div class="btn-control__quantity">
                                            <div id="quantity2-previous">2</div>
                                            <div id="quantity2-current">3</div>
                                            <div id="quantity2-next">4</div>
                                        </div><button class="btn-control__add" id="btn-add2">+</button>
                                    </div>
                                </div>
                            </div><i class="iconsax delete-icon" data-icon="trash"></i>
                        </li>
                        <li> <a href="#"> <img src="../assets/images/cart/4.jpg" alt=""></a>
                            <div>
                                <h6 class="mb-0">Shirts Men's Clothing</h6>
                                <p>$35<del>$40</del><span class="btn-cart">$<span class="btn-cart__total"
                                            id="total3">105</span></span></p>
                                <div class="btn-containter">
                                    <div class="btn-control"><button class="btn-control__remove"
                                            id="btn-remove3">&minus;</button>
                                        <div class="btn-control__quantity">
                                            <div id="quantity3-previous">2</div>
                                            <div id="quantity3-current">3</div>
                                            <div id="quantity3-next">4</div>
                                        </div><button class="btn-control__add" id="btn-add3">+</button>
                                    </div>
                                </div>
                            </div><i class="iconsax delete-icon" data-icon="trash"></i>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas-footer">
                    <p>Spend <span>$ 14.81 </span>more and enjoy <span>FREE SHIPPING!</span></p>
                    <div class="footer-range-slider">
                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                            aria-valuenow="46" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-striped progress-bar-animated theme-default"
                                style="width: 46%"></div>
                        </div>
                    </div>
                    <div class="price-box">
                        <h6>Total :</h6>
                        <p>$ 49.59 USD</p>
                    </div>
                    <div class="cart-button"> <a class="btn btn_outline" href="cart.html"> View Cart</a><a
                            class="btn btn_black" href="check-out.html"> Checkout</a></div>
                </div>
            </div>
            <div class="modal theme-modal fade" id="quick-view" tabindex="-1" role="dialog" aria-modal="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body"><button class="btn-close" type="button" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-xs-12">
                                    <div class="quick-view-img">
                                        <div class="swiper modal-slide-1">
                                            <div class="swiper-wrapper ratio_square-2">
                                                <div class="swiper-slide"><img class="bg-img"
                                                        src="../assets/images/pro/1.jpg" alt=""></div>
                                                <div class="swiper-slide"><img class="bg-img"
                                                        src="../assets/images/pro/2.jpg" alt=""></div>
                                                <div class="swiper-slide"><img class="bg-img"
                                                        src="../assets/images/pro/3.jpg" alt=""></div>
                                                <div class="swiper-slide"><img class="bg-img"
                                                        src="../assets/images/pro/4.jpg" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="swiper modal-slide-2">
                                            <div class="swiper-wrapper ratio3_4">
                                                <div class="swiper-slide"><img class="bg-img"
                                                        src="../assets/images/pro/5.jpg" alt=""></div>
                                                <div class="swiper-slide"><img class="bg-img"
                                                        src="../assets/images/pro/6.jpg" alt=""></div>
                                                <div class="swiper-slide"><img class="bg-img"
                                                        src="../assets/images/pro/7.jpg" alt=""></div>
                                                <div class="swiper-slide"><img class="bg-img"
                                                        src="../assets/images/pro/8.jpg" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 rtl-text">
                                    <div class="product-right">
                                        <h3>Women Pink Shirt</h3>
                                        <h5>$32.96<del>$50.12</del></h5>
                                        <ul class="color-variant">
                                            <li class="bg-color-brown"></li>
                                            <li class="bg-color-chocolate"></li>
                                            <li class="bg-color-coffee"></li>
                                            <li class="bg-color-black"></li>
                                        </ul>
                                        <div class="border-product">
                                            <h6>Product details</h6>
                                            <p>Western yoke on an Indigo shirt made of 100% cotton. Ideal for informal
                                                gatherings, this top will ensure your comfort and style throughout the
                                                day.</p>
                                        </div>
                                        <div class="product-description">
                                            <div class="size-box">
                                                <ul>
                                                    <li class="active"><a href="#">s</a></li>
                                                    <li><a href="#">m</a></li>
                                                    <li><a href="#">l</a></li>
                                                    <li><a href="#">xl</a></li>
                                                </ul>
                                            </div>
                                            <h6 class="product-title">Quantity</h6>
                                            <div class="quantity"><button class="minus" type="button"><i
                                                        class="fa-solid fa-minus"></i></button><input type="number"
                                                    value="1" min="1" max="20"><button
                                                    class="plus" type="button"><i
                                                        class="fa-solid fa-plus"></i></button></div>
                                        </div>
                                        <div class="product-buttons"><a class="btn btn-solid" href="cart.html">Add to
                                                cart</a><a class="btn btn-solid" href="product.html">View detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas offcanvas-top search-details" id="offcanvasTop" tabindex="-1"
                aria-labelledby="offcanvasTopLabel">
                <div class="offcanvas-header"><button class="btn-close" type="button" data-bs-dismiss="offcanvas"
                        aria-label="Close"><i class="fa-solid fa-xmark"></i></button></div>
                <div class="offcanvas-body theme-scrollbar">
                    <div class="container">
                        <h3>Nhập từ khóa?</h3>
                        <div class="search-box"> <input type="search" name="text"
                                placeholder="I'm looking for…"><i class="iconsax" data-icon="search-normal-2"></i>
                        </div>


                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="title-box"> <img src="../assets/images/other-img/cookie.png" alt="">
                    <h3>Cookies Consent</h3>
                </div>
                <div class="info">
                    <p>We use cookies to improve our site and your shopping experience. By continuing to browse our site
                        you
                        accept our cookie policy.</p>
                </div>
                <div class="buttons"><button class="button btn btn_outline sm" id="acceptBtn">Accept</button><button
                        class="button btn btn_black sm">Decline</button></div>
            </div>
            <div class="theme-btns"><button class="btntheme" id="dark-btn"><i class="fa-regular fa-moon"></i>
                    <div class="text">Dark</div>
                </button><button class="btntheme rtlBtnEl" id="rtl-btn"><i class="fa-solid fa-repeat"></i>
                    <div class="rtl">Rtl</div>
                </button></div><!-- Bootstrap js-->
            <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script><!-- iconsax js -->
            <script src="{{ asset('assets/js/iconsax.js') }}"></script><!-- cursor js-->
            <script src="{{ asset('assets/js/stats.min.js') }}"></script>
            <script src="{{ asset('assets/js/cursor.js') }}"></script>
            <script src="{{ asset('assets/js/swiper-slider/swiper-bundle.min.js') }}"></script>
            <script src="{{ asset('assets/js/swiper-slider/swiper-custom.js') }}"></script>
            <script src="{{ asset('assets/js/grid-option.js') }}"></script>
            <script src="{{ asset('assets/js/countdown.js') }}"></script>
            <script src="{{ asset('assets/js/filter-range-slider.js') }}"></script>
            <script src="{{ asset('assets/js/collection-box.js') }}"></script><!-- touchspin-->
            <script src="{{ asset('assets/js/touchspin.js') }}"></script><!-- cookie js-->
            <script src="{{ asset('assets/js/cookie.js') }}"></script><!-- tost js -->
            <script src="{{ asset('assets/js/toastify.js') }}"></script>
            <script src="{{ asset('assets/js/theme-setting.js') }}"></script><!-- Theme js-->
            <script src="{{ asset('assets/js/script.js') }}"></script>
        </body>


        <script type="text/javascript">
            $(document).ready(function() {
                if ($(".dps-ht").length > 0) {
                    $(".dps-ht").each(function() {
                        var _id = $(this).attr("id");
                        var curId = $(this).attr("data-id");
                        var _ty = $(this).attr("data-type");
                        var _su = $(this).attr("data-subT");
                        var data = JSON.parse($("#jsLienhe").val().toString());
                        var data_length = Object.keys(data).length;
                        for (var i = 0; i < data_length; i++) {
                            if (data[i] != '') {
                                if (data[i].SetId == curId) {
                                    if (_ty == "1") {
                                        $("#" + _id).html(data[i].SettingContent);
                                    } else if (_ty == "2") {
                                        $("#" + _id).html(data[i].SettingValue);
                                        $("#" + _id).attr("href", "tel:" + data[i].SettingValue.toString()
                                            .replaceAll(".", "").replaceAll(" ", ""));
                                    } else if (_ty == "22") {
                                        $("#" + _id).html(
                                            "<i class=\"fa fa-phone\"></i><span class=\"text-danger\">" +
                                            data[i].SettingValue + "</span>");
                                        $("#" + _id).attr("href", "tel:" + data[i].SettingValue.toString()
                                            .replaceAll(".", "").replaceAll(" ", ""));
                                    } else if (_ty == "4") {
                                        $("#" + _id).html("<i class=\"fa fa-envelope\"></i> " + data[i]
                                            .SettingValue);
                                        $("#" + _id).attr("href", "mailto:" + data[i].SettingValue.toString());
                                    } else if (_ty == "3") {
                                        $("#" + _id).html(_su + data[i].SettingValue);
                                    } else if (_ty == "5") {
                                        $("#" + _id).attr("alt", data[i].SettingValue);
                                        $("#" + _id).attr("title", data[i].SettingValue);
                                    }
                                    break;
                                }
                            }
                        }
                    });
                }
            });
            $("*[data-click='clickToggle']").click(function() {
                var strClass = $(this).attr("data-class");
                var strId = $(this).attr("data-id");
                $("." + strClass).slideUp();
                $("#" + strId).slideDown();
                $(this).find(".arrow").toggleClass("fa-angle-down");
                $(this).find(".arrow").toggleClass("fa-angle-up");
            });
            $('.bxslider').bxSlider({
                mode: 'horizontal',
                captions: true,
                adaptiveHeight: true,
                auto: true,
            });
            $(".search-reg button").click(function() {
                var txtsearch = $(".search-reg #txt-search").val();
                window.location.href = "/tim-kiem?seachtext=" + txtsearch;
            });
            $(".register").click(function() {
                var emaildangki = $("#txt-dangki").val();
                if (emaildangki.length == 0) {
                    alert("Cần nhập vào email đầy đủ");
                    return;
                }
                $.ajax({
                    url: '/dang-ki-email',
                    data: '_strEmail=' + emaildangki,
                    dataType: 'text',
                    type: 'GET',
                    cache: false,
                    success: function(result) {
                        if (result == "1") {
                            alert("Đã đăng kí thông tin gửi thành công");
                            $("#txt-dangki").val('');
                        } else {
                            alert("Có lỗi từ hệ thống");
                        }
                    }
                });
            });
            $("*[data-click='clickToggle']:first").click();
        </script>



    </div>
</div>
