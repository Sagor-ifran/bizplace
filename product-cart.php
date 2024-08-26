<?php require_once('header.php'); ?>

<!--Banner Start-->
<div class="banner-area flex" style="background-image:url(img/banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-text">
                    <h1>Shop Cart</h1>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><span>Shop Cart</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Shop Cart Start-->
<div class="shop-cart pt_40 pb_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt_30">
                <div class="cart-table table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th class="c-number">No</th>
                                <th class="c-photo">Image</th>
                                <th class="c-name">Product Name</th>
                                <th class="c-price">Price</th>
                                <th class="c-qnt">Quantity</th>
                                <th class="c-total">Total</th>
                                <th class="c-delete">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span>1</span></td>
                                <td><a href="#"><img src="img/work-1.jpg" alt="Product Photo"></a></td>
                                <td><a href="#">Jacket S-45</a></td>
                                <td>$65</td>
                                <td><input type="number" value="1"></td>
                                <td>$65</td>
                                <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            <tr>
                                <td><span>2</span></td>
                                <td><a href="#"><img src="img/work-2.jpg" alt="Product Photo"></a></td>
                                <td><a href="#">T-Shirt S-45</a></td>
                                <td>$35</td>
                                <td><input type="number" value="1"></td>
                                <td>$35</td>
                                <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            <tr>
                                <td><span>3</span></td>
                                <td><a href="#"><img src="img/work-3.jpg" alt="Product Photo"></a></td>
                                <td><a href="#">Skirt S-35</a></td>
                                <td>$55</td>
                                <td><input type="number" value="1"></td>
                                <td>$55</td>
                                <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 mt_30">
                <div class="total-cart table-responsive">
                    <h4>Summary</h4>
                    <div id="accordion" class="cart-shipping">
                        <div class="faq-item card">
                            <div class="faq-header" id="shipping">
                                <button class="faq-button collapsed" data-toggle="collapse" data-target="#shipping1" aria-expanded="true" aria-controls="collapse2">Shipping and Tax</button>
                            </div>

                            <div id="shipping1" class="collapse" aria-labelledby="shipping" data-parent="#accordion">
                                <div class="cart-ship-body">
                                    <form>
                                        <div class="form-row row mt_30">
                                            <div class="form-group col-12">
                                                <select class="custom-select select2">
                                                    <option selected>Country Name</option>
                                                    <option value="1">USA</option>
                                                    <option value="3">England</option>
                                                    <option value="3">Germany</option>
                                                    <option value="2">Spain</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12">
                                                <select class="custom-select">
                                                    <option selected>State/Province</option>
                                                    <option value="1">USA</option>
                                                    <option value="3">England</option>
                                                    <option value="3">Germany</option>
                                                    <option value="2">Spain</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12">
                                                <input type="text" class="form-control" placeholder="Zip Code">
                                            </div>
                                            <div class="form-group col-12">
                                                <button class="tax-btn btn" type="button">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td>$155.00</td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td>$0.00</td>
                            </tr>
                            <tr>
                                <td class="t-bold">Total</td>
                                <td class="t-bold">$155.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="proceed-cart">
                    <a href="#">Proceed to checkout</a>
                </div>
            </div>
        </div>
        <div class="cart-action row">
            <div class="col-lg-12">
                <div class="update-cart">
                    <a href="#">Update Cart</a>
                    <a href="#">Continue Shopping</a>
                </div>
                <div class="coupon-cart input-group">
                    <input type="text" class="form-control" placeholder="Coupon Code">
                    <span class="input-group-btn">
                        <button class="btn" type="button">Apply Coupon</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Shop Cart End-->

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