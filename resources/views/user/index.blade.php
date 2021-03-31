@extends('master')
@section('content')

    <section class="grey-section pt-10 pb-10 appear-animate" data-animation-options="{'delay': '.3s'}">
        <div class="container pt-3">
            <h2 class="title">Browse Our Categories</h2>
            <div class="row">
                <div class="col-md-3 col-6 mb-4">
                    <div class="category category-default category-default-1 category-absolute overlay-zoom">
                        <a href="#">
                            <figure class="category-media">
                                <img src="images/demos/demo1/categories/category1.jpg" alt="category" width="280"
                                    height="280" />
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name"><a href="shop.html">Accessories</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="category category-default category-default-1 category-absolute overlay-zoom">
                        <a href="#">
                            <figure class="category-media">
                                <img src="images/demos/demo1/categories/category2.jpg" alt="category" width="280"
                                    height="280" />
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name"><a href="shop.html">Fashion 2020</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="category category-default category-default-1 category-absolute overlay-zoom">
                        <a href="#">
                            <figure class="category-media">
                                <img src="images/demos/demo1/categories/category3.jpg" alt="category" width="280"
                                    height="280" />
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name"><a href="shop.html">Watches</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="category category-default category-default-1 category-absolute overlay-zoom">
                        <a href="#">
                            <figure class="category-media">
                                <img src="images/demos/demo1/categories/category4.jpg" alt="category" width="280"
                                    height="280" />
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name"><a href="shop.html">Shoes</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-wrapper container appear-animate mt-10 pt-3 pb-8" data-animation-options="{'delay': '.3s'}">
        <h2 class="title">Best Selling</h2>
        <div class="owl-carousel owl-theme row owl-nav-full cols-2 cols-md-3 cols-lg-4" data-owl-options="{
            'items': 5,
            'nav': false,
            'loop': false,
            'dots': true,
            'margin': 20,
            'responsive': {
                '0': {
                    'items': 2
                },
                '768': {
                    'items': 3
                },
                '992': {
                    'items': 4,
                    'dots': false,
                    'nav': true
                }
            }
        }">

            <!--best sale-->
            @foreach ($data as $product)

                <div class="product">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="{{ asset('image/' . json_decode($product->images)[0]) }}"
                                alt="Blue Pinafore Denim Dress" width="280" height="315">
                        </a>
                        <div class="product-label-group">
                            <label class="product-label label-new">new</label>
                        </div>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal"
                                title="Add to cart"><i class="d-icon-bag"></i></a>
                        </div>

                    </figure>
                    <div class="product-details">
                        <a href="#" class="btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                        <div class="product-cat">
                            <a href="shop-grid-3col.html">categories</a>
                        </div>
                        <h3 class="product-name">
                            {{ $product->name }}
                        </h3>
                        <div class="product-price">
                            <ins class="new-price">{{ number_format($product->promotion_price) }}</ins><br><del
                                class="old-price">{{ number_format($product->price) }}</del>
                        </div>
                        {{-- <div class="ratings-container">
                    <div class="ratings-full">
                        <span class="ratings" style="width:100%"></span>
                        <span class="tooltiptext tooltip-top"></span>
                    </div>
                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                </div> --}}
                        <div class="product-action">
                            <a style="margin: 0!important;" href="{{ route('detail', $product->id) }}" class="btn-product"
                                title="Quick View">Quick View</a>
                        </div>
                    </div>
                </div>

            @endforeach
            <!-- end of best sale-->
        </div>

    </section>
    {{-- ----------------modal------------------- --}}


    <button type="button" class="btn btn-primary add" data-toggle="modal" data-target=".bd-example-modal-lg">Large
        modal</button>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-lg product product-single row mb-4">
                    <div class="col-md-6">
                        <div class="product-gallery">
                            <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1">
                                <figure class="product-image">
                                    <img src="images/product/product-1-580x580.jpg"
                                        data-zoom-image="images/product/product-1-800x900.jpg"
                                        alt="Women's Brown Leather Backpacks" width="800" height="900">
                                </figure>
                                <figure class="product-image">
                                    <img src="images/product/product-2-580x580.jpg"
                                        data-zoom-image="images/product/product-2-800x900.jpg"
                                        alt="Women's Brown Leather Backpacks" width="800" height="900">
                                </figure>
                                <figure class="product-image">
                                    <img src="images/product/product-3-580x580.jpg"
                                        data-zoom-image="images/product/product-3-800x900.jpg"
                                        alt="Women's Brown Leather Backpacks" width="800" height="900">
                                </figure>
                                <figure class="product-image">
                                    <img src="images/product/product-4-580x580.jpg"
                                        data-zoom-image="images/product/product-4-800x900.jpg"
                                        alt="Women's Brown Leather Backpacks" width="800" height="900">
                                </figure>
                                <figure class="product-image">
                                    <img src="images/product/product-5-580x580.jpg"
                                        data-zoom-image="images/product/product-5-800x900.jpg"
                                        alt="Women's Brown Leather Backpacks" width="800" height="900">
                                </figure>
                            </div>
                            <div class="product-thumbs-wrap">
                                <div class="product-thumbs">
                                    <div class="product-thumb active">
                                        <img src="images/product/product-1-137x137.jpg" alt="product thumbnail" width="109"
                                            height="122">
                                    </div>
                                    <div class="product-thumb">
                                        <img src="images/product/product-2-137x137.jpg" alt="product thumbnail" width="109"
                                            height="122">
                                    </div>
                                    <div class="product-thumb">
                                        <img src="images/product/product-3-137x137.jpg" alt="product thumbnail" width="109"
                                            height="122">
                                    </div>
                                    <div class="product-thumb">
                                        <img src="images/product/product-4-137x137.jpg" alt="product thumbnail" width="109"
                                            height="122">
                                    </div>
                                    <div class="product-thumb">
                                        <img src="images/product/product-5-137x137.jpg" alt="product thumbnail" width="109"
                                            height="122">
                                    </div>
                                </div>
                                <button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
                                <button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-details">

                            <h1 class="product-name">Women's Brown Leather Backpacks</h1>
                            <div class="product-meta">
                                SKU: <span class="product-sku">12345670</span>
                                BRAND: <span class="product-brand">The Northland</span>
                            </div>
                            <div class="product-price">$139.00</div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:80%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#product-tab-reviews" class="link-to-tab rating-reviews">( 6 reviews )</a>
                            </div>
                            <p class="product-short-desc">Sed egestas, ante et vulputate volutpat, eros pede semper
                                est, vitae luctus metus libero eu augue. Morbi purus liberpuro ate vol faucibus
                                adipiscing. Sed lectus te et vulputate aucibus adipiscing. Sed lectus. us
                                adipiscing. Sed lectus.</p>
                            <div class="product-form product-color">
                                <label>Color:</label>
                                <div class="product-variations">
                                    <a class="color" data-src="images/demos/demo7/products/big1.jpg" href="#"
                                        style="background-color: #d99e76"></a>
                                    <a class="color" data-src="images/demos/demo7/products/2.jpg" href="#"
                                        style="background-color: #267497"></a>
                                    <a class="color" data-src="images/demos/demo7/products/3.jpg" href="#"
                                        style="background-color: #9a999d"></a>
                                    <a class="color" data-src="images/demos/demo7/products/4.jpg" href="#"
                                        style="background-color: #2b2b2b"></a>
                                </div>
                            </div>
                            <div class="product-form product-size">
                                <label>Size:</label>
                                <div class="product-form-group">
                                    <div class="product-variations">
                                        <a class="size" href="#">S</a>
                                        <a class="size" href="#">M</a>
                                        <a class="size" href="#">L</a>
                                        <a class="size" href="#">XL</a>
                                        <a class="size" href="#">2XL</a>
                                    </div>
                                    <a href="#" class="size-guide"><i class="d-icon-ruler"></i>Size
                                        Guide</a>
                                    <a href="#" class="product-variation-clean">Clean All</a>
                                </div>
                            </div>
                            <div class="product-variation-price">
                                <span>$239.00</span>
                            </div>

                            <hr class="product-divider">

                            <div class="product-form product-qty">
                                <label>QTY:</label>
                                <div class="product-form-group">
                                    <div class="input-group">
                                        <button class="quantity-minus d-icon-minus"></button>
                                        <input class="quantity form-control" type="number" min="1" max="1000000">
                                        <button class="quantity-plus d-icon-plus"></button>
                                    </div>
                                    <button class="btn-product btn-cart"><i class="d-icon-bag"></i>Add To
                                        Cart</button>
                                </div>
                            </div>

                            <hr class="product-divider mb-3">

                            {{-- <div class="product-footer">
                                <div class="social-links">
                                    <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                    <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                    <a href="#" class="social-link social-vimeo fab fa-vimeo-v"></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-wishlist"><i class="d-icon-heart"></i>Add To
                                        Wishlist</a>
                                    <span class="divider"></span>
                                    <a href="#" class="btn-product btn-compare"><i class="d-icon-random"></i>Add To
                                        Compare</a>
                                </div>
                            </div>

                            <ul class="product-status mt-4 list-style-none list-type-check pl-0">
                                <li>Order your pair before 00:00 and receive it between tomorrow - 26th September.
                                </li>
                                <li>Free worldwide shipping</li>
                                <li>Free replenishment service: laces &amp; insoles</li>
                            </ul> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ------------------/modal---------------------- --}}
    <section class="product-wrapper pb-10 container appear-animate" data-animation-options="{'delay': '.6s'}">

        <h2 class="title">Our Featured</h2>
        <div class="owl-carousel owl-theme row cols-2 cols-md-3 cols-lg-4 cols-xl-5" data-owl-options="{
            'items': 5,
            'nav': false,
            'loop': false,
            'dots': true,
            'margin': 20,
            'responsive': {
                '0': {
                    'items': 2
                },
                '768': {
                    'items': 3
                },
                '992': {
                    'items': 4
                },
                '1200': {
                    'items': 5,
                    'dots': false,
                    'nav': true
                }
            }
        }">
            @for ($i = 0; $i <= 5; $i++)

                <div class="product">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="images/demos/demo1/products/product5.jpg" alt="Blue Pinafore Denim Dress" width="220"
                                height="245">
                        </a>
                        <div class="product-label-group">
                            <label class="product-label label-sale">27% off</label>
                        </div>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal"
                                title="Add to cart"><i class="d-icon-bag"></i></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <a href="#" class="btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                        <div class="product-cat">
                            <a href="shop-grid-3col.html">categories</a>
                        </div>
                        <h3 class="product-name">
                            <a href="product.html">Women's Brown leather backpacks</a>
                        </h3>
                        <div class="product-price">
                            <ins class="new-price">$230.00</ins><del class="old-price">$210.00</del>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                        </div>
                    </div>
                </div>

            @endfor
        </div>
    </section>

    <section class="banner parallax" data-option="{'offset': 0}" data-image-src="images/demos/demo1/parallax.jpg"
        style="background-color: #44352d;">
        <div class="container banner-content appear-animate text-center" data-animation-options="{
            'name': 'blurIn',
            'delay': '.3s'
        }">
            <h3 class="banner-subtitle text-white font-weight-bold mb-2">Extra<span
                    class="label-star bg-primary text-uppercase text-white ml-2 mr-2">30% Off</span>Online
            </h3>
            <h2 class="banner-title font-weight-bold text-uppercase text-white mb-2">Lifestyle Collection
            </h2>
            <p class="font-primary text-white mb-6">Free shipping on orders over $99</p>
            <a href="#" class="btn btn-solid pl-5 pr-5">Discover&nbsp;Now</a>
        </div>
    </section>

    <section class="mt-3 pt-10 pb-10 appear-animate" data-animation-options="{'delay': '.3s'}">
        <div class="container">
            <h2 class="title">Our Clients</h2>
            <div class="owl-carousel owl-theme row brand-carousel cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2"
                data-owl-options="{
                'nav': false,
                'dots': false,
                'autoplay': true,
                'margin': 20,
                'loop': true,
                'responsive': {
                    '0': {
                        'items': 2
                    },
                    '576': {
                        'items': 3
                    },
                    '768': {
                        'items': 4
                    },
                    '992': {
                        'items': 5
                    },
                    '1200': {
                        'items': 6
                    }
                }
            }">
                <figure><img src="images/brands/1.png" alt="brand" width="180" height="100" />
                </figure>
                <figure><img src="images/brands/2.png" alt="brand" width="180" height="100" />
                </figure>
                <figure><img src="images/brands/3.png" alt="brand" width="180" height="100" />
                </figure>
                <figure><img src="images/brands/4.png" alt="brand" width="180" height="100" />
                </figure>
                <figure><img src="images/brands/5.png" alt="brand" width="180" height="100" />
                </figure>
                <figure><img src="images/brands/6.png" alt="brand" width="180" height="100" />
                </figure>
            </div>
        </div>
    </section>

    <section class="grey-section pt-10 pb-5">
        <div class="container mt-3 mb-4">
            <h2 class="title">Latest Blog</h2>
            <div class="owl-carousel owl-theme row cols-md-2 cols-1" data-owl-options="{
                'items': 2,
                'nav': false,
                'dots': true,
                'loop': false,
                'margin': 20,
                'responsive': {
                    '0': {
                        'items': 1
                    },
                    '768': {
                        'items': 2,
                        'dots': false
                    }
                }
            }">
                <div class="post post-list overlay-dark overlay-zoom appear-animate" data-animation-options="{
                    'name': 'fadeInRightShorter',
                    'delay': '.3s'
                }">
                    <figure class="post-media">
                        <a href="post-single.html">
                            <img src="images/demos/demo1/blog/post1.jpg" width="280" height="206" alt="post" />
                        </a>
                        <div class="post-calendar">
                            <span class="post-day">19</span>
                            <span class="post-month">JAN</span>
                        </div>
                    </figure>
                    <div class="post-details">
                        <h4 class="post-title"><a href="post-single.html">20% Off Coupon for Cyber Week</a>
                        </h4>
                        <p class="post-content">Lorem ipsum dolor sit amet,onadipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua tempo...</p>
                        <a href="post-single.html" class="btn btn-outline btn-md btn-dark btn-icon-right">Read More<i
                                class="d-icon-arrow-right"></i></a>
                    </div>
                </div>
                <div class="post post-list overlay-dark overlay-zoom appear-animate" data-animation-options="{
                    'name': 'fadeInRightShorter',
                    'delay': '.4s'
                }">
                    <figure class="post-media">
                        <a href="post-single.html">
                            <img src="images/demos/demo1/blog/post2.jpg" width="280" height="206" alt="post" />
                        </a>
                        <div class="post-calendar">
                            <span class="post-day">19</span>
                            <span class="post-month">JAN</span>
                        </div>
                    </figure>
                    <div class="post-details">
                        <h4 class="post-title"><a href="post-single.html">30% Discount for Shoes &amp;
                                Bags</a></h4>
                        <p class="post-content">Lorem ipsum dolor sit amet,onadipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua tempo...</p>
                        <a href="post-single.html" class="btn btn-outline btn-md btn-dark btn-icon-right">Read More<i
                                class="d-icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
