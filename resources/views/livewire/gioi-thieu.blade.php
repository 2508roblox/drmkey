<div>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Katie">
    <meta name="keywords" content="Katie">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Katie - Online Fashion Store </title><!-- Favicon icon-->
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon"><!-- Google Font Outfit-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/fontawesome.css"><!-- Iconsax icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/iconsax.css"><!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" id="rtl-link" href="../assets/css/vendors/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/swiper-slider/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/toastify.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <script defer src="../assets/css/landing_page.js"></script>
    <script defer src="../assets/css/style.js"></script>
    <link href="../assets/css/landing_page.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="tap-top">
        <div><i class="fa-solid fa-angle-up"></i></div>
    </div><span class="cursor"><span class="cursor-move-inner"><span class="cursor-inner"></span></span><span
            class="cursor-move-outer"><span class="cursor-outer"></span></span></span>
    <header>
        <div class="top_header">
            <p>Free Coupe Code: Summer Sale On Selected items Use:<span>NEW 26</span><a
                    href="collection-left-sidebar.html"> SHOP NOW</a></p>
        </div>
        <div class="custom-container container header-1">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="mobile-fix-option">
                        <ul>
                            <li> <a href="{{url('/')}}"><i class="iconsax" data-icon="home-1"></i>Home</a></li>
                            <li><a href="search.html"><i class="iconsax" data-icon="search-normal-2"></i>Search</a></li>
                            <li class="shopping-cart"> <a href="cart.html"><i class="iconsax"
                                        data-icon="shopping-cart"></i>Cart</a></li>

                            <li> <a href="dashboard.html"> Account</a></li>
                        </ul>
                    </div>
                    <div class="offcanvas offcanvas-start" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1"
                        aria-labelledby="staticBackdropLabel">
                        <div class="offcanvas-header">
                            <h3 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h3><button class="btn-close"
                                type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div></div>I will not close if you click outside of me.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="main-menu"> <a class="brand-logo" href="{{url('/')}}"> <img class="img-fluid for-light"
                                src="../assets/images/logo/logo.png" alt="logo"><img class="img-fluid for-dark"
                                src="../assets/images/logo/logo-white-1.png" alt="logo"></a>
                                <nav id="main-nav">
                                    <ul class="nav-menu sm-horizontal theme-scrollbar" id="sm-horizontal">

                                        <!-- Mục Sản phẩm (Bộ sưu tập) -->
                                        <li>
                                            <a class="nav-link" href="#">Bộ sưu tập<span><i class="fa-solid fa-angle-down"></i></span></a>
                                            <ul class="nav-submenu">
                                                <li><a href="#">Gọng cận</a></li>
                                                <li><a href="#">Gọng Lão đọc báo</a></li>
                                                <li><a href="#">Gọng trẻ em</a></li>
                                                <li><a href="#">Gọng trợ giá ƯU ĐÃI</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="nav-link" href="{{url('san-pham')}}">Sản phẩm</a></li>

                                        <!-- Mục Dịch Vụ -->
                                        <li><a class="nav-link" href="#">Dịch vụ tròng</a></li>

                                        <!-- Mục Về Chúng Tôi -->
                                        <li><a class="nav-link" href="#">Về chúng tôi</a></li>
                                    </ul>
                                </nav>
                        <div class="sub_header">
                            <div class="toggle-nav" id="toggle-nav"><i
                                    class="fa-solid fa-bars-staggered sidebar-bar"></i></div>
                            <ul class="justify-content-end">
                                <li> <button href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                                        aria-controls="offcanvasTop"><i class="iconsax"
                                            data-icon="search-normal-2"></i></button></li>

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
                                        <a href="/gio-hang" title="Xem giỏ hàng" wire:navigate><i class="iconsax pe-2" data-icon="basket-2"> </i> Giỏ hàng</a>
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
                        <h4>Giới thiệu </h4>
                    </div>
                    <div class="col-sm-6">
                        <ul class="breadcrumb float-end">
                            <li class="breadcrumb-item"> <a href="{{url('/')}}">Trang chủ </a></li>
                            <li class="breadcrumb-item active"> <a href="#">Giới thiệu </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-b-space pt-0">
        <div class="custom-container container">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-1a2e511 elementor-widget elementor-widget-heading" data-id="1a2e511" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
    <style>/*! elementor - v3.23.0 - 05-08-2024 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default">Về Martian</h2>		</div>
        </div>
        <div class="elementor-element elementor-element-f73e3ec elementor-widget elementor-widget-image" data-id="f73e3ec" data-element_type="widget" data-widget_type="image.default">
        <div class="elementor-widget-container">
    <style>/*! elementor - v3.23.0 - 05-08-2024 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>										<img fetchpriority="high" decoding="async" width="1024" height="455" src="https://martian.vn/wp-content/uploads/2023/10/Ve-Martian-1024x455.jpeg" class="attachment-large size-large wp-image-3936" srcset="https://martian.vn/wp-content/uploads/2023/10/Ve-Martian-1024x455.jpeg 1024w, https://martian.vn/wp-content/uploads/2023/10/Ve-Martian-600x267.jpeg 600w, https://martian.vn/wp-content/uploads/2023/10/Ve-Martian-150x67.jpeg 150w, https://martian.vn/wp-content/uploads/2023/10/Ve-Martian-768x342.jpeg 768w, https://martian.vn/wp-content/uploads/2023/10/Ve-Martian-1536x683.jpeg 1536w, https://martian.vn/wp-content/uploads/2023/10/Ve-Martian-2048x911.jpeg 2048w, https://martian.vn/wp-content/uploads/2023/10/Ve-Martian-350x156.jpeg 350w, https://martian.vn/wp-content/uploads/2023/10/Ve-Martian-650x289.jpeg 650w, https://martian.vn/wp-content/uploads/2023/10/Ve-Martian-1000x445.jpeg 1000w, https://martian.vn/wp-content/uploads/2023/10/Ve-Martian-2000x889.jpeg 2000w" sizes="(max-width: 1024px) 100vw, 1024px">													</div>
        </div>
        <div class="elementor-element elementor-element-62c68c7 elementor-widget elementor-widget-text-editor" data-id="62c68c7" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
    <style>/*! elementor - v3.23.0 - 05-08-2024 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				<div><span dir="auto">Thành lập từ cuối năm 2021, Martian là thương hiệu kính mắt mang định hướng thời trang hiện đại. <br></span><span dir="auto"><br></span></div>
<div><span dir="auto">100% sản phẩm của Martian được thiết kế bởi người Việt và hoàn thiện qua bàn tay chế tác của những nghệ nhân lành nghề. Mỗi chiếc kính của Martian đều mang tiếng nói của những nhà thiết kế trẻ đam mê thời trang, được truyền đạt qua sự tỉ mỉ trong từng chi tiết, cấu trúc của sản phẩm. Chúng tôi lựa chọn sản xuất với nguyên liệu cao cấp Cellulose Acetate được chiết xuất từ sợi bông thiên nhiên nổi bật với tính chất bền, nhẹ. Một trong những đối tác hàng đầu của Martian về nguyên liệu là thương hiệu Mazzucchelli 1849 (Italy) … <br></span></div>
<div><span dir="auto">Bên cạnh mong muốn đem đến những sản phẩm kính mắt chất lượng, Martian luôn sẵn sàng đồng hành và mang lại trải nghiệm dịch vụ tốt nhất đến người dùng.</span></div>						</div>
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
                                    <img class="img-fluid" src="../assets/images/logo/logo-white-1.png" alt="Footer Logo">
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
                                    <li><a class="nav" href="#">Chính Sách Bảo Hành & Đổi Trả</a></li>
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
                                    <li><a class="nav" href="mailto:martian@martian.vn">Email Chúng Tôi</a></li>
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
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="46"
                    aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated theme-default"
                        style="width: 46%"></div>
                </div>
            </div>
            <div class="price-box">
                <h6>Total :</h6>
                <p>$ 49.59 USD</p>
            </div>
            <div class="cart-button"> <a class="btn btn_outline" href="cart.html"> View Cart</a><a class="btn btn_black"
                    href="check-out.html"> Checkout</a></div>
        </div>
    </div>
    <div class="offcanvas offcanvas-top search-details" id="offcanvasTop" tabindex="-1"
        aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header"><button class="btn-close" type="button" data-bs-dismiss="offcanvas"
                aria-label="Close"><i class="fa-solid fa-xmark"></i></button></div>
        <div class="offcanvas-body theme-scrollbar">
            <div class="container">
                <h3>What are you trying to find?</h3>
                <div class="search-box"> <input type="search" name="text" placeholder="I'm looking for…"><i
                        class="iconsax" data-icon="search-normal-2"></i></div>
                <h4>Popular Searches</h4>
                <ul class="rapid-search">
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax" data-icon="search-normal-2"></i>Jeans
                            Women</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                data-icon="search-normal-2"></i>Blazer Women</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax" data-icon="search-normal-2"></i>Jeans
                            Men</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                data-icon="search-normal-2"></i>Blazer Men</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                data-icon="search-normal-2"></i>T-Shirts Men</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax" data-icon="search-normal-2"></i>Shoes
                            Men</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                data-icon="search-normal-2"></i>T-Shirts Women</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                data-icon="search-normal-2"></i>Bags</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                data-icon="search-normal-2"></i>Sneakers Women</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                data-icon="search-normal-2"></i>Dresses</a></li>
                </ul>
                <h4>You Might Like</h4>
                <div class="row gy-4 ratio_square-2 preemptive-search">
                    <div class="col-xl-2 col-sm-4 col-6">
                        <div class="product-box-6">
                            <div class="img-wrapper">
                                <div class="product-image"><a href="product.html"> <img class="bg-img"
                                            src="../assets/images/product/product-2/blazers/1.jpg" alt="product"></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div><a href="product.html">
                                        <h6> Women's Stylish Top</h6>
                                    </a>
                                    <p>$50.00 </p>
                                    <ul class="rating">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li>4+</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-4 col-6">
                        <div class="product-box-6">
                            <div class="img-wrapper">
                                <div class="product-image"><a href="product.html"> <img class="bg-img"
                                            src="../assets/images/product/product-2/blazers/2.jpg" alt="product"></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div><a href="product.html">
                                        <h6> Women's Stylish Top</h6>
                                    </a>
                                    <p>$95.00 <del>$140.00</del></p>
                                    <ul class="rating">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li>3+</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-4 col-6">
                        <div class="product-box-6">
                            <div class="img-wrapper">
                                <div class="product-image"><a href="product.html"> <img class="bg-img"
                                            src="../assets/images/product/product-2/blazers/3.jpg" alt="product"></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div><a href="product.html">
                                        <h6> Women's Stylish Top</h6>
                                    </a>
                                    <p>$80.00 <del>$140.00</del></p>
                                    <ul class="rating">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li>4</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-4 col-6">
                        <div class="product-box-6">
                            <div class="img-wrapper">
                                <div class="product-image"><a href="product.html"> <img class="bg-img"
                                            src="../assets/images/product/product-2/blazers/4.jpg" alt="product"></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div><a href="product.html">
                                        <h6> Women's Stylish Top</h6>
                                    </a>
                                    <p>$90.00 </p>
                                    <ul class="rating">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li>2+</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-4 col-6">
                        <div class="product-box-6">
                            <div class="img-wrapper">
                                <div class="product-image"><a href="product.html"> <img class="bg-img"
                                            src="../assets/images/product/product-2/blazers/5.jpg" alt="product"></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div><a href="product.html">
                                        <h6> Women's Stylish Top</h6>
                                    </a>
                                    <p>$180.00 <del>$140.00</del></p>
                                    <ul class="rating">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li>4+</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-4 col-6">
                        <div class="product-box-6">
                            <div class="img-wrapper">
                                <div class="product-image"><a href="product.html"> <img class="bg-img"
                                            src="../assets/images/product/product-2/blazers/6.jpg" alt="product"></a>
                                </div>
                            </div>
                            <div class="product-detail"><a href="product.html">
                                    <h6> Women's Stylish Top</h6>
                                </a>
                                <p>$120.00 </p>
                                <ul class="rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                    <li>4+</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="title-box"> <img src="../assets/images/other-img/cookie.png" alt="">
            <h3>Cookies Consent</h3>
        </div>
        <div class="info">
            <p>We use cookies to improve our site and your shopping experience. By continuing to browse our site you
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
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script><!-- iconsax js -->
    <script src="../assets/js/iconsax.js"> </script><!-- cursor js-->
    <script src="../assets/js/stats.min.js"> </script>
    <script src="../assets/js/cursor.js"> </script>
    <script src="../assets/js/swiper-slider/swiper-bundle.min.js"></script>
    <script src="../assets/js/swiper-slider/swiper-custom.js"></script><!-- touchspin-->
    <script src="../assets/js/touchspin.js"></script><!-- cookie js-->
    <script src="../assets/js/cookie.js"></script><!-- tost js -->
    <script src="../assets/js/toastify.js"></script>
    <script src="../assets/js/theme-setting.js"></script><!-- Theme js-->
    <script src="../assets/js/script.js"></script>
</body>

</div>
