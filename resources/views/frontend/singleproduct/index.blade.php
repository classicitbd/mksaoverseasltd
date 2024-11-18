@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">Products</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li class="active">Products</li>
                </ul>    
            </div>
        </div>
    </div>

    <section class="shop-single pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0 text-center align-self-center">
                    <div class="product-slide">
                        <div class="zoom"></div>
                        <div class="single-product owl-carousel owl-theme">
                            <div class="item" data-hash="zero">
                                <a href="images/product/single-product-1.jpg" class="link-image-action"><i class="flaticon-search"></i></a>
                                <img src="{{url('frontend/images/product/product.png')}}" alt="" data-zoom="{{url('frontend/images/product/product.png')}}">
                            </div>
                            <div class="item" data-hash="one">
                                <a href="images/product/single-product-2.jpg" class="link-image-action"><i class="flaticon-search"></i></a>
                                <img src="{{url('frontend/images/product/product.png')}}" alt="" data-zoom="{{url('frontend/images/product/product.png')}}">
                            </div>
                            <div class="item" data-hash="two">
                                <a href="images/product/single-product-3.jpg" class="link-image-action"><i class="flaticon-search"></i></a>
                                <img src="{{url('frontend/images/product/product.png')}}" alt="" data-zoom="{{url('frontend/images/product/product.png')}}">
                            </div>
                            <div class="item" data-hash="three">
                                <a href="images/product/single-product-4.jpg" class="link-image-action"><i class="flaticon-search"></i></a>
                                <img src="{{url('frontend/images/product/product.png')}}" alt="" data-zoom="{{url('frontend/images/product/product.png')}}">
                            </div>
                        </div>
                        <div class="nav-img">
                            <div class="item">
                                <div>
                                    <a class="" href="#zero">
                                        <img src="{{url('frontend/images/product/product.png')}}" alt="">
                                    </a> 
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <a class="" href="#one">
                                        <img src="{{url('frontend/images/product/product2.png')}}" alt="">
                                    </a> 
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <a class="" href="#two">
                                        <img src="{{url('frontend/images/product/product3.png')}}" alt="">
                                    </a> 
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <a class="" href="#three">
                                        <img src="{{url('frontend/images/product/product4.png')}}" alt="">
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="summary entry-summary">
                        <h2 class="single-product-title">SIMATIC S7-1200</h2>
                        <div class="single-product-rating">
                            <div class="star-rating">
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">1</span> customer review)</a>
                            </div>
                        </div>
                        <span class="single-price price-product"><span class="amount"><span>$</span>329.99</span></span>
                        <p>SIMATIC S7-1200 controllers by Siemens are the intelligent choice for compact automation solutions with
                            extended communication options and integrated technology functions. They are available in standard and
                            failsafe versions.</p>
                        <p>SIMATIC S7-1200 controllers are the ideal choice when it comes to flexibly and efficiently
                        performing automation tasks in the lower to medium performance range. They feature a comprehensive
                        range of technological functions and integrated communication as well as especially compact and
                        space-saving design.</p>
                        <form class="cart" method="post">
                            <div class="single-quantity">
                                <label class="screen-reader-text">Boost Your Business quantity</label>
                                <input type="number" id="quantity" class="input-text qty text" step="1" min="1" name="quantity" value="1" title="Qty" placeholder="">
                            </div>
                            <button type="submit" name="add-to-cart" class="octf-btn single_add_to_cart_button button alt">Add to cart</button>
                        </form>
                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">124224</span></span>
                            <span class="posted_in">Categories: <a href="#">Converter &amp; Connector</a>, <a href="#">PLC</a></span>
                            <span class="tagged_as">Tags: <a href="#">automation</a>, <a href="#">business</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-70"></div>
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="ot-tabs">
                        <ul class="tabs-heading unstyle">
                            <li class="tab-link octf-btn current" data-tab="tab-1">Description</li>
                            <li class="tab-link octf-btn" data-tab="tab-2">Infomation</li>
                            <li class="tab-link octf-btn" data-tab="tab-3">Review <span>(01)</span></li>
                        </ul>
                        <div id="tab-1" class="tab-content current">
                            <p>SIMATIC S7-1200 controllers are the intelligent choice for compact automation solutions
                            with integrated IOs, communication and technology functions for automation tasks in the low
                            to medium performance range. They are available in standard and fail-safe versions.</p>
                        </div>
                        <div id="tab-2" class="tab-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="woocommerce-product-attributes shop_attributes">
                                        <tbody>
                                            <tr>
                                                <th>Fabric</th>
                                                <td><p>Jacquard</p></td>
                                            </tr>
                                            <tr>
                                                <th>Color</th>
                                                <td><p>Black, Red, Blue</p></td>
                                            </tr>
                                            <tr>
                                                <th>Weight</th>
                                                <td><p>20oz / 0.57kg</p></td>
                                            </tr>
                                            <tr>
                                                <th>Height</th>
                                                <td><p>13.75in / 35cm</p></td>
                                            </tr>
                                            <tr>
                                                <th>Length</th>
                                                <td><p>9in / 23cm</p></td>
                                            </tr>
                                            <tr>
                                                <th>Depth</th>
                                                <td><p>6in / 15cm</p></td>
                                            </tr>
                                            <tr>
                                                <th>Size</th>
                                                <td><p>S, M, XL</p></td>
                                            </tr>
                                            <tr>
                                                <th>Other Info</th>
                                                <td><p>Duis ullamcorper arcu et ligula volutpat imperdiet</p></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-content">
                            <h2 class="woocommerce-reviews-title">1 review for <span>T-Shirt with Logo</span></h2>
                            <div class="review-comment">
                                <ol class="review-comment-list">
                                    <li class="comment-item">
                                        <div class="comment-wrap">
                                            <div class="avatar-author-review">
                                                <img src="{{url('frontend/images/author-review.jpg')}}" alt="" class="review-avatar">
                                            </div>
                                            <div class="review-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <div class="review-comment-content">
                                                <div class="comment-meta">
                                                    <h6 class="comment-author">Tom Black </h6>
                                                    <span class="comment-time"> - March 13, 2020</span>
                                                </div>
                                                <div class="comment-text">
                                                    <p>Nice product !</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <div class="review-form">
                                <span class="comment-reply-title">Add a review </span>
                                <form class="review-comment-form">
                                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                    <div class="comment-form-rating">
                                        <label>Your rating <span class="required">*</span></label>
                                        <div class="review-comment-rating mb-3">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                    </div>
                                    <p class="comment-form-author">
                                        <input id="author" name="author" type="text" value="" size="30" placeholder="Name *" required="">
                                    </p>
                                    <p class="comment-form-email">
                                        <input id="email" name="email" type="text" value="" size="30" placeholder="Email *" required="">
                                    </p>
                                    <p class="comment-form-comment">
                                        <textarea id="comment" name="comment" cols="45" rows="8" placeholder="Comment *" required=""></textarea>
                                    </p>
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="submit" class="octf-btn" value="Submit"> 
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center mb-2">
                    <h2>Related Products</h2>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-item">
                        <div class="product-media"> 
                            <a href="single-product.html">
                                <img src="{{url('frontend/images/product/pp1.png')}}" class="" alt="">
                            </a>
                            <div class="wrapper-add-to-cart">
                                <div class="add-to-cart-inner">
                                    <a href="cart.html" class="octf-btn octf-btn-primary">Add to cart </a>           
                                </div>
                            </div>
                        </div>
                        <h2 class="woocommerce-loop-product__title"><a href="single%3dproduct.html">Siemens Contactor</a></h2>
                        <span class="price-product"><span class="amount"><span>$</span>139.99</span></span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-item">
                        <div class="product-media"> 
                            <a href="single-product.html">
                                <img src="{{url('frontend/images/product/product1.png')}}" class="" alt="">
                            </a>
                            <div class="wrapper-add-to-cart">
                                <div class="add-to-cart-inner">
                                    <a href="cart.html" class="octf-btn octf-btn-primary">Add to cart </a>           
                                </div>
                            </div>
                        </div>
                        <h2 class="woocommerce-loop-product__title"><a href="single%3dproduct.html">Siemens converter</a></h2>
                        <span class="price-product"><span class="amount"><span>$</span>159.99</span></span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-item">
                        <div class="product-media"> 
                            <a href="single-product.html">
                                <img src="{{url('frontend/images/product/pp2.png')}}" class="" alt="">
                            </a>
                            <div class="wrapper-add-to-cart">
                                <div class="add-to-cart-inner">
                                    <a href="cart.html" class="octf-btn octf-btn-primary">Add to cart </a>           
                                </div>
                            </div>
                        </div>
                        <h2 class="woocommerce-loop-product__title"><a href="single%3dproduct.html">SIMATIC S7-1200 Starter Kits</a></h2>
                        <span class="price-product"><span class="amount"><span class="">$</span>229.99</span></span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-item">
                        <div class="product-media"> 
                            <a href="single-product.html">
                                <span class="onsale">Sale!</span>
                                <img src="{{url('frontend/images/product/product1.png')}}" class="" alt="">
                            </a>
                            <div class="wrapper-add-to-cart">
                                <div class="add-to-cart-inner">
                                    <a href="cart.html" class="octf-btn octf-btn-primary">Add to cart </a>           
                                </div>
                            </div>
                        </div>
                        <h2 class="woocommerce-loop-product__title"><a href="single%3dproduct.html">Siemens converter</a></h2>
                        <span class="price-product">
                            <del><span class="amount"><span>$</span>159.99</span></del> 
                            <ins><span class="amount"><span>$</span>129.99</span></ins>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    
    <div class="padding-half bg-light-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partners">
                        <div class="owl-carousel owl-theme home-client-carousel"> 
                            @foreach($partner as $val)     
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{ asset('img/' . $val->image) }}" alt="">
                                    </figure>                             
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection