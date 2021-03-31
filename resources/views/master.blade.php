<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from d-themes.com/html/donald/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Mar 2021 09:56:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Donald - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Donald - Bootstrap eCommerce Template">
    <meta name="author" content="D-THEMES">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="stylesheet" href="{{ asset('plugins/custom.css') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/owl-carousel/owl.carousel.min.css') }}">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo1.min.css') }}">
    <style>
          ul.rating li {
    display: inline!important;
}
    .detail{
        margin-bottom: 30px!important;
    }
    i.d-icon-zoom{display: none;}
    </style>
</head>

<body>
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
            <div class="bounce4"></div>
        </div>
    </div>
    <div class="page-wrapper">
        <h1 class="d-none">Donald - Responsive eCommerce HTML Template</h1>
        <header class="header">

            <!-- End of HeaderTop -->
            <div class="header-middle sticky-header fix-top sticky-content">
                <div class="container">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle">
                            <i class="d-icon-bars2"></i>
                        </a>
                    </div>
                    <div class="header-center">
                        <a href="demo1.html" class="logo">
                            <img src="{{ asset('images/logo.png') }}" alt="logo" width="163" height="39" />
                        </a>
                        <!-- End of Logo -->
                        <nav class="main-nav">
                            <ul class="menu">
                                <li class="active">
                                    <a  href="{{ route('detail',2) }}">Home</a>
                                </li>
                                <li>
                                    <a href="shop.html">Categories</a>
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                                <h4 class="menu-title">Variations 1</h4>
                                                <ul>
                                                    <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                                    <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                                    <li><a href="shop-infinite-scroll.html">Infinite Ajaxscroll</a></li>
                                                    <li><a href="shop-horizontal-filter.html">Horizontal Filter</a>
                                                    </li>
                                                    <li><a href="shop-navigation-filter.html">Navigation Filter<span
                                                                class="tip tip-hot">Hot</span></a></li>

                                                    <li><a href="shop-off-canvas.html">Off-Canvas Filter</a></li>
                                                    <li><a href="shop-right-sidebar.html">Right Toggle Sidebar</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                                <h4 class="menu-title">Variations 2</h4>
                                                <ul>

                                                    <li><a href="shop-grid-3cols.html">3 Columns Mode<span
                                                                class="tip tip-new">New</span></a></li>
                                                    <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                                    <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                                    <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                                    <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                                    <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                                    <li><a href="shop-list.html">List Mode</a></li>
                                                </ul>
                                            </div>
                                            <div
                                                class="col-6 col-sm-4 col-md-3 col-lg-4 menu-banner menu-banner1 banner banner-fixed">
                                                <figure>
                                                    <img src="{{ asset('images/menu/banner-1.jpg') }}" alt="Menu banner" width="221"
                                                        height="330" />
                                                </figure>
                                                <div class="banner-content y-50">
                                                    <h4 class="banner-subtitle font-weight-bold text-primary ls-m">Sale.
                                                    </h4>
                                                    <h3 class="banner-title font-weight-bold"><span
                                                            class="text-uppercase">Up to</span>70% Off</h3>
                                                    <a href="#" class="btn btn-link btn-underline">shop now<i
                                                            class="d-icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- End of Megamenu -->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="product.html">Products</a>
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                                <h4 class="menu-title">Product Pages</h4>
                                                <ul>
                                                    <li><a href="product-simple.html">Simple Product</a></li>
                                                    <li><a href="product.html">Variable Product</a></li>
                                                    <li><a href="product-sale.html">Sale Product</a></li>
                                                    <li><a href="product-featured.html">Featured &amp; On Sale</a></li>

                                                    <li><a href="product-left-sidebar.html">With Left Sidebar</a></li>
                                                    <li><a href="product-right-sidebar.html">With Right Sidebar</a></li>
                                                    <li><a href="product-sticky-cart.html">Add Cart Sticky<span
                                                                class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="product-tabinside.html">Tab Inside</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                                <h4 class="menu-title">Product Layouts</h4>
                                                <ul>
                                                    <li><a href="product-grid.html">Grid Images<span
                                                                class="tip tip-new">New</span></a></li>
                                                    <li><a href="product-masonry.html">Masonry</a></li>
                                                    <li><a href="product-gallery.html">Gallery Type</a></li>
                                                    <li><a href="product-full.html">Full Width Layout</a></li>
                                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                                    <li><a href="product-sticky-both.html">Left &amp; Right Sticky</a>
                                                    </li>
                                                    <li><a href="product-horizontal.html">Horizontal Thumb</a></li>

                                                    <li><a href="#">Build Your Own</a></li>
                                                </ul>
                                            </div>
                                            <div
                                                class="col-6 col-sm-4 col-md-3 col-lg-4 menu-banner menu-banner2 banner banner-fixed">
                                                <figure>
                                                    <img src="{{ asset('images/menu/banner-2.jpg') }}" alt="Menu banner" width="221"
                                                        height="330" />
                                                </figure>
                                                <div class="banner-content x-50 text-center">
                                                    <h3 class="banner-title text-white text-uppercase">Sunglasses</h3>
                                                    <h4 class="banner-subtitle font-weight-bold text-white mb-0">$23.00
                                                        -
                                                        $120.00</h4>
                                                </div>
                                            </div>
                                            <!-- End of MegaMenu -->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="account.html">Login</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="error-404.html">Error 404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-classic.html">Classic</a></li>
                                        <li><a href="blog-listing.html">Listing</a></li>
                                        <li>
                                            <a href="#">Grid</a>
                                            <ul>
                                                <li><a href="blog-grid-2col.html">Grid 2 columns</a></li>
                                                <li><a href="blog-grid-3col.html">Grid 3 columns</a></li>
                                                <li><a href="blog-grid-4col.html">Grid 4 columns</a></li>
                                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Masonry</a>
                                            <ul>
                                                <li><a href="blog-masonry-2col.html">Masonry 2 columns</a></li>
                                                <li><a href="blog-masonry-3col.html">Masonry 3 columns</a></li>
                                                <li><a href="blog-masonry-4col.html">Masonry 4 columns</a></li>
                                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Mask</a>
                                            <ul>
                                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="post-single.html">Single Post</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="d-xl-show">
                                    <a href="#">Elements</a>
                                    <ul>
                                        <li><a href="element-products.html">Products</a></li>
                                        <li><a href="element-typography.html">Typography</a></li>
                                        <li><a href="element-titles.html">Titles</a></li>
                                        <li><a href="element-categories.html">Product Category</a></li>
                                        <li><a href="element-buttons.html">Buttons</a></li>
                                        <li><a href="element-accordions.html">Accordions</a></li>
                                        <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                        <li><a href="element-tabs.html">Tabs</a></li>
                                        <li><a href="element-testimonials.html">Testimonials</a></li>
                                        <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                        <li><a href="element-instagrams.html">Instagrams</a></li>
                                        <li><a href="element-cta.html">Call to Action</a></li>
                                        <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                        <li><a href="element-icons.html">Icons</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Buy Donald!</a>
                                </li>
                            </ul>
                        </nav>
                        <span class="divider"></span>
                        <!-- End of Divider -->
                        <div class="header-search hs-toggle">
                            <a href="#" class="search-toggle">
                                <i class="d-icon-search"></i>
                            </a>
                            <form action="#" class="input-wrapper">
                                <input type="text" class="form-control" name="search" autocomplete="off"
                                    placeholder="Search your keyword..." required />
                                <button class="btn btn-search" type="submit">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End of Header Search -->
                    </div>
                    <div class="header-right">
                        {{-- {{ Auth::user()->name }} --}}
                        @if (Auth::check())
                        <nav class="main-nav">
                            <ul class="menu">
                                <li class="d-xl-show">
                                    <a  href="#">
                                        <i class="d-icon-user" style="font-size: 1.5rem"></i>
                                        <span>{{ Auth::user()->name }}</span>
                                    </a>
                                    <ul>
                                        <li> <a href="{{ route('logout') }}">
                                            <i class="bi bi-box-arrow-right"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        @else
                        <a class="login" href="{{ route('login') }}">
                            <i class="d-icon-user"></i>
                            <span>Login</span>
                        </a>
                        @endif

                     <!-- End of Login -->
                        <span class="divider"></span>
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="cart-toggle">
                                <span class="cart-label">
                                    <span class="cart-name">My Cart</span>
                                    <span class="cart-price">$42.00</span>
                                </span>
                                <i class="minicart-icon">
                                    <span class="cart-count">2</span>
                                </i>
                            </a>
                            <!-- End of Cart Toggle -->
                            <div class="dropdown-box">
                                <div class="product product-cart-header">
                                    <span class="product-cart-counts">2 items</span>
                                    <span><a href="cart.html">View cart</a></span>
                                </div>
                                <div class="products scrollable">
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Solid Pattern In Fashion Summer
                                                Dress</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$129.00</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{ asset('images/cart/product-1.jpg') }}" alt="product" width="90"
                                                    height="90" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </figure>
                                    </div>
                                    <!-- End of Cart Product -->
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Mackintosh Poket Backpack</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$98.00</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{ asset('images/cart/product-2.jpg') }}" alt="product" width="90"
                                                    height="90" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </figure>
                                    </div>
                                    <!-- End of Cart Product -->
                                </div>
                                <!-- End of Products  -->
                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">$42.00</span>
                                </div>
                                <!-- End of Cart Total -->
                                <div class="cart-action">
                                    <a href="checkout.html" class="btn btn-dark"><span>Checkout</span></a>
                                </div>
                                <!-- End of Cart Action -->
                            </div>
                            <!-- End of Dropdown Box -->
                        </div>

                        <div class="header-search hs-toggle mobile-search">
                            <a href="#" class="search-toggle">
                                <i class="d-icon-search"></i>
                            </a>
                            <form action="#" class="input-wrapper">
                                <input type="text" class="form-control" name="search" autocomplete="off"
                                    placeholder="Search your keyword..." required />
                                <button class="btn btn-search" type="submit">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End of Header Search -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header -->
        <main class="main">
            <div class="page-content">

                <!-- banner-->

                <section class="intro-section">
                    <div class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no"
                        data-owl-options="{
                        'nav': false,
                        'dots': true,
                        'loop': true,
                        'items': 1,
                        'autoplay': true,
                        'autoplayTimeout': 8000
                    }">
                        <div class="banner banner-fixed intro-slide1" style="background-color: #dddee0;">
                            <figure>
                                <div class="slide-effect">
                                    <img src="{{ asset('images/demos/demo1/slides/Slider1_women.png') }}"
                                        class="slide-animate intro-slide1-img"
                                        data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1.2s', 'delay': '.5s'}"
                                        alt="intro-banner" width="1180" height="630" />
                                    <div class="float-svg-container float-svg-1 slide-animate"
                                        data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px"
                                            width="878.874px" height="615.792px" viewBox="0 -10 146.479 122.632"
                                            class="float-svg" data-float-options="{'delta':10,'speed':2,'size':6}"
                                            xml:space="preserve">
                                            <path
                                                d="M130.932,84.665c3.185,-2.144,6.110,-4.998,8.531,-8.520c10.110,-13.610,8.467,-30.072,0.332,-42.346c-6.039,-8.390,-14.489,-13.797,-22.688,-18.422C101.596,6.864,81.881,4.547,61.349,12.108C43.416,13.790,27.653,21.203,15.990,33.373C4.844,46.946,-9.593,72.549,8.790,86.890c12.138,12.717,28.065,13.809,41.389,14.725c11.112,-0.221,22.039,-2.444,33.020,-6.916c13.288,-8.161,19.548,-6.340,31.060,-4.985C119.789,90.341,125.709,88.455,130.932,84.665z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="float-svg-container float-svg-2 slide-animate"
                                        data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_2" x="0px" y="0px"
                                            width="710.678px" height="543.094px" viewBox="0 -10 165.274 146.301"
                                            class="float-svg" data-float-options="{'delta':10,'speed':1,'size':4.3}"
                                            xml:space="preserve">
                                            <path
                                                d="M93.301,135.151c-19.925,-5.702,-39.601,-19.594,-56.258,-35.144C16.933,85.792,0.546,68.421,0.015,43.508C-0.381,24.953,7.203,1.282,26.057,-7.618c4.479,-1.375,9.280,-1.435,14.057,-0.425c9.430,2.734,18.328,8.193,26.058,16.592c6.131,6.640,11.089,14.306,17.716,20.035c18.042,13.179,26.139,3.024,51.780,8.336c9.167,0.554,18.815,1.156,24.192,7.641c9.444,11.897,5.473,33.018,-3.772,49.940C142.467,120.034,116.856,135.567,93.301,135.151z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </figure>
                            <div class="container">

                                <div class="banner-content y-50">
                                    <h4 class="banner-subtitle text-uppercase font-weight-bold ls-l mb-2">
                                        <span class="d-inline-block slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">Buy
                                            2, Get</span>
                                        <span class="d-inline-block label-star bg-primary text-white slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.4s'}">1
                                            Free</span>
                                    </h4>
                                    <h2 class="banner-title text-uppercase font-weight-bold text-white lh-1 ls-l slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        For Women’s</h2>
                                    <h3 class="font-weight-normal mb-1 slide-animate" data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1.2s',
                                        'delay': '1s'
                                    }">
                                        <strong>Up to 30% Off</strong> on all Products
                                    </h3>
                                    <p class="slide-animate ls-m text-dark font-primary mb-6"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Get Free Shipping on all orders over $99.00</p>
                                    <a href="#" class="btn btn-outline btn-dark slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Shop
                                        Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="banner banner-fixed intro-slide2" style="background-color: #dddee0;">
                            <figure>
                                <img src="{{ asset('images/demos/demo1/slides/slide2.jpg') }}" alt="intro-banner" width="1903"
                                    height="630" />
                            </figure>
                            <div class="container">
                                <div class="banner-content y-50 ml-auto text-right">
                                    <h4 class="banner-subtitle ls-s mb-1 slide-animate"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '.7s'}"><span
                                            class="d-block text-uppercase mb-2">Coming soon</span><strong
                                            class="font-weight-semi-bold ls-m">Donald Birthday</strong></h4>
                                    <h2 class="banner-title mb-2 d-inline-block font-weight-bold text-primary slide-animate"
                                        data-animation-options="{'name': 'fadeInRight', 'duration': '1.2s', 'delay': '.5s'}">
                                        Sale</h2>
                                    <p class="slide-animate font-primary ls-s text-dark mb-4"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '1.2s'}">
                                        Up to 70% off on all products <br />online &amp; Free Shipping over $90</p>
                                    <a href="#" class="btn btn-dark slide-animate"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '1.4s'}">Shop
                                        Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="banner banner-fixed video-banner intro-slide3" style="background-color: #dddee0;">
                            <figure>
                                <video src="{{ asset('video/memory-of-a-woman.mp4') }}" width="1903" height="630"></video>
                            </figure>
                            <div class="container">
                                <div class="banner-content x-50 y-50 text-center">
                                    <h4 class="banner-subtitle text-white text-uppercase mb-3 slide-animate"
                                        data-animation-options="{'name': 'fadeIn', 'duration': '.7s'}">Check out Donald
                                        Store</h4>
                                    <h2 class="banner-title mb-3 text-white font-weight-bold ls-m slide-animate"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '.7s', 'delay': '.5s'}">
                                        Fashion Collection</h2>
                                    <p class="slide-animate mb-5 text-white ls-s font-primary "
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '.8s'}">
                                        Up to 50% Off this Season’s &amp; Get free shipping<br />on all orders over
                                        $199.00</p>
                                    <a href="#" class="btn btn-outline btn-white slide-animate mr-3 mb-1"
                                        data-animation-options="{'name': 'fadeInLeft', 'duration': '1s', 'delay': '1.5s'}">Shop
                                        Men</a>
                                    <a href="#" class="btn btn-outline btn-white slide-animate mb-1"
                                        data-animation-options="{'name': 'fadeInRight', 'duration': '1s', 'delay': '1.5s'}">Shop
                                        Women</a>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="service-list container appear-animate">
                        <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                                'items': 3,
                                'nav': false,
                                'dots': false,
                                'margin': 20,
                                'autoplay': true,
                                'autoplayTimeout': 5000,
                                'responsive': {
                                    '0': {
                                        'items': 1
                                    },
                                    '576': {
                                        'items': 2
                                    },
                                    '992': {
                                        'items': 3,
                                        'loop': false
                                    }
                                }
                            }">
                            <div class="icon-box icon-box-side icon-box1 appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.3s'
                                }">
                                <i class="icon-box-icon d-icon-truck"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Free Shipping &amp; Return</h4>
                                    <p>Free shipping on orders over $99</p>
                                </div>
                            </div>

                            <div class="icon-box icon-box-side icon-box2 appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.4s'
                                }">
                                <i class="icon-box-icon d-icon-service"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Customer Support 24/7</h4>
                                    <p>Instant access to perfect support</p>
                                </div>
                            </div>

                            <div class="icon-box icon-box-side icon-box3 appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.5s'
                                }">
                                <i class="icon-box-icon d-icon-secure"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">100% Secure Payment</h4>
                                    <p>We ensure secure payment!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of banner-->
                @yield('content')
            </div>


        </main>

        <!-- End of Main -->
        <footer class="footer appear-animate">
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="demo1.html" class="logo-footer">
                                <img src="{{ asset('images/logo-footer.png') }}" alt="logo-footer" width="163" height="39" />
                            </a>
                            <!-- End of FooterLogo -->
                        </div>
                        <div class="col-lg-9">
                            <div class="widget widget-newsletter form-wrapper form-wrapper-inline">
                                <div class="newsletter-info mx-auto mr-lg-2 ml-lg-4">
                                    <h4 class="widget-title">Subscribe to our Newsletter</h4>
                                    <p>Get all the latest information on Events, Sales and Offers.</p>
                                </div>
                                <form action="#" class="input-wrapper input-wrapper-inline">
                                    <input type="email" class="form-control" name="email" id="newsletter-email1"
                                        placeholder="Email address here..." required />
                                    <button class="btn btn-primary btn-md ml-2" type="submit">subscribe<i
                                            class="d-icon-arrow-right"></i></button>
                                </form>
                            </div>
                            <!-- End of Newsletter -->
                        </div>
                    </div>
                </div>
                <!-- End of FooterTop -->
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h4 class="widget-title">Contact Info</h4>
                                <ul class="widget-body">
                                    <li>
                                        <label>Phone:</label>
                                        <a href="#">Toll Free (123) 456-7890</a>
                                    </li>
                                    <li>
                                        <label>Email:</label>
                                        <a href="#">mail@donald.com</a>
                                    </li>
                                    <li>
                                        <label>Address:</label>
                                        <a href="#">123 Street Name, City, England</a>
                                    </li>
                                    <li>
                                        <label>WORKING DAYS/HOURS</label>
                                    </li>
                                    <li>
                                        <a href="#">Mon - Sun / 9:00 AM - 8:00 PM</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End of Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget ml-lg-4">
                                <h4 class="widget-title">My Account</h4>
                                <ul class="widget-body">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Custom Service</a></li>
                                    <li><a href="#">Terms &amp; Condition</a></li>
                                </ul>
                            </div>
                            <!-- End of Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget ml-lg-4">
                                <h4 class="widget-title">Contact Info</h4>
                                <ul class="widget-body">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Custom Service</a></li>
                                    <li><a href="#">Terms &amp; Condition</a></li>
                                </ul>
                            </div>
                            <!-- End of Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget-instagram">
                                <h4 class="widget-title">Instagram</h4>
                                <figure class="widget-body row">
                                    <div class="col-3">
                                        <img src="{{ asset('images/instagram/01.jpg') }}" alt="instagram 1" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/instagram/02.jpg') }}" alt="instagram 2" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/instagram/03.jpg') }}" alt="instagram 3" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/instagram/04.jpg') }}" alt="instagram 4" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/instagram/05.jpg') }}" alt="instagram 5" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/instagram/06.jpg') }}" alt="instagram 6" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/instagram/07.jpg') }}" alt="instagram 7" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/instagram/08.jpg') }}" alt="instagram 8" width="64" height="64" />
                                    </div>
                                </figure>
                            </div>
                            <!-- End of Instagram -->
                        </div>
                    </div>
                </div>
                <!-- End of FooterMiddle -->
                <div class="footer-bottom">
                    <div class="footer-left">
                        <figure class="payment">
                            <img src="{{ asset('images/payment.png') }}" alt="payment" width="159" height="29" />
                        </figure>
                    </div>
                    <div class="footer-center">
                        <p class="copyright">Donald eCommerce &copy; 2020. All Rights Reserved</p>
                    </div>
                    <div class="footer-right">
                        <div class="social-links">
                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                        </div>
                    </div>
                </div>
                <!-- End of FooterBottom -->
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo1.html" class="sticky-link active">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="shop.html" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
        </a>
        <a href="wishlist.html" class="sticky-link">
            <i class="d-icon-heart"></i>
            <span>Wishlist</span>
        </a>
        <a href="account.html" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>Account</span>
        </a>
        <div class="dropdown cart-dropdown dir-up">
            <a href="cart.html" class="sticky-link cart-toggle">
                <i class="d-icon-bag"></i>
                <span>Cart</span>
            </a>
            <!-- End of Cart Toggle -->
            <div class="dropdown-box">
                <div class="product product-cart-header">
                    <span class="product-cart-counts">2 items</span>
                    <span><a href="cart.html">View cart</a></span>
                </div>
                <div class="products scrollable">
                    <div class="product product-cart">
                        <div class="product-detail">
                            <a href="product.html" class="product-name">Solid Pattern In Fashion Summer Dress</a>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$129.00</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="{{ asset('images/cart/product-1.jpg') }}" alt="product" width="90" height="90" />
                            </a>
                            <button class="btn btn-link btn-close">
                                <i class="fas fa-times"></i>
                            </button>
                        </figure>
                    </div>
                    <!-- End of Cart Product -->
                    <div class="product product-cart">
                        <div class="product-detail">
                            <a href="product.html" class="product-name">Mackintosh Poket Backpack</a>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$98.00</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="{{ asset('images/cart/product-2.jpg') }}" alt="product" width="90" height="90" />
                            </a>
                            <button class="btn btn-link btn-close">
                                <i class="fas fa-times"></i>
                            </button>
                        </figure>
                    </div>
                    <!-- End of Cart Product -->
                </div>
                <!-- End of Products  -->
                <div class="cart-total">
                    <label>Subtotal:</label>
                    <span class="price">$42.00</span>
                </div>
                <!-- End of Cart Total -->
                <div class="cart-action">
                    <a href="checkout.html" class="btn btn-dark"><span>Checkout</span></a>
                </div>
                <!-- End of Cart Action -->
            </div>
            <!-- End of Dropdown Box -->
        </div>
    </div>
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="fas fa-chevron-up"></i></a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End of Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End of CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li class="active">
                    <a href="demo1.html">Home</a>
                </li>
                <li>
                    <a href="shop.html">Categories</a>
                    <ul>
                        <li>
                            <a href="#">
                                Variations 1
                            </a>
                            <ul>
                                <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                <li><a href="shop-infinite-scroll.html">Infinite Ajaxscroll</a></li>
                                <li><a href="shop-horizontal-filter.html">Horizontal Filter</a></li>
                                <li><a href="shop-navigation-filter.html">Navigation Filter<span
                                            class="tip tip-hot">Hot</span></a></li>

                                <li><a href="shop-off-canvas.html">Off-Canvas Filter</a></li>
                                <li><a href="shop-right-sidebar.html">Right Toggle Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Variations 2
                            </a>
                            <ul>

                                <li><a href="shop-grid-3cols.html">3 Columns Mode<span
                                            class="tip tip-new">New</span></a></li>
                                <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                <li><a href="shop-list.html">List Mode</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="product.html">Products</a>
                    <ul>
                        <li>
                            <a href="#">Product Pages</a>
                            <ul>
                                <li><a href="product-simple.html">Simple Product</a></li>
                                <li><a href="product.html">Variable Product</a></li>
                                <li><a href="product-sale.html">Sale Product</a></li>
                                <li><a href="product-featured.html">Featured &amp; On Sale</a></li>

                                <li><a href="product-left-sidebar.html">With Left Sidebar</a></li>
                                <li><a href="product-right-sidebar.html">With Right Sidebar</a></li>
                                <li><a href="product-sticky-cart.html">Add Cart Sticky<span
                                            class="tip tip-hot">Hot</span></a></li>
                                <li><a href="product-tabinside.html">Tab Inside</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layouts</a>
                            <ul>
                                <li><a href="product-grid.html">Grid Images<span class="tip tip-new">New</span></a></li>
                                <li><a href="product-masonry.html">Masonry</a></li>
                                <li><a href="product-gallery.html">Gallery Type</a></li>
                                <li><a href="product-full.html">Full Width Layout</a></li>
                                <li><a href="product-sticky.html">Sticky Info</a></li>
                                <li><a href="product-sticky-both.html">Left &amp; Right Sticky</a></li>
                                <li><a href="product-horizontal.html">Horizontal Thumb</a></li>

                                <li><a href="#">Build Your Own</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li><a href="about-us.html">About</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="account.html">Login</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="error-404.html">Error 404</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog</a>
                    <ul>
                        <li><a href="blog-classic.html">Classic</a></li>
                        <li><a href="blog-listing.html">Listing</a></li>
                        <li>
                            <a href="#">Grid</a>
                            <ul>
                                <li><a href="blog-grid-2col.html">Grid 2 columns</a></li>
                                <li><a href="blog-grid-3col.html">Grid 3 columns</a></li>
                                <li><a href="blog-grid-4col.html">Grid 4 columns</a></li>
                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Masonry</a>
                            <ul>
                                <li><a href="blog-masonry-2col.html">Masonry 2 columns</a></li>
                                <li><a href="blog-masonry-3col.html">Masonry 3 columns</a></li>
                                <li><a href="blog-masonry-4col.html">Masonry 4 columns</a></li>
                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Mask</a>
                            <ul>
                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="post-single.html">Single Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">ELements</a>
                    <ul>
                        <li><a href="element-products.html">Products</a></li>
                        <li><a href="element-typography.html">Typography</a></li>
                        <li><a href="element-titles.html">Titles</a></li>
                        <li><a href="element-categories.html">Product Category</a></li>
                        <li><a href="element-buttons.html">Buttons</a></li>
                        <li><a href="element-accordions.html">Accordions</a></li>
                        <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                        <li><a href="element-tabs.html">Tabs</a></li>
                        <li><a href="element-testimonials.html">Testimonials</a></li>
                        <li><a href="element-blog-posts.html">Blog Posts</a></li>
                        <li><a href="element-instagrams.html">Instagrams</a></li>
                        <li><a href="element-cta.html">Call to Action</a></li>
                        <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                        <li><a href="element-icons.html">Icons</a></li>
                    </ul>
                </li>
                <li><a href="#">Buy Donald!</a></li>
            </ul>
            <!-- End of MobileMenu -->
            <!-- <ul class="mobile-menu mmenu-anim">
                <li><a href="login.html">Login</a></li>
                <li><a href="cart.html">My Cart</a></li>
                <li><a href="wishlist.html">Wishlist</a></li>
            </ul> -->
            <!-- End of MobileMenu -->
        </div>
    </div>
    <!-- Plugins JS File -->

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('vendor/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/elevatezoom/jquery.elevatezoom.min.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- Main JS File -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $.ajaxSetup({
headers: {
    'X-XSRF-TOKEN': decodeURIComponent(/XSRF-Token=([^;]*)/ig.exec(document.cookie)[1])
}
});

$('.add').on('click',function(){
    $.ajax({
    url: 'detail/3',
    type: 'get',
    dataType: 'json',
})
    .done(function(d){
    console.log('ok');
    })
    .fail(function(d){
    console.log('false');
    })
})

var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
	 		loop: true,
			loopedSlides: 4
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: 'auto',
      touchRatio: 0.2,
      slideToClickedSlide: true,
			loop: true,
			loopedSlides: 4
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;

    $('#qty').on('change',function(){
        if($(this).val() <= 0){
            $(this).val(1);
        }
    })
    $(document).on('click','#stepup',function(){
        var old_val = Number($('#qty').val()) ;
        $('#qty').val(++old_val);

    });
    $(document).on('click','#stepdown',function(){
        var old_val = Number($('#qty').val()) ;
        $('#qty').val(--old_val);
        $('#qty').trigger('change');

    });

        WebFontConfig = {
            google: { families: ['Open+Sans:400,600,700', 'Poppins:400,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = '{{ asset("js/webfont.js") }}';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);

        $(document).on('click', "#btn-login", function(){
            $.ajax({
                url:'login',
                type:'post',
                data:{
                    "_token": "{{ csrf_token() }}",
                    email:$('#email').val(),
                    password:$('#password').val(),

                }
            })
            .done(function(data){
                location.replace('/public')
            })
            .fail(function(err){

                    $('#error').text('invalid user name or password ');

            });
        })
        $(document).on('click','#btn-register',function(){
            $.ajax({
                url:'register',
                type:'post',
                data:{
                    "_token": "{{ csrf_token() }}",
                    name:$('#name').val(),
                    email:$('#reg-email').val(),
                    password:$('#reg-password').val(),
                    password_confirmation:$('#password_confirmation').val(),


                }
            })
            .done(function(data){
                location.replace('/public')
            })
            .fail(function(err){
                if(err.responseJSON.errors.hasOwnProperty('email')){
                    $('#lb-email').text('The email field is required.');
                    $('#lb-email').css('color','red')

                }else if(!err.responseJSON.errors.hasOwnProperty('email')){
                    $('#lb-email').text('Your email address:');
                    $('#lb-email').css('color','')
                }
                if(err.responseJSON.errors.hasOwnProperty('password')){
                    $('#lb-password').text('The password field is required. ');
                    $('#lb-password').css('color','red')

                }else if(!err.responseJSON.errors.hasOwnProperty('password')){
                    $('#lb-email').text('Confirm  Password:');
                    $('#lb-email').css('color','')
                }
            });
        });

    </script>



</body>


<!-- Mirrored from d-themes.com/html/donald/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Mar 2021 09:57:22 GMT -->
</html>
