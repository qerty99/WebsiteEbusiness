<?php include('../Login.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Link to simpleCartJS-->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../js/simpleCart.js"></script>
    <script src="../js/simplecartjs-config.js"></script>
    <!-- Title  -->
    <title>The Suited Switch | Checkout</title>

    <!-- Favicon  -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="../css/core-style.css">
    <link rel="stylesheet" href="../style.css">

    <!-- Responsive CSS -->
    <link href="../css/responsive.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
      <!-- ****** Header Area Start ****** -->
      <header class="header_area">
        <!-- Top Header Area Start -->
        <div class="top_header_area">
          <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-end">
              <div class="col-12 col-lg-7">
                <div class="top_single_area d-flex align-items-center">
                  <!-- Logo Area -->
                  <div class="top_logo"> <a href="#"><img src="../img/core-img/logo.png"

                        alt=""></a> </div>
                  <!-- Cart & Menu Area -->
                  <div class="header-cart-menu d-flex align-items-center ml-auto">
                    <!-- Cart Area -->
                    <div class="cart">
                        <a href="#" id="header-cart-btn" target="_blank">Your Shopping Cart(<span class="simpleCart_quantity"></span>) <span class="simpleCart_total"></span></a>
                        <!-- Cart List Area Start -->
                        <ul class="cart-list">
                            <li class="total"> <div class="pull-right"><span class="simpleCart_total"></span></div> <a href="cart.php" class="btn btn-sm btn-cart">Cart</a>
                                <a href="checkout.php" class="btn btn-sm btn-checkout">Checkout</a>
                                
                            </li>
                        </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Top Header Area End -->
        <div class="main_header_area">
          <div class="container h-100">
            <div class="row h-100">
              <div class="col-12 d-md-flex justify-content-between">
                <!-- Header Social Area -->
                <div class="header-social-area"> <a href="#"><span class="karl-level">Share</span>
                    <i class="fa fa-pinterest" aria-hidden="true"></i></a> <a href="#"><i

                      class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i

                      class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i

                      class="fa fa-linkedin" aria-hidden="true"></i></a> </div>
                <!-- Menu Area -->
                <div class="main-menu-area">
                  <nav class="navbar navbar-expand-lg align-items-start"> <button

                      class="navbar-toggler" type="button" data-toggle="collapse"

                      data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false"

                      aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i

                          class="ti-menu"></i></span></button>
                    <div class="collapse navbar-collapse align-items-start collapse"

                      id="karl-navbar">
                      <ul class="navbar-nav animated" id="nav">
                        <li class="nav-item active"><a class="nav-link" href="../index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../aboutus.php">About
                            Us</a></li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle"

                            href="#" id="karlDropdown" role="button" data-toggle="dropdown"

                            aria-haspopup="true" aria-expanded="false"><span class="karl-level">Sale</span>Store</a>
                          <div class="dropdown-menu" aria-labelledby="karlDropdown">
                            <a class="dropdown-item" href="../cases-shop.php">Cases</a>
                            <a class="dropdown-item" href="../keycaps.php">Keycaps</a>
                            <a class="dropdown-item" href="../pcb.php">PCBs</a> </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../custom.php">Custom
                            Builds</a></li>
                        <li class="nav-item"><a class="nav-link" href="../contact_us.php">Contact
                            Us</a></li>
                      </ul>
                    </div>
                  </nav>
                </div>
                <!-- Help Line -->
                <div class="help-line"> <a href="tel:+346573556778"><i class="ti-headphone-alt"></i>
                    +34 657 3556 778</a> </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ****** Header Area End ****** -->
      <!-- ****** Top Discount Area Start ****** -->
      <section class="top-discount-area d-md-flex align-items-center">
        <!-- Single Discount Area -->
        <div class="single-discount-area">
          <h5>Free Shipping &amp; Returns</h5>
          <h6><a href="#">BUY NOW</a></h6>
        </div>
        <!-- Single Discount Area -->
        <div class="single-discount-area">
          <h5>20% Discount off selected products</h5>
          <h6>USE CODE: Colorlib</h6>
        </div>
        <!-- Single Discount Area -->
        <div class="single-discount-area">
          <h5>20% Discount for students</h5>
          <h6>USE CODE: Colorlib</h6>
        </div>
      </section>
      <!-- ****** Top Discount Area End ****** -->

        <!-- ****** Checkout Area Start ****** -->
        <div class="checkout_area section_padding_100">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-page-heading">
                                <h4>Checkout</h4>
                            </div>

                            <form action="#" method="post">
                                <h5>Your Details</h5>

                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Email Address <span>*</span></label>
                                        <input type="email" class="form-control" name="email" id="email_address" value="">
                                        <p>We'll send your order confirmation here</p>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="fname">First Name <span>*</span></label>
                                        <input type="text" class="form-control" name="first_name" id="fname" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lname">Last Name <span>*</span></label>
                                        <input type="text" class="form-control" name="last_name" id="lname" value="" required>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="street_address">Address <span>*</span></label>
                                        <input type="text" class="form-control mb-3" name="street1" id="street_address1" value="">
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="city">Town/City <span>*</span></label>
                                        <input type="text" class="form-control" name="city" id="city" value="">
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="postal_code">Postcode <span>*</span></label>
                                        <input type="text" class="form-control" name="postcode" id="postal_code" value="">
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="state">State <span>*</span></label>
                                        <input type="text" class="form-control" name="state" id="state" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="country">Country <span>*</span></label>
                                        <select class="custom-select d-block w-100" name="country" id="country">
                                        <option value="US">United States</option>
                                        <option value="UK">United Kingdom</option>
                                        <option value="Germany">Germany</option>
                                        <option value="France">France</option>
                                        <option value="India">India</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                    </select>
                                    </div>
                                    <div class="col-12">

                                        <div class="payment">
                                            <h4>Payment</h4>
                                            <div>
                                                <input type="radio" id="cc_mastercard" name="cc_type" value="mastercard"/>
                                                <label for="cc_mastercard">Mastercard</label>
                                            </div>

                                            <div>
                                                <input type="radio" id="cc_visa" name="cc_type" value="visa"/>
                                                <label for="cc_visa">Visa</label>
                                            </div>

                                            <div>
                                                <input type="radio" id="cc_amex" name="cc_type" value="amex"/>
                                                <label for="cc_amex">American Express</label>
                                            </div>
                                            <div class="form_card">
                                                <div class="col-12 mb-4">
                                                    <label for="credit_card_number">Card Number</label>
                                                    <input type="text" class="form-control" name="ccnumber" id="credit_card_number"/>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="credit_card_name">Name on Card</label>
                                                        <input type="text" class="form-control" name="ccname" id="credit_card_name"/>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="credit_card_security_code">Security Code</label>
                                                        <input type="text" class="form-control" name="ccsecuritycode" id="credit_card_security_code"/>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                </form>
                            <!--Checkout-->
                            <div class="checkout">
                                <a href="javascript:;" class="simpleCart_checkout">Place Order</a>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                        <div class="order-details-confirmation">

                            <div class="cart-page-heading">
                                <h5>Your Order</h5>
                                <p>The Details</p>
                            </div>

                            <ul class="order-details-form mb-4">

                                <li><span>Subtotal</span> <span class="simpleCart_total"></span></li>
                                <li><span>Shipping</span> <span class="simpleCart_shipping"></span></li>
                                <li><span>Total</span> <span class="simpleCart_grandTotal"></span></li>
                            </ul>
                        </div>
                    </div>

                    

                </div>
            </div>
        </div>
        <!-- ****** Checkout Area End ****** -->

        <!-- ****** Footer Area Start ****** -->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <img src="img/core-img/logo.png" alt="">
                            </div>
                            <div class="copywrite_text d-flex align-items-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="map.php">Site Map</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Our Policies</a></li>
                                <li><a href="#">Afiliates</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-lg-5">
                        <div class="single_footer_area">
                            <div class="footer_heading mb-30">
                                <h6>Subscribe to our newsletter</h6>
                            </div>
                            <div class="subscribtion_form">
                                <form action="#" method="post">
                                    <input type="email" name="mail" class="mail" placeholder="Your email here">
                                    <button type="submit" class="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>

                <!-- Footer Bottom Area Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_social_area text-center">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>
        <!-- ****** Footer Area Start ****** -->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <img src="img/core-img/logo.png" alt="">
                            </div>
                            <div class="copywrite_text d-flex align-items-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="map.php">Site Map</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Our Policies</a></li>
                                <li><a href="#">Afiliates</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-lg-5">
                        <div class="single_footer_area">
                            <div class="footer_heading mb-30">
                                <h6>Subscribe to our newsletter</h6>
                            </div>
                            <div class="subscribtion_form">
                                <form action="#" method="post">
                                    <input type="email" name="mail" class="mail" placeholder="Your email here">
                                    <button type="submit" class="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>

                <!-- Footer Bottom Area Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_social_area text-center">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</html>