<html>
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
        <title>The Suited Switch | Confirmation</title>
    
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
                            <li class="total"> <div class="pull-right"><span class="simpleCart_total"></span></div> <a href="cart.html" class="btn btn-sm btn-cart">Cart</a>
                                <a href="checkout-1.html" class="btn btn-sm btn-checkout">Checkout</a>
                                
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
                        <li class="nav-item active"><a class="nav-link" href="../index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../aboutus.html">About
                            Us</a></li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle"

                            href="#" id="karlDropdown" role="button" data-toggle="dropdown"

                            aria-haspopup="true" aria-expanded="false"><span class="karl-level">Sale</span>Store</a>
                          <div class="dropdown-menu" aria-labelledby="karlDropdown">
                            <a class="dropdown-item" href="../cases-shop.html">Cases</a>
                            <a class="dropdown-item" href="../keycaps.html">Keycaps</a>
                            <a class="dropdown-item" href="../pcb.html">PCBs</a> </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../custom.html">Custom
                            Builds</a></li>
                        <li class="nav-item"><a class="nav-link" href="../contact_us.html">Contact
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
      <div class="checkout_area section_padding_100">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="checkout_details_area mt-50 clearfix">
                <h4>Thank you for your Order</h4>

                  <?php

                      $email=htmlspecialchars($_POST["email_address"]);
                      $first_name = htmlspecialchars($_POST["first_name"]);
                      $last_name = htmlspecialchars($_POST["last_name"]);
                      $street1 = htmlspecialchars($_POST["street1"]);
                      $city = htmlspecialchars($_POST["city"]);
                      $postcode = htmlspecialchars($_POST["postcode"]);
                      $state = htmlspecialchars($_POST["state"]);
                      $country = htmlspecialchars($_POST["country"]);

                      echo "Order Number: " . uniqid() . "<br />";
                      echo "Order Date: " . date("l d/m/Y") . "<br />";
                      echo "Customer: " . $first_name . " " . $last_name . "<br /><br />"; 
                      echo "<h5>Shipping Address</h4>";
                      echo $street1 . "<br />" . $city . ", " . $postcode . "<br />";
                      echo $state . ", " . $country . "<br />";
                      echo $email . "<br />";

                      ?>
              </div>
            </div>
          

            <div class='col-12 col-md-6 col-lg-5 ml-lg-auto'>
                <div class='order-details-confirmation'>

                    <div class='cart-page-heading'>
                        <h5>Your Order</h5>
                        <p>The Details</p>
                    </div>

                    <ul class='order-details-form mb-4'>
                        <li><span>Product</span> <span>Total</span></li>
                        <li><span>Cocktail Yellow dress</span> <span>$59.90</span></li>
                        <li><span>Subtotal</span> <span class='simpleCart_total'></span></li>
                        <li><span>Shipping</span> <span class='simpleCart_shipping'></span></li>
                        <li><span>Total</span> <span class='simpleCart_grandTotal'></span></li>
                    </ul>
                </div>
            </div>
          </div>
      </div>
    </div>
</body>
</html>