<?php require_once('header.php'); ?>

<!--Banner Start-->
<div class="banner-area flex" style="background-image:url(img/banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-text">
                    <h1>Check Out</h1>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><span>Check Out</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Check Out Start-->
<div class="check-out pt_40 pb_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="checkout-form">
                    <h4>Billing Information</h4>
                    <form>
                        <div class="form-row row">
                            <div class="form-group col-sm-6 col-12">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group col-sm-6 col-12">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group col-sm-6 col-12">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group col-sm-6 col-12">
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="form-group col-sm-6 col-12">
                                <select class="custom-select select2">
                                    <option selected>Country Name</option>
                                    <option value="1">USA</option>
                                    <option value="3">England</option>
                                    <option value="3">Germany</option>
                                    <option value="2">Spain</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 col-12">
                                <input type="text" class="form-control" placeholder="State">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" class="form-control" placeholder="Address">
                            </div>
                            <div class="form-group col-sm-6 col-12">
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                            <div class="form-group col-sm-6 col-12">
                                <input type="text" class="form-control" placeholder="Zip Code">
                            </div>
                            <div class="form-group col-12 mt_15 mb_0">
                                <div class="form-checkbox">
                                    <input type="checkbox" class="checkbox-input" id="shipping_checkbox" name="shipping_checkbox" onclick="myFunction()">
                                    <label class="checkbox-label" for="shipping_checkbox">Ship to a different address?</label>
                                </div>
                            </div>

                            <div id="shipping-info" class="col-12" style="display:none">
                                <h4>Shipping Information</h4>
                                <div class="form-row row">
                                    <div class="form-group col-sm-6 col-12">
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-sm-6 col-12">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                    <div class="form-group col-sm-6 col-12">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="form-group col-sm-6 col-12">
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-sm-6 col-12">
                                        <select class="custom-select select2">
                                            <option selected>Country Name</option>
                                            <option value="1">USA</option>
                                            <option value="3">England</option>
                                            <option value="3">Germany</option>
                                            <option value="2">Spain</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6 col-12">
                                        <input type="text" class="form-control" placeholder="State">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>
                                    <div class="form-group col-sm-6 col-12">
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                    <div class="form-group col-sm-6 col-12">
                                        <input type="text" class="form-control" placeholder="Zip Code">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-12">
                                <textarea class="form-control" placeholder="Order Note"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="checkout-table table-responsive">
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

                    <div class="ck-cart coupon-cart input-group mb_30">
                        <input type="text" class="form-control" placeholder="Coupon Code">
                        <span class="input-group-btn">
                            <button class="btn" type="button">Apply Coupon</button>
                        </span>
                    </div>

                    <h4>Your Order</h4>

                    <table class="table">
                        <thead>
                            <tr>
                                <th><b>Product Name</b></th>
                                <th><b>Total</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jacket S-45</td>
                                <td>$65</td>
                            </tr>
                            <tr>
                                <td>T-Shirt S-45</td>
                                <td>$35</td>
                            </tr>
                            <tr>
                                <td>Sub Total</td>
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
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="payment-select">
                    <h4>Payment Method</h4>
                    <div class="payment-select-group">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions">PAYPAL
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions">STRIPE
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions">DIRECT BANK TRANSFER
                            </label>
                        </div>
                        <form>
                            <div class="row">
                                <div class="offset-lg-2 col-lg-8 offset-lg-2">
                                    <div class="form-row row mt_30">
                                        <div class="form-group col-sm-6 col-12">
                                            <input type="text" class="form-control" placeholder="Card Number">
                                        </div>
                                        <div class="form-group col-sm-6 col-12">
                                            <input type="text" class="form-control" placeholder="Carc CVC">
                                        </div>
                                        <div class="form-group col-sm-6 col-12">
                                            <input type="text" class="form-control" placeholder="Expiry Month">
                                        </div>
                                        <div class="form-group col-sm-6 col-12">
                                            <input type="text" class="form-control" placeholder="Expiry Year">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="payment-order-button">
                        <a href="#">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Check Out End-->

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


<script>
    function myFunction() {
        var checkBox = document.getElementById("shipping_checkbox");
        var text = document.getElementById("shipping-info");
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
</script>

<?php require_once('footer.php'); ?>