@extends('master')
@section('content')


<div class=" product product-single row mb-4">
    <div class="col-md-6">
aaaaaaaaa
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
                        <img src="images/product/product-1-137x137.jpg" alt="product thumbnail"
                            width="109" height="122">
                    </div>
                    <div class="product-thumb">
                        <img src="images/product/product-2-137x137.jpg" alt="product thumbnail"
                            width="109" height="122">
                    </div>
                    <div class="product-thumb">
                        <img src="images/product/product-3-137x137.jpg" alt="product thumbnail"
                            width="109" height="122">
                    </div>
                    <div class="product-thumb">
                        <img src="images/product/product-4-137x137.jpg" alt="product thumbnail"
                            width="109" height="122">
                    </div>
                    <div class="product-thumb">
                        <img src="images/product/product-5-137x137.jpg" alt="product thumbnail"
                            width="109" height="122">
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

            <div class="product-footer">
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
            </ul>
        </div>
    </div>
</div>


@endsection
