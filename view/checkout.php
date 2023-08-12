<div class="page-banner-section section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h1>Check Out</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Check out</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>


<!--Checkout section start-->
<div class="checkout-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Checkout Form Start-->
                <form action="#" class="checkout-form">
                    <div class="row row-40">

                        <div class="col-lg-7">

                            <!-- Billing Address -->
                            <div id="billing-form" class="mb-10">
                                <h4 class="checkout-title">Billing Address</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12 mb-5">
                                        <label>Họ và tên*</label>
                                        <input type="text" placeholder="Họ và tên">
                                    </div>
                                    <div class="col-md-12 col-12 mb-5">
                                        <label>Email Address*</label>
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-12 col-12 mb-5">
                                        <label>Phone no*</label>
                                        <input type="text" placeholder="Số điện thoại">
                                    </div>
                                    <div class="col-12 mb-5">
                                        <label>Address*</label>
                                        <input type="text" placeholder="Nhập địa chỉ">
                                    </div>
                                    <div class="col-12 mb-5">
                                        <div class="check-box">
                                            <input type="checkbox" id="shiping_address" data-shipping>
                                            <label for="shiping_address">Ship to Different Address</label>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- Shipping Address -->
                            <div id="shipping-form">
                                <h4 class="checkout-title">Shipping Address</h4>

                                <div class="row">

                                    <div class="col-md-12 col-12 mb-5">
                                        <label>Họ và tên*</label>
                                        <input type="text" placeholder="Họ và tên">
                                    </div>
                                    <div class="col-md-12 col-12 mb-5">
                                        <label>Email Address*</label>
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-12 col-12 mb-5">
                                        <label>Phone no*</label>
                                        <input type="text" placeholder="Số điện thoại">
                                    </div>
                                    <div class="col-12 mb-5">
                                        <label>Address*</label>
                                        <input type="text" placeholder="Nhập địa chỉ">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="row">

                                <!-- Cart Total -->
                                <div class="col-12 mb-60">

                                    <h4 class="checkout-title">Cart Total</h4>

                                    <div class="checkout-cart-total">

                                        <h4>Product <span>Total</span></h4>

                                        <ul>
                                            <li>Teritory Quentily X 01 <span>$35.00</span></li>
                                            <li>Adurite Silocone X 02 <span>$59.00</span></li>
                                            <li>Baizidale Momone X 01 <span>$78.00</span></li>
                                            <li>Makorone Cicile X 01 <span>$65.00</span></li>
                                        </ul>

                                        <p>Sub Total <span>$296.00</span></p>
                                        <p>Shipping Fee <span>$00.00</span></p>

                                        <h4>Grand Total <span>$296.00</span></h4>

                                    </div>

                                </div>

                                <!-- Payment Method -->
                                <div class="col-12 mb-30">

                                    <h4 class="checkout-title">Payment Method</h4>

                                    <div class="checkout-payment-method">

                                        <div class="single-method">
                                            <input type="radio" id="payment_check" name="payment-method" value="check">
                                            <label for="payment_check">Check Payment</label>
                                            <p data-method="check">Please send a Check to Store name with Store
                                                Street, Store Town, Store State, Store Postcode, Store Country.
                                            </p>
                                        </div>

                                        <div class="single-method">
                                            <input type="radio" id="payment_bank" name="payment-method" value="bank">
                                            <label for="payment_bank">Direct Bank Transfer</label>
                                            <p data-method="bank">Please send a Check to Store name with Store
                                                Street, Store Town, Store State, Store Postcode, Store Country.
                                            </p>
                                        </div>

                                        <div class="single-method">
                                            <input type="radio" id="payment_cash" name="payment-method" value="cash">
                                            <label for="payment_cash">Cash on Delivery</label>
                                            <p data-method="cash">Please send a Check to Store name with Store
                                                Street, Store Town, Store State, Store Postcode, Store Country.
                                            </p>
                                        </div>

                                        <div class="single-method">
                                            <input type="radio" id="payment_paypal" name="payment-method" value="paypal">
                                            <label for="payment_paypal">Paypal</label>
                                            <p data-method="paypal">Please send a Check to Store name with Store
                                                Street, Store Town, Store State, Store Postcode, Store Country.
                                            </p>
                                        </div>

                                        <div class="single-method">
                                            <input type="radio" id="payment_payoneer" name="payment-method" value="payoneer">
                                            <label for="payment_payoneer">Payoneer</label>
                                            <p data-method="payoneer">Please send a Check to Store name with
                                                Store Street, Store Town, Store State, Store Postcode, Store
                                                Country.</p>
                                        </div>

                                        <div class="single-method">
                                            <input type="checkbox" id="accept_terms">
                                            <label for="accept_terms">I’ve read and accept the terms &
                                                conditions</label>
                                        </div>

                                    </div>

                                    <button class="place-order btn btn-lg btn-round">Place order</button>

                                </div>

                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!--Checkout section end-->