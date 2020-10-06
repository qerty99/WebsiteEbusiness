<?php include('Login.php'); ?>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../js/simpleCart.js"></script>
    <script src="../js/simplecartjs-config.js"></script>
    <!-- Title  -->
    <title>The Suited Switch | Product Details</title>
    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
  </head>
  <body>
   <?php include('menu'.php) ?>
      <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
      <div class="breadcumb_area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <ol class="breadcrumb d-flex align-items-center">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="pcb.php">PCB</a></li>
                <li class="breadcrumb-item active">80% PCB</li>
              </ol>
              <!-- btn --> <a href="pcb.php" class="backToHome d-block"> Back
                to Category</a> </div>
          </div>
        </div>
      </div>
      <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->
      <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
      <section class="single_product_details_area section_padding_0_100">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="single_product_thumb">
                <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li class="active" data-target="#product_details_slider" data-slide-to="0"

                      style="background-image: url(img/pcb-img/80pcb.png);"> <br>
                    </li>
                    <li data-target="#product_details_slider" data-slide-to="1"

                      style="background-image: url(img/pcb-img/80pcb.png);"> <br>
                    </li>
                    <li data-target="#product_details_slider" data-slide-to="2"

                      style="background-image: url(img/pcb-img/80pcb.png);"> <br>
                    </li>
                    <li data-target="#product_details_slider" data-slide-to="3"

                      style="background-image: url(img/pcb-img/80pcb.png);"> <br>
                    </li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active"> <a class="gallery_img" href="img/pcb-img/80pcb.png">
                        <img class="d-block w-100" src="img/pcb-img/80pcb.png" alt="First slide">
                      </a> </div>
                    <div class="carousel-item"> <a class="gallery_img" href="img/pcb-img/80pcb.png">
                        <img class="d-block w-100" src="img/pcb-img/80pcb.png" alt="Second slide">
                      </a> </div>
                    <div class="carousel-item"> <a class="gallery_img" href="img/pcb-img/80pcb.png">
                        <img class="d-block w-100" src="img/pcb-img/80pcb.png" alt="Third slide">
                      </a> </div>
                    <div class="carousel-item"> <a class="gallery_img" href="img/pcb-img/80pcb.png">
                        <img class="d-block w-100" src="img/pcb-img/80pcb.png" alt="Fourth slide">
                      </a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="single_product_desc">
                <h4 class="title"><a href="#">80% PCB</a></h4>
                <h4 class="price">$69.99</h4>
                <p class="available">Available: <span class="text-muted">In
                    Stock</span></p>
                <div class="single_product_ratings mb-15"> <i class="fa fa-star"

                    aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"

                    aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <!-- Add to Cart Form -->
                <form class="cart clearfix mb-50 d-flex" method="post">
                  <div class="quantity"> <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) effect.value--;return false;"><i

                        class="fa fa-minus" aria-hidden="true"></i></span> <input

                      class="qty-text" id="qty" step="1" min="1" max="12" name="quantity"

                      value="1" type="number"> <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i

                        class="fa fa-plus" aria-hidden="true"></i></span> </div>
                  <button type="submit" name="addtocart" value="5" class="btn cart-submit d-block">Add
                    to cart</button> </form>
                <div id="accordion" role="tablist">
                  <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                      <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne"

                          aria-expanded="true" aria-controls="collapseOne">Information</a>
                      </h6>
                    </div>
                    <div id="collapseOne" class="collapse show" role="tabpanel"

                      aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <p>80% Mechanical Keyboard PCB</p>
                        <p>USB-C Connection</p>
                        <p>80% Layout Compatible</p>
                        <p>Compatible with most 60% Cases</p>
                        <p>QMK Firmware</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->
      <!-- ****** Quick View Modal Area Start ****** -->
      <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview"

        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content"> <button type="button" class="close btn" data-dismiss="modal"

              aria-label="Close"> <span aria-hidden="true">×</span> </button>
            <div class="modal-body">
              <div class="quickview_body">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-lg-5">
                      <div class="quickview_pro_img"> <img src="img/product-img/product-1.jpg"

                          alt=""> </div>
                    </div>
                    <div class="col-12 col-lg-7">
                      <div class="quickview_pro_des">
                        <h4 class="title">Boutique Silk Dress</h4>
                        <div class="top_seller_product_rating mb-15"> <i class="fa fa-star"

                            aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"

                            aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h5 class="price">$120.99 <span>$130</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Mollitia expedita quibusdam aspernatur, sapiente
                          consectetur accusantium perspiciatis praesentium
                          eligendi, in fugiat?</p>
                        <a href="#">View Full Product Details</a> </div>
                      <!-- Add to Cart Form -->
                      <form class="cart" method="post">
                        <div class="quantity"> <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) effect.value--;return false;"><i

                              class="fa fa-minus" aria-hidden="true"></i></span>
                          <input class="qty-text" id="qty2" step="1" min="1" max="12"

                            name="quantity" value="1" type="number"> <span class="qty-plus"

                            onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i

                              class="fa fa-plus" aria-hidden="true"></i></span>
                        </div>
                        <button type="submit" name="addtocart" value="5" class="cart-submit">Add
                          to cart</button>
                        <!-- Wishlist -->
                        <div class="modal_pro_wishlist"> <a href="wishlist.html"

                            target="_blank"><i class="ti-heart"></i></a> </div>
                        <!-- Compare -->
                        <div class="modal_pro_compare"> <a href="compare.html"

                            target="_blank"><i class="ti-stats-up"></i></a> </div>
                      </form>
                      <div class="share_wf mt-30">
                        <p>Share With Friend</p>
                        <div class="_icon"> <a href="#"><i class="fa fa-facebook"

                              aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter"

                              aria-hidden="true"></i></a> <a href="#"><i class="fa fa-pinterest"

                              aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus"

                              aria-hidden="true"></i></a> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ****** Quick View Modal Area End ****** -->
      <section class="you_may_like_area clearfix">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section_heading text-center">
                <h2>related Products</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="you_make_like_slider owl-carousel">
                <!--Will need to change this once more products are added-->
                <!-- Single gallery Item -->
                <div class="single_gallery_item">
                  <!-- Product Image -->
                  <div class="product-img"> <img src="img/product-img/cases/8/black-aluminum.jpg"

                      alt="">
                    <div class="product-quicview"> <a href="#" data-toggle="modal"

                        data-target="#quickview"><i class="ti-plus"></i></a> </div>
                  </div>
                  <!-- Product Description -->
                  <div class="product-description">
                    <h4 class="product-price">$129.99</h4>
                    <p>80% Black Aluminum</p>
                    <!-- Add to Cart --> <a href="#" class="add-to-cart-btn">ADD
                      TO CART</a> </div>
                </div>
                <!-- Single gallery Item -->
                <div class="single_gallery_item">
                  <!-- Product Image -->
                  <div class="product-img"> <img src="img/product-img/cases/80/silver-alumium.jpg"

                      alt="">
                    <div class="product-quicview"> <a href="#" data-toggle="modal"

                        data-target="#quickview"><i class="ti-plus"></i></a> </div>
                  </div>
                  <!-- Product Description -->
                  <div class="product-description">
                    <h4 class="product-price">$129.99</h4>
                    <p>80% Silver Aluminum</p>
                    <!-- Add to Cart --> <a href="#" class="add-to-cart-btn">ADD
                      TO CART</a> </div>
                </div>
                <!-- Single gallery Item -->
                <div class="single_gallery_item">
                  <!-- Product Image -->
                  <div class="product-img"> <img src="img/product-img/cases/80/blue-aluminum.jpg"

                      alt="">
                    <div class="product-quicview"> <a href="#" data-toggle="modal"

                        data-target="#quickview"><i class="ti-plus"></i></a> </div>
                  </div>
                  <!-- Product Description -->
                  <div class="product-description">
                    <h4 class="product-price">$129.99</h4>
                    <p>80% Blue Aluminum</p>
                    <!-- Add to Cart --> <a href="#" class="add-to-cart-btn">ADD
                      TO CART</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
