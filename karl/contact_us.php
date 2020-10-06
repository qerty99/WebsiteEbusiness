<?php include('login.php'); ?>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/simpleCart.js"></script>
    <script src="js/simplecartjs-config.js"></script>
    <!-- Title  -->
    <title>Suited Switch | Contact Us</title>
    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
  </head>
  <body>
  <?php include('menu.php'); ?>
    <div class="catagories-side-menu">
      <!-- Close Icon -->
      <div id="sideMenuClose"> <i class="ti-close"></i> </div>
      <!--  Side Nav  -->
      <div class="nav-side-menu">
        <div class="menu-list">
          <h6>Categories</h6>
          <ul id="menu-content" class="menu-content collapse out">
            <!-- Single Item -->
            <li data-toggle="collapse" data-target="#women" class="collapsed active">
              <a href="#"> Cases <span class="arrow"></span></a>
              <ul class="sub-menu collapse" id="women">
                <li><a href="#">100% cases</a></li>
                <li><a href="#">80% cases</a></li>
                <li><a href="#">60% cases</a></li>
              </ul>
            </li>
            <!-- Single Item -->
            <li data-toggle="collapse" data-target="#man" class="collapsed"> <a

                href="#">PCB <span class="arrow"></span></a>
              <ul class="sub-menu collapse" id="man">
                <li><a href="#">100% PCB</a></li>
                <li><a href="#">80% PCB</a></li>
                <li><a href="#">60% PCB</a></li>
              </ul>
            </li>
            <!-- Single Item -->
            <li data-toggle="collapse" data-target="#kids" class="collapsed"> <a

                href="#">Keycaps <span class="arrow"></span></a>
              <ul class="sub-menu collapse" id="kids">
                <li><a href="sakeycaps.php">SA keycaps</a></li>
                <li><a href="cherry_keycaps.php">Cherry keycaps</a></li>
              </ul>
            </li>
            <!-- Single Item -->
            <!-- Single Item -->
            <!-- Single Item -->
          </ul>
        </div>
      </div>
    </div>
    <div id="wrapper">
      <!-- ****** Header Area Start ****** -->
      <header class="header_area bg-img background-overlay-white" style="background-image: url();">
        <!-- Top Header Area Start -->
        <div class="top_header_area">
          <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-end">
              <div class="col-12 col-lg-7">
                <div class="top_single_area d-flex align-items-center">
                  <!-- Logo Area -->
                  <div class="top_logo"> <a href="#"><img src="img/core-img/logo.png"

                        alt=""></a> </div>
                  <!-- Cart & Menu Area -->
                  <div class="header-cart-menu d-flex align-items-center ml-auto">
                    <!-- Cart Area -->
                    <div class="cart"> <a href="#" id="header-cart-btn" target="_blank">Your Shopping Cart (<span class="simpleCart_quantity"></span>) <span class ="simpleCart_total"></span> </a>
                      <!-- Cart List Area Start -->
                      <ul class="cart-list">
                        <li class="total"> <span class="pull-right">Total:
                          <span class ="simpleCart_total"></span></span> <a href="cart.php" class="btn btn-sm btn-cart">Cart</a>
                          <a href="checkout-1.php" class="btn btn-sm btn-checkout">Checkout</a>
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
                <?php include('menu.php'); ?>
                <!-- Help Line -->
                <div class="help-line"> <a href="tel:+346573556778"><i class="ti-headphone-alt"></i>
                    +34 657 3556 778</a> </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ****** Header Area End ****** -->
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
      <!-- ****** Checkout Area Start ****** -->
      <div class="checkout_area section_padding_100">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="checkout_details_area mt-50 clearfix">
                <div class="cart-page-heading">
                  <h5>Contact Us</h5>
                </div>
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-6 mb-3"> <label for="first_name">First
                        Name <span>*</span></label> <input class="form-control"

                        id="first_name" value="" required="" type="text"> </div>
                    <div class="col-md-6 mb-3"> <label for="last_name">Last
                        Name <span>*</span></label> <input class="form-control"

                        id="last_name" value="" required="" type="text"> </div>
                    <div class="col-12 mb-3"> <label for="phone_number">Phone
                        No <span>*</span></label> <input class="form-control"

                        id="phone_number" value="" type="number"> </div>
                    <div class="col-12 mb-4"> <label for="email_address">Email
                        Address <span>*</span></label> <input class="form-control"

                        id="email_address" value="" type="email"> </div>
                    <div class="col-12 mb-3"> <label for="topic">Topic <span></span></label>
                      <select class="custom-select d-block w-100" id="topic">
                        <option value="faulty">Faulty products, return &amp;
                          consumer guarantees</option>
                        <option value="cancel">Please cancel my order</option>
                        <option value="availability">Product availability</option>
                        <option value="delivery">Delivery and shipping</option>
                        <option value="order">Orders and ordering help</option>
                        <option value="account">Website, account and online
                          purchasing issues</option>
                        <option value="feedback">Website complaints, compliments
                          &amp; feedback</option>
                        <option value="payment">Payment methods, plans &amp;
                          finance</option>
                        <option value="scams">Scams - info &amp; support</option>
                        <option value="privacy">Privacy</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                    <div class="col-12 mb-4"> <label for="message">Message <span></span></label>
                      <input class="form-control" id="user_message" value="" type="text">
                    </div>
                    <div class="col-12"> <a href="#" class="btn karl-checkout-btn">Submit</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
              <div class="order-details-confirmation">
                <div class="cart-page-heading">
                  <h5>Contact Information</h5>
                  <p>The Details</p>
                </div>
                <ul class="order-details-form mb-4">
                  <li><span>Phone</span> <span>+34 657 3556 778</span></li>
                  <li><span>Email</span> <span>sskeyboard@gmail.com</span></li>
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
                <div class="footer-logo"> <img src="img/core-img/logo.png" alt="">
                </div>
                <div class="copywrite_text d-flex align-items-center">
                  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright ©
                    <script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This template is made with by <a href="https://colorlib.com"

                      target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
              </div>
            </div>
            <!-- Single Footer Area Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
              <div class="single_footer_area">
                <ul class="footer_widget_menu">
                  <li><a href="#">About</a></li>
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
                  <li><a href="map.php">Site Map</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Faq</a></li>
                  <li><a href="#">Returns</a></li>
                  <li><a href="#">Contact</a></li>
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
                  <form action="#" method="post"> <input name="mail" class="mail"

                      placeholder="Your email here" type="email"> <button type="submit"

                      class="submit">Subscribe</button> </form>
                </div>
              </div>
            </div>
          </div>
          <div class="line"></div>
          <!-- Footer Bottom Area Start -->
          <div class="footer_bottom_area">
            <div class="row">
              <div class="col-12">
                <div class="footer_social_area text-center"> <a href="#"><i class="fa fa-pinterest"

                      aria-hidden="true"></i></a> <a href="#"><i class="fa fa-facebook"

                      aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter"

                      aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin"

                      aria-hidden="true"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- ****** Footer Area End ****** --> </div>
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
</html>
