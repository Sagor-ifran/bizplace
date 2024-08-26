<?php require_once('header.php'); ?>

<!--Banner Start-->
<div class="banner-area flex" style="background-image:url(img/banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-text">
                    <h1>Shop Detail 2</h1>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><span>Shop Detail 2</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Shop Detail Start-->
<div class="shop-area pt_40 pb_70">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a class="magnific" href="img/work-1.jpg"><img src="img/work-1.jpg" alt=""></a>
                        </div>
                        <div class="carousel-item">
                            <a class="magnific" href="img/work-2.jpg"><img src="img/work-2.jpg" alt=""></a>
                        </div>
                        <div class="carousel-item">
                            <a class="magnific" href="img/work-3.jpg"><img src="img/work-3.jpg" alt=""></a>
                        </div>
                    </div>
                    <ul class="carousel-indicators portfolio-nav owl-carousel">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"><img class="img-responsive" src="img/work-1.jpg" alt=""></li>
                        <li data-target="#myCarousel" data-slide-to="1"><img class="img-responsive" src="img/work-2.jpg" alt=""></li>
                        <li data-target="#myCarousel" data-slide-to="2"><img class="img-responsive" src="img/work-3.jpg" alt=""></li>
                    </ul>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
            </div>
            <div class="col-md-6">
                <div class="shop-detail-text">
                    <h3>T-Shirt S-45</h3>
                    <h4>$35<del>$45</del></h4>
                    <div class="pro-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne.
                    </p>
                </div>
                <div class="shop-detail-choose row">
                    <div class="form-group col-6">
                        <select class="custom-select">
                            <option selected>Size</option>
                            <option value="1">S</option>
                            <option value="2">M</option>
                            <option value="3">L</option>
                            <option value="4">XL</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <select class="custom-select">
                            <option selected>Color</option>
                            <option value="1">White</option>
                            <option value="2">Black</option>
                            <option value="3">Red</option>
                            <option value="4">Yellow</option>
                        </select>
                    </div>
                </div>
                <div class="shop-detail-cart">
                    <ul>
                        <li><a class="cart-btn" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a></li>
                        <li><input type="text" id="shop_spinner" value="1"></li>
                    </ul>
                </div>
                <div class="shop-detail-cat">
                    <p><span>Category: </span>T-shirt</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!--Tab Start-->
                <div class="event-detail-tab mt_50">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a class="active" href="#description" data-toggle="tab">Description</a>
                        </li>
                        <li>
                            <a href="#information" data-toggle="tab">Information</a>
                        </li>
                        <li>
                            <a href="#product-rating" data-toggle="tab">Reviews</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content event-detail-content">
                    <div id="description" class="tab-pane fade show active">
                        <div class="event-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores dolorum et, voluptatum perferendis deleniti voluptate corrupti quo quidem incidunt, tempore amet, modi earum ab cumque. Error deleniti ipsum, placeat beatae!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores dolorum et, voluptatum perferendis deleniti voluptate corrupti quo quidem incidunt, tempore amet, modi earum ab cumque. Error deleniti ipsum, placeat beatae!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores dolorum et, voluptatum perferendis deleniti voluptate corrupti quo quidem incidunt, tempore amet, modi earum ab cumque. Error deleniti ipsum, placeat beatae!</p>
                        </div>
                    </div>
                    <div id="information" class="tab-pane fade">
                        <div class="event-map">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores dolorum et, voluptatum perferendis deleniti voluptate corrupti quo quidem incidunt, tempore amet, modi earum ab cumque. Error deleniti ipsum, placeat beatae!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores dolorum et, voluptatum perferendis deleniti voluptate corrupti quo quidem incidunt, tempore amet, modi earum ab cumque. Error deleniti ipsum, placeat beatae!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores dolorum et, voluptatum perferendis deleniti voluptate corrupti quo quidem incidunt, tempore amet, modi earum ab cumque. Error deleniti ipsum, placeat beatae!</p>
                        </div>
                    </div>
                    <div id="product-rating" class="tab-pane fade">
                        <div class="review-table table-responsive">
                            <h2>Reviews (1)</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><b>Customer Name</b></td>
                                        <td>Hasib</td>
                                    </tr>
                                    <tr>
                                        <td><b>Comment</b></td>
                                        <td>So usefull product</td>
                                    </tr>
                                    <tr>
                                        <td><b>Rating</b></td>
                                        <td>
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="review-form mt_30">
                            <h2>Give a Review</h2>
                            <form>
                                <div class="form-row row">
                                    <div class="form-group col-md-6">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your full name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email Address</label>
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Rating</label>
                                        <div class="review-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Comment</label>
                                        <textarea class="form-control" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn">Submit Review</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Tab End-->
            </div>
        </div>

        <div class="row pt_70">
            <div class="col-md-12">
                <div class="main-headline">
                    <h1><span>Recent</span> Product</h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="relative-product-carousel owl-carousel">
                    <div class="product-item mt_30">
                        <div class="product-image">
                            <a href="#" class="pro-img-hold">
                                <img src="img/work-1.jpg" alt="">
                            </a>
                            <a href="#" class="pro-quick">Quick Book</a>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="pro-title"><a href="#">Product Name</a></h3>
                            <span class="pro-price">$72</span>
                            <div class="product-action">
                                <a href="#" class="action-btn add-wishlist" title="Add Wishlist"><i class="fa fa-heart-o"></i></a>
                                <a href="#" class="action-btn add-cart" title="Add to Cart">Add to Cart</a>
                                <a href="#" class="action-btn add-compare" title="Add Compare"><i class="fa fa-bar-chart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item mt_30">
                        <div class="product-image">
                            <a href="#" class="pro-img-hold">
                                <img src="img/work-1.jpg" alt="">
                            </a>
                            <a href="#" class="pro-quick">Quick Book</a>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="pro-title"><a href="#">Product Name</a></h3>
                            <span class="pro-price">$72</span>
                            <div class="product-action">
                                <a href="#" class="action-btn add-wishlist" title="Add Wishlist"><i class="fa fa-heart-o"></i></a>
                                <a href="#" class="action-btn add-cart" title="Add to Cart">Add to Cart</a>
                                <a href="#" class="action-btn add-compare" title="Add Compare"><i class="fa fa-bar-chart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item mt_30">
                        <div class="product-image">
                            <a href="#" class="pro-img-hold">
                                <img src="img/work-1.jpg" alt="">
                            </a>
                            <a href="#" class="pro-quick">Quick Book</a>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="pro-title"><a href="#">Product Name</a></h3>
                            <span class="pro-price">$72</span>
                            <div class="product-action">
                                <a href="#" class="action-btn add-wishlist" title="Add Wishlist"><i class="fa fa-heart-o"></i></a>
                                <a href="#" class="action-btn add-cart" title="Add to Cart">Add to Cart</a>
                                <a href="#" class="action-btn add-compare" title="Add Compare"><i class="fa fa-bar-chart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item mt_30">
                        <div class="product-image">
                            <a href="#" class="pro-img-hold">
                                <img src="img/work-1.jpg" alt="">
                            </a>
                            <a href="#" class="pro-quick">Quick Book</a>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="pro-title"><a href="#">Product Name</a></h3>
                            <span class="pro-price">$72</span>
                            <div class="product-action">
                                <a href="#" class="action-btn add-wishlist" title="Add Wishlist"><i class="fa fa-heart-o"></i></a>
                                <a href="#" class="action-btn add-cart" title="Add to Cart">Add to Cart</a>
                                <a href="#" class="action-btn add-compare" title="Add Compare"><i class="fa fa-bar-chart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item mt_30">
                        <div class="product-image">
                            <a href="#" class="pro-img-hold">
                                <img src="img/work-1.jpg" alt="">
                            </a>
                            <a href="#" class="pro-quick">Quick Book</a>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="pro-title"><a href="#">Product Name</a></h3>
                            <span class="pro-price">$72</span>
                            <div class="product-action">
                                <a href="#" class="action-btn add-wishlist" title="Add Wishlist"><i class="fa fa-heart-o"></i></a>
                                <a href="#" class="action-btn add-cart" title="Add to Cart">Add to Cart</a>
                                <a href="#" class="action-btn add-compare" title="Add Compare"><i class="fa fa-bar-chart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Shop Detail End-->

<!--Subscribe Start-->
<div class="subscribe-area" style="background-image: url(img/subscribe.png)">
    <div class="container">
        <div class="row ov_hd">
            <div class="col-md-12 wow fadeInDown" data-wow-delay="0.1s">
                <div class="main-headline white">
                    <h1><span>Subscribe</span> For Our Newsletter</h1>
                    <p>With our innovative tools and solutions tailored to empower your business, you just need to sit back and see your problems solved, business operations accelerated and team productivity boosted.</p>
                </div>
            </div>
        </div>
        <div class="row ov_hd">
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="subscribe-form">
                    <form>
                        <input type="text" placeholder="Write Your Email Here">
                        <button type="submit" class="btn-sub">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Subscribe Start-->



<?php require_once('footer.php'); ?>