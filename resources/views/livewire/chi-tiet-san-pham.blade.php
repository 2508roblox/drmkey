 <div>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Katie">
    <meta name="keywords" content="Katie">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>Katie - Online Fashion Store </title><!-- Favicon icon-->
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon"><!-- Google Font Outfit-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/fontawesome.css')}}"><!-- Iconsax icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/iconsax.css')}}"><!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" id="rtl-link" href="{{ asset('assets/css/vendors/bootstrap.css') }}">


    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/swiper-slider/swiper-bundle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/toastify.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <script defer src="{{asset('assets/css/landing_page.js')}}"></script>
    <script defer src="{{asset('assets/css/style.js')}}"></script>
    <link href="{{asset('assets/css/landing_page.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
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
                            <li> <a href="{{ url('/') }}"><i class="iconsax" data-icon="home-1"></i>Home</a></li>
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
                    <div class="main-menu"> <a class="brand-logo" href="{{ url('/') }}"> <img class="img-fluid for-light"
                                src="{{asset('assets/images/logo/logo.png')}}" alt="logo"> </a>
                                <nav id="main-nav">
                                    <ul class="nav-menu sm-horizontal theme-scrollbar" id="sm-horizontal">
                                        <li class="mobile-back" id="mobile-back">Back<i class="fa-solid fa-angle-right ps-2"
                                                aria-hidden="true"></i></li>

                                        <li> <a class="nav-link" href="{{ url('/') }}">Bộ sưu tập<span> <i
                                                        class="fa-solid fa-angle-down"></i></span></a>
                                            <ul class="nav-submenu">
                                                <li><a href="{{ url('/') }}">Gọng cận</a></li>
                                                <li><a href="{{ url('/collection/gong-lao-doc-bao') }}">Gọng Lão đọc báo</a></li>
                                                <li><a href="{{ url('/collection/gong-tre-em') }}">Gọng trẻ em</a></li>
                                                <li><a href="{{ url('/collection/gong-tro-gia-uu-dai') }}">Gọng trợ giá ƯU ĐÃI</a></li>
                                            </ul>
                                        </li>


                                        <li><a class="nav-link" href="{{url('san-pham')}}">Sản phẩm</a></li>
                                        <!-- Dịch vụ tròng -->
                                        <li>
                                            <a class="nav-link" href="{{ url('/services/trong') }}">Dịch vụ tròng </a>
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
                        <h4>Chi tiết sản phẩm</h4>
                    </div>
                    <div class="col-sm-6">
                        <ul class="breadcrumb float-end">
                            <li class="breadcrumb-item"> <a href="{{ url('/') }}">Home </a></li>
                            <li class="breadcrumb-item active"> <a href="#">Chi tiết sản phẩm</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-b-space pt-0 product-thumbnail-page">
        <div class="custom-container container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="row gy-3 sticky">
                        <div class="col-12">
                            <div class="swiper product-slider-thumb-1 product-thumbnail">
                                <div class="swiper-wrapper ratio3_5">
                                    @foreach($product->images as $image)
                                        <div class="swiper-slide">
                                            <img class="bg-img" src="{{ Storage::url($image) }}" alt="Product Image">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="swiper product-slider-1">
                                <div class="swiper-wrapper">
                                    @foreach($product->images as $image)

                                    <div class="swiper-slide"> <img class="img-fluid"
                                        src="{{ Storage::url($image) }}" alt="">
                                    </div>
                                @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-detail-box" style="">
                        <div class="product-option">
                            <h3>{{ $product->name }}</h3>
                            <p>{{ number_format($product->price, 0, ',', '.') }} VNĐ
                                @if($product->old_price)
                                <del>{{ number_format($product->old_price, 0, ',', '.') }} VNĐ</del>
                                @endif
                            </p>

                            <div class="quantity-box d-flex align-items-center gap-3" style="  flex-direction: column;
    align-items: start !important;
    justify-content: center;
">
                                <div class="quantity">
                                    <button class="minus" type="button" wire:click="decrementQuantity"><i class="fa-solid fa-minus"></i></button>
                                    <input type="number" id="txtnumcart" value="{{ $quantity }}" min="1" max="100" wire:model="quantity">
                                    <button class="plus" type="button" wire:click="incrementQuantity"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                <div class="d-flex align-items-center gap-3 w-100">
                                    <button   class="btn btn_black sm" wire:click="addToCart({{ $product->id }})">
                                        <i class="fa fa-shopping-cart"></i> Đặt hàng
                                    </button>
                                </div>
                            </div>

                            <div class="motasoluot">
                                <ul class="no-ul list-de">
                                    <li>
                                        <b>Tên sản phẩm: </b> <span>{{ $product->name }}</span>
                                    </li>
                                    <br>
                                    <li>
                                        <b>Id:</b> <span>{{ $product->id }}</span>
                                    </li>
                                    <br>

                                    <li>
                                        <b>Giá: </b><span class="text-danger"><b>{{ number_format($product->price, 0, ',', '.') }} VNĐ</b></span>
                                    </li>
                                    <br>

                                    <li>
                                        <b>Kho hàng:</b>
                                        <span>{{ $product->is_stock ? 'Còn hàng' : 'Hết hàng' }}</span>
                                    </li>
                                    <br>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="product-section-box x-small-section pt-0">
            <div class="custom-container container">
                <div class="row">
                    <div class="col-12">
                        <ul class="product-tab nav nav-tabs nav-underline theme-scrollbar" id="Product" role="tablist">
                            <li class="nav-item" role="presentation"><button class="nav-link active"
                                    id="Description-tab" data-bs-toggle="tab" data-bs-target="#Description-tab-pane"
                                    role="tab" aria-controls="Description-tab-pane"
                                    aria-selected="true">Mô tả chung</button></li>

                            <li class="nav-item" role="presentation"><button class="nav-link" id="Reviews-tab"
                                    data-bs-toggle="tab" data-bs-target="#Reviews-tab-pane" role="tab"
                                    aria-controls="Reviews-tab-pane" aria-selected="false">Reviews</button></li>
                        </ul>
                        <div class="tab-content product-content" id="ProductContent">
                            <div class="tab-pane fade show active" id="Description-tab-pane" role="tabpanel"
                                aria-labelledby="Description-tab" tabindex="0">
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <div class="reg-d form-group">
                                            <a class="reg-dtitle">Mô tả chung</a>
                                        </div>
                                        <div class="news-detail form-group">
                                            <p><strong>&nbsp;TH&Ocirc;NG SỐ CƠ BẢN:</strong></p>
                                            <ul>
                                                {!! Str::markdown($product->description) !!}
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="specification-tab-pane" role="tabpanel"
                                aria-labelledby="specification-tab" tabindex="0">
                                <p>I like to be real. I don't like things to be staged or fussy. Grunge is a hippied
                                    romantic version of punk. I have my favourite fashion decade, yes, yes, yes: '60s.
                                    It was a sort of little revolution; the clothes were amazing but not too
                                    exaggerated. Fashions fade, style is eternal. A girl should be two things: classy
                                    and fabulous.</p>
                                <div class="table-responsive theme-scrollbar">
                                    <table class="specification-table table striped">
                                        <tr>
                                            <th>Product Dimensions</th>
                                            <td>15 x 15 x 3 cm; 250 Grams</td>
                                        </tr>
                                        <tr>
                                            <th>Date First Available</th>
                                            <td>5 April 2021</td>
                                        </tr>
                                        <tr>
                                            <th>Manufacturer&rlm;</th>
                                            <td>Aditya Birla Fashion and Retail Limited</td>
                                        </tr>
                                        <tr>
                                            <th>ASIN</th>
                                            <td>B06Y28LCDN</td>
                                        </tr>
                                        <tr>
                                            <th>Item model number</th>
                                            <td>AMKP317G04244</td>
                                        </tr>
                                        <tr>
                                            <th>Department</th>
                                            <td>Men</td>
                                        </tr>
                                        <tr>
                                            <th>Item Weight</th>
                                            <td>250 G</td>
                                        </tr>
                                        <tr>
                                            <th>Item Dimensions LxWxH</th>
                                            <td>15 x 15 x 3 Centimeters</td>
                                        </tr>
                                        <tr>
                                            <th>Net Quantity</th>
                                            <td>1 U</td>
                                        </tr>
                                        <tr>
                                            <th>Included Components&rlm;</th>
                                            <td>1-T-shirt</td>
                                        </tr>
                                        <tr>
                                            <th>Generic Name</th>
                                            <td>T-shirt</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="question-tab-pane" role="tabpanel"
                                aria-labelledby="question-tab" tabindex="0">
                                <div class="question-main-box">
                                    <h5>Have Doubts Regarding This Product ?</h5>
                                    <h6 data-bs-toggle="modal" data-bs-target="#question-modal" title="Quick View"
                                        tabindex="0">Post Your Question</h6>
                                </div>
                                <div class="question-answer">
                                    <ul>
                                        <li>
                                            <div class="question-box">
                                                <p>Q1 </p>
                                                <h6>Which designer created the little black dress?</h6>
                                                <ul class="link-dislike-box">
                                                    <li> <a href="#"><i class="iconsax" data-icon="like"> </i>0</a></li>
                                                    <li> <a href="#"><i class="iconsax" data-icon="dislike"> </i>0</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="answer-box"><b>Ans.</b><span>The little black dress (LBD) is
                                                    often attributed to the iconic fashion designer Coco Chanel. She
                                                    popularized the concept of the LBD in the 1920s, offering a simple,
                                                    versatile, and elegant garment that became a staple in women's
                                                    fashion.</span></div>
                                        </li>
                                        <li>
                                            <div class="question-box">
                                                <p>Q2 </p>
                                                <h6>Which First Lady influenced women's fashion in the 1960s?</h6>
                                                <ul class="link-dislike-box">
                                                    <li> <a href="#"><i class="iconsax" data-icon="like"> </i>0</a></li>
                                                    <li> <a href="#"><i class="iconsax" data-icon="dislike"> </i>0</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="answer-box"><b>Ans.</b><span>The First Lady who significantly
                                                    influenced women's fashion in the 1960s was Jacqueline Kennedy, the
                                                    wife of President John F. Kennedy. She was renowned for her elegant
                                                    and sophisticated style, often wearing simple yet chic outfits that
                                                    set trends during her time in the White House. </span></div>
                                        </li>
                                        <li>
                                            <div class="question-box">
                                                <p>Q3 </p>
                                                <h6>What was the first name of the fashion designer Chanel?</h6>
                                                <ul class="link-dislike-box">
                                                    <li> <a href="#"><i class="iconsax" data-icon="like"> </i>0</a></li>
                                                    <li> <a href="#"><i class="iconsax" data-icon="dislike"> </i>0</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="answer-box"><b>Ans.</b><span>The first name of the fashion
                                                    designer Chanel was Gabrielle. Gabrielle "Coco" Chanel was a
                                                    pioneering French fashion designer known for her timeless designs,
                                                    including the iconic Chanel suit and the little black dress.</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="question-box">
                                                <p>Q4 </p>
                                                <h6>Carnaby Street, famous in the 60s as a fashion center, is in which
                                                    capital?</h6>
                                                <ul class="link-dislike-box">
                                                    <li> <a href="#"><i class="iconsax" data-icon="like"> </i>0</a></li>
                                                    <li> <a href="#"><i class="iconsax" data-icon="dislike"> </i>0</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="answer-box"><b>Ans.</b><span>Carnaby Street, famous for its
                                                    association with fashion and youth culture in the 1960s, is located
                                                    in London, the capital of the United Kingdom.🎉</span></div>
                                        </li>
                                        <li>
                                            <div class="question-box">
                                                <p>Q5 </p>
                                                <h6>Threadless is a company selling unique what?</h6>
                                                <ul class="link-dislike-box">
                                                    <li> <a href="#"><i class="iconsax" data-icon="like"> </i>0</a></li>
                                                    <li> <a href="#"><i class="iconsax" data-icon="dislike"> </i>0</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="answer-box"><b>Ans.</b><span>Threadless is a company selling
                                                    unique T-shirts.</span></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Reviews-tab-pane" role="tabpanel"
                                aria-labelledby="Reviews-tab" tabindex="0">
                                <div class="row gy-4">
                                    <div class="col-lg-4">
                                        <div class="review-right">
                                            <div class="customer-rating">
                                                <div class="global-rating">
                                                    <div>
                                                        <h5>4.5</h5>
                                                    </div>
                                                    <div>
                                                        <h6>Average Ratings</h6>
                                                        <ul class="rating p-0 mb">
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                            <li><i class="fa-regular fa-star"></i></li>
                                                            <li><span>(14)</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <ul class="rating-progess">
                                                    <li>
                                                        <p>5 Star</p>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Animated striped example" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                                style="width: 80%"></div>
                                                        </div>
                                                        <p>80%</p>
                                                    </li>
                                                    <li>
                                                        <p>4 Star</p>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Animated striped example" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                                style="width: 70%"></div>
                                                        </div>
                                                        <p>70%</p>
                                                    </li>
                                                    <li>
                                                        <p>3 Star</p>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Animated striped example" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                                style="width: 55%"></div>
                                                        </div>
                                                        <p>55%</p>
                                                    </li>
                                                    <li>
                                                        <p>2 Star</p>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Animated striped example" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                                style="width: 40%"></div>
                                                        </div>
                                                        <p>40%</p>
                                                    </li>
                                                    <li>
                                                        <p>1 Star</p>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Animated striped example" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                                style="width: 25%"></div>
                                                        </div>
                                                        <p>25%</p>
                                                    </li>
                                                </ul><button class="btn reviews-modal" data-bs-toggle="modal"
                                                    data-bs-target="#Reviews-modal" title="Quick View"
                                                    tabindex="0">Write a review</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="comments-box">
                                            <h5>Comments </h5>
                                            <ul class="theme-scrollbar">
                                                <li>
                                                    <div class="comment-items">
                                                        <div class="user-img"> <img src="{{asset('assets/images/user/1.jpg')}}"
                                                                alt=""></div>
                                                        <div class="user-content">
                                                            <div class="user-info">
                                                                <div class="d-flex justify-content-between gap-3">
                                                                    <h6> <i class="iconsax"
                                                                            data-icon="user-1"></i>Michel Poe</h6><span>
                                                                        <i class="iconsax" data-icon="clock"></i>Mar 29,
                                                                        2022</span>
                                                                </div>
                                                                <ul class="rating p-0 mb">
                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                    <li><i class="fa-regular fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <p>Khaki cotton blend military jacket flattering fit mock
                                                                horn buttons and patch pockets showerproof black
                                                                lightgrey. Printed lining patch pockets jersey blazer
                                                                built in pocket square wool casual quilted jacket
                                                                without hood azure.</p><a href="#"> <span> <i
                                                                        class="iconsax" data-icon="undo"></i>
                                                                    Replay</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="reply">
                                                    <div class="comment-items">
                                                        <div class="user-img"> <img src="{{asset('assets/images/user/2.jpg')}}"
                                                                alt=""></div>
                                                        <div class="user-content">
                                                            <div class="user-info">
                                                                <div class="d-flex justify-content-between gap-3">
                                                                    <h6> <i class="iconsax"
                                                                            data-icon="user-1"></i>Michel Poe</h6><span>
                                                                        <i class="iconsax" data-icon="clock"></i>Mar 29,
                                                                        2022</span>
                                                                </div>
                                                                <ul class="rating p-0 mb">
                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                    <li><i class="fa-regular fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <p>Khaki cotton blend military jacket flattering fit mock
                                                                horn buttons and patch pockets showerproof black
                                                                lightgrey. Printed lining patch pockets jersey blazer
                                                                built in pocket square wool casual quilted jacket
                                                                without hood azure.</p><a href="#"> <span> <i
                                                                        class="iconsax" data-icon="undo"></i>
                                                                    Replay</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comment-items">
                                                        <div class="user-img"> <img src="{{asset('assets/images/user/3.jpg')}}"
                                                                alt=""></div>
                                                        <div class="user-content">
                                                            <div class="user-info">
                                                                <div class="d-flex justify-content-between gap-3">
                                                                    <h6> <i class="iconsax"
                                                                            data-icon="user-1"></i>Michel Poe</h6><span>
                                                                        <i class="iconsax" data-icon="clock"></i>Mar 29,
                                                                        2022</span>
                                                                </div>
                                                                <ul class="rating p-0 mb">
                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                    <li><i class="fa-solid fa-star"></i></li>
                                                                    <li><i class="fa-regular fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <p>Khaki cotton blend military jacket flattering fit mock
                                                                horn buttons and patch pockets showerproof black
                                                                lightgrey. Printed lining patch pockets jersey blazer
                                                                built in pocket square wool casual quilted jacket
                                                                without hood azure.</p><a href="#"> <span> <i
                                                                        class="iconsax" data-icon="undo"></i>
                                                                    Replay</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-b-space pt-0">
        <div class="custom-container container product-contain">
            <div class="title text-start">
                <h3>Sản phẩm liên quan</h3><svg>
                    <use href="{{asset('assets/svg/icon-sprite.svg#main-line')}}"></use>
                </svg>
            </div>
            <div class="swiper special-offer-slide-2">
                <div class="swiper-wrapper ratio1_3">
                    @foreach($relatedProducts as $product)
                        <div class="swiper-slide">
                            <div class="product-box-3">
                                <div class="img-wrapper">
                                    <div class="label-block">
                                        <span class="lable-1">NEW</span>
                                        <a class="label-2 wishlist-icon" href="javascript:void(0)" tabindex="0">
                                            <i class="iconsax" data-icon="heart" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></i>
                                        </a>
                                    </div>
                                    <div class="product-image">
                                        <a class="pro-first" href="{{ url('/san-pham/' . $product->category->slug . '/' . $product->slug) }}">
                                            <img class="bg-img" alt="{{ $product->name }}" src="{{ Storage::url(is_array($product->images) ? $product->images[0] : $product->images) }}">
                                        </a>

                                    </div>
                                    <div class="cart-info-icon">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="0">
                                            <i class="iconsax" data-icon="basket-2" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="Add to cart"></i>
                                        </a>
                                        <a href="compare.html" tabindex="0">
                                            <i class="iconsax" data-icon="arrow-up-down" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="Compare"></i>
                                        </a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                            <i class="iconsax" data-icon="eye" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="Quick View"></i>
                                        </a>
                                    </div>
                                    <!-- Countdown or other additional elements can go here -->
                                </div>
                                <div class="product-detail">
                                    <ul class="rating">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li>4.3</li>
                                    </ul>
                                    <a href="{{ url('/san-pham/' . $product->category->slug . '/' . $product->slug) }}">
                                        <h6>{{ $product->name }}</h6>
                                    </a>
                                    <p>{{ number_format($product->price) }} VNĐ
                                        @if($product->old_price)
                                            <del>{{ number_format($product->old_price) }} VNĐ</del>

                                        @endif
                                        {{ number_format($product->price, 0, ',', '.') }} VNĐ
                                        @if($product->discount)
                                            <del>{{ number_format($product->original_price, 0, ',', '.') }} VNĐ</del>
                                            <span>-{{ $product->discount }}%</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                <li> <a href="#"> <img src="{{asset('assets/images/cart/1.jpg')}}" alt=""></a>
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
                <li> <a href="#"> <img src="{{asset('assets/images/cart/2.jpg')}}" alt=""></a>
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
                <li> <a href="#"> <img src="{{asset('assets/images/cart/3.jpg')}}" alt=""></a>
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
                <li> <a href="#"> <img src="{{asset('assets/images/cart/4.jpg')}}" alt=""></a>
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
    <div class="customer-reviews-modal modal theme-modal fade" id="Reviews-modal" tabindex="-1" role="dialog"
        aria-modal="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Write A Review</h4><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="reviews-product">
                                <div> <img src="{{asset('assets/images/modal/1.jpg')}}" alt="">
                                    <div>
                                        <h5>Denim Skirts Corset Blazer</h5>
                                        <p>$20.00 <del>$35.00</del></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="customer-rating"><label class="form-label">Review Content :</label>
                                <ul class="rating p-0 mb">
                                    <li><i class="fa-regular fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"> </i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group"> <label class="form-label">Review Content :</label><textarea
                                    class="form-control" id="comment" cols="30" rows="4"
                                    placeholder="Write your comments here..."></textarea></div>
                        </div><button class="btn btn-submit" type="submit" data-bs-dismiss="modal"
                            aria-label="Close">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reviews-modal modal theme-modal fade" id="question-modal" tabindex="-1" role="dialog" aria-modal="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Ask a question</h4><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="reviews-product">
                                <div> <img src="{{asset('assets/images/modal/1.jpg')}}" alt="">
                                    <div>
                                        <h5>Denim Skirts Corset Blazer</h5>
                                        <p>$20.00 <del>$35.00</del></p>
                                        <ul class="rating p-0 mb">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-regular fa-star"> </i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group"> <label class="form-label">Your Question</label><textarea
                                    class="form-control" id="comment-1" cols="30" rows="5"
                                    placeholder="Write Your Question here..."></textarea></div>
                        </div>
                        <div class="modal-button-group"><button class="btn btn-cancel" type="submit"
                                data-bs-dismiss="modal" aria-label="Close">Cancel</button><button class="btn btn-submit"
                                type="submit" data-bs-dismiss="modal" aria-label="Close">Submit</button></div>
                    </div>
                </div>
            </div>
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
                                        <div class="swiper-slide"><img class="bg-img" src="{{asset('assets/images/pro/1.jpg')}}"
                                                alt=""></div>
                                        <div class="swiper-slide"><img class="bg-img" src="{{asset('assets/images/pro/2.jpg')}}"
                                                alt=""></div>
                                        <div class="swiper-slide"><img class="bg-img" src="{{asset('assets/images/pro/3.jpg')}}"
                                                alt=""></div>
                                        <div class="swiper-slide"><img class="bg-img" src="{{asset('assets/images/pro/4.jpg')}}"
                                                alt=""></div>
                                    </div>
                                </div>
                                <div class="swiper modal-slide-2">
                                    <div class="swiper-wrapper ratio3_4">
                                        <div class="swiper-slide"><img class="bg-img" src="{{asset('assets/images/pro/5.jpg')}}"
                                                alt=""></div>
                                        <div class="swiper-slide"><img class="bg-img" src="{{asset('assets/images/pro/6.jpg')}}"
                                                alt=""></div>
                                        <div class="swiper-slide"><img class="bg-img" src="{{asset('assets/images/pro/7.jpg')}}"
                                                alt=""></div>
                                        <div class="swiper-slide"><img class="bg-img" src="{{asset('assets/images/pro/8.jpg')}}"
                                                alt=""></div>
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
                                        gatherings, this top will ensure your comfort and style throughout the day.</p>
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
                                                class="fa-solid fa-minus"></i></button><input type="number" value="1"
                                            min="1" max="20"><button class="plus" type="button"><i
                                                class="fa-solid fa-plus"></i></button></div>
                                </div>
                                <div class="product-buttons"><a class="btn btn-solid" href="cart.html">Add to cart</a><a
                                        class="btn btn-solid" href="product.html">View detail</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="terms-conditions-modal modal theme-modal fade" id="terms-conditions-modal" tabindex="-1" role="dialog"
        aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Delivery & return</h4><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <ul class="returns-policy">
                        <li> <b>Return Policy: </b>Most unopened items can be returned within 30 days of delivery for a
                            full refund. We cover return shipping costs for our errors (e.g., incorrect or defective
                            items). Refunds typically process within four weeks, although often faster. This includes
                            return transit time (5-10 business days), processing upon receipt (3-5 business days), and
                            your bank's refund processing (5-10 business days). To return an item, log in, access your
                            order, and click "Return Item(s)." We'll email you once your return is processed.</li>
                        <li>– Free shipping on orders over $100.</li>
                        <li>– Returns accepted within 10 days of receipt or tracking number for unworn items. </li>
                        <li>– Items must be in their original packaging and</li>
                        <li>– Standard shipping charges apply otherwise. Please refer to our delivery Terms & Conditions
                            for further details.</li>
                        <li>– Returned products must be in original packaging, safety wrapped, undamaged, and unworn.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal theme-modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1">
                    <div class="custom-container container">
                        <div class="row">
                            <div class="col-12 px-0">
                                <div class="modal-bg addtocart"><button class="btn-close" type="button"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="d-flex"><a href="#"><img class="img-fluid blur-up lazyload pro-img"
                                                src="{{asset('assets/images/modal/0.jpg')}}" alt=""></a>
                                        <div class="add-card-content align-self-center text-center"><a href="#">
                                                <h6><i class="fa-solid fa-check"> </i>Item <span>men full
                                                        sleeves</span><span> successfully added to your Cart</span></h6>
                                            </a>
                                            <div class="buttons"><a class="view-cart btn btn-solid"
                                                    href="cart.html">Your cart</a><a class="checkout btn btn-solid"
                                                    href="check-out.html">Check out</a><a class="continue btn btn-solid"
                                                    href="{{ url('/') }}">Continue shopping</a></div>
                                            <div class="upsell_payment"><img class="img-fluid blur-up lazyload"
                                                    src="{{asset('assets/images/payment_cart.png')}}" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="product-upsell">
                                    <h5>Products Loved by Our Customers</h5><svg>
                                        <use href="{{asset('assets/svg/icon-sprite.svg#main-line')}}"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="card-img"> <img src="{{asset('assets/images/modal/1.jpg')}}" alt="user"><a href="#">
                                        <h6>Woven Jacket</h6>
                                        <p>$25</p>
                                    </a></div>
                                <div class="card-img"> <img src="{{asset('assets/images/modal/2.jpg')}}" alt="user"><a href="#">
                                        <h6>Printed Dresses</h6>
                                        <p>$25</p>
                                    </a></div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="card-img"> <img src="{{asset('assets/images/modal/3.jpg')}}" alt="user"><a href="#">
                                        <h6>Woven Jacket</h6>
                                        <p>$25</p>
                                    </a></div>
                                <div class="card-img"> <img src="{{asset('assets/images/modal/4.jpg')}}" alt="user"><a href="#">
                                        <h6>Printed Dresses</h6>
                                        <p>$25</p>
                                    </a></div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="card-img"> <img src="{{asset('assets/images/modal/5.jpg')}}" alt="user"><a href="#">
                                        <h6>Woven Jacket</h6>
                                        <p>$25</p>
                                    </a></div>
                                <div class="card-img"> <img src="{{asset('assets/images/modal/6.jpg')}}" alt="user"><a href="#">
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
    <div class="modal theme-modal fade" id="size-chart" tabindex="-1" role="dialog" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Size Chart</h4><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0"><a href="#"> <img class="img-fluid"
                            src="{{asset('assets/images/size-chart/size-chart.jpg')}}" alt=""></a></div>
            </div>
        </div>
    </div>
    <div class="modal theme-modal fade question-answer-modal" id="question-box" tabindex="-1" role="dialog"
        aria-modal="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Ask a Question</h4><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="reviews-product">
                                <div> <img src="{{asset('assets/images/modal/0.jpg')}}" alt="">
                                    <div>
                                        <h5>Denim Skirts Corset Blazer</h5>
                                        <p>$20.00 <del>$35.00 </del></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group"> <label class="form-label">Your Question :</label><textarea
                                    class="form-control" id="comment" cols="30" rows="4"
                                    placeholder="Write your Question here..."></textarea></div>
                        </div>
                        <div class="modal-button-group"><button class="btn btn-cancel" type="submit"
                                data-bs-dismiss="modal" aria-label="Close">Cancel</button><button class="btn btn-submit"
                                type="submit" data-bs-dismiss="modal" aria-label="Close">Submit</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal theme-modal fade social-modal" id="social-box" tabindex="-1" role="dialog" aria-modal="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6>Copy link</h6><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body"><input class="form-field form-field--input" type="text"
                        value="http://localhost:3000/katie/template/product.html#">
                    <h6>Share:</h6>
                    <ul>
                        <li> <a href="https://www.facebook.com/" target="_blank"> <i
                                    class="fa-brands fa-facebook-f"></i></a></li>
                        <li> <a href="https://in.pinterest.com/" target="_blank"> <i
                                    class="fa-brands fa-pinterest-p"></i></a></li>
                        <li> <a href="https://twitter.com/" target="_blank"> <i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        <li> <a href="https://www.instagram.com/" target="_blank"> <i
                                    class="fa-brands fa-instagram"></i></a></li>
                    </ul>
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
                                            src="{{asset('assets/images/product/product-2/blazers/1.jpg')}}" alt="product"></a>
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
                                            src="{{asset('assets/images/product/product-2/blazers/2.jpg')}}" alt="product"></a>
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
                                            src="{{asset('assets/images/product/product-2/blazers/3.jpg')}}" alt="product"></a>
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
                                            src="{{asset('assets/images/product/product-2/blazers/4.jpg')}}" alt="product"></a>
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
                                            src="{{asset('assets/images/product/product-2/blazers/5.jpg')}}" alt="product"></a>
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
                                            src="{{asset('assets/images/product/product-2/blazers/6.jpg')}}" alt="product"></a>
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
        <div class="title-box"> <img src="{{asset('assets/images/other-img/cookie.png')}}" alt="">
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
        </button>
        <script>
            document.addEventListener('livewire:load', function () {
                Livewire.on('reloadPage', function () {
                    setTimeout(() => {
                        location.reload();
                    }, 2000); // Adjust the delay to match your alert duration if needed
                });
            });
        </script>

            <script>
                window.addEventListener('reloadPage', event => {
                    location.reload();
                });
            </script>
        </button></div><!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script><!-- iconsax js -->
    <script src="{{asset('assets/js/iconsax.js')}}"> </script><!-- cursor js-->
    <script src="{{asset('assets/js/stats.min.js')}}"> </script>
    <script src="{{asset('assets/js/cursor.js')}}"> </script>
    <script src="{{asset('assets/js/swiper-slider/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper-slider/swiper-custom.js')}}"></script>
    <script src="{{asset('assets/js/grid-option.js')}}"></script>
    <script src="{{asset('assets/js/countdown.js')}}"></script><!-- touchspin-->
    <script src="{{asset('assets/js/touchspin.js')}}"></script><!-- cookie js-->
    <script src="{{asset('assets/js/cookie.js')}}"></script><!-- tost js -->
    <script src="{{asset('assets/js/toastify.js')}}"></script>
    <script src="{{asset('assets/js/theme-setting.js')}}"></script><!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</div>
