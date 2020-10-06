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
    <title>The Suited Switch | Home</title>
    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
  </head>
  <body>
      <!-- ****** Header Area Start ****** -->
      <?php include('menu.php'); ?>
      <!-- ****** Welcome Slides Area Start ****** -->
      <section class="welcome_area">
        <div class="welcome_slides owl-carousel">
          <!-- Single Slide Start -->
          <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-1.jpg);">
            <div class="container h-100">
              <div class="row h-100 align-items-center">
                <div class="col-12">
                  <div class="welcome_slide_text">
                    <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">*
                      Free shipping on orders over $100</h6>
                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Custom
                      Keyboard Service</h2>
                    <a href="custom.php" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s"

                      data-delay="1s" data-duration="500ms">Shop Now</a> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Slide Start -->
          <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-4.jpg);">
            <div class="container h-100">
              <div class="row h-100 align-items-center">
                <div class="col-12">
                  <div class="welcome_slide_text">
                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">*
                      Free shipping on orders over $100</h6>
                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">High
                      Quality Cases</h2>
                    <a href="cases-shop.php" class="btn karl-btn" data-animation="fadeInLeftBig"

                      data-delay="1s" data-duration="500ms">Check Collection</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Slide Start -->
          <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-2.jpg);">
            <div class="container h-100">
              <div class="row h-100 align-items-center">
                <div class="col-12">
                  <div class="welcome_slide_text">
                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">*
                      Free shipping on orders over $100</h6>
                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">MX
                      Cherry Keycaps</h2>
                    <a href="cherry_keycaps.php" class="btn karl-btn" data-animation="fadeInRightBig"

                      data-delay="1s" data-duration="500ms">Check Collection</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ****** Welcome Slides Area End ****** -->
      <!-- ****** Top Catagory Area Start ****** -->
      <section class="top_catagory_area d-md-flex clearfix">
        <!-- Single Catagory -->
        <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/bg-img/bg-5.jpg);">
          <div class="catagory-content">
            <h6>On Cases</h6>
            <h2>Sale 30%</h2>
            <a href="case-shop.ph" class="btn karl-btn">SHOP NOW</a> </div>
        </div>
        <!-- Single Catagory -->
        <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
          <div class="catagory-content">
            <h6>High quality</h6>
            <h2>Premium<br>
              PCBs</h2>
            <a href="pcb.php" class="btn karl-btn">SHOP NOW</a> </div>
        </div>
      </section>
      <!-- ****** Top Catagory Area End ****** -->
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
                          <input class="qty-text" id="qty" step="1" min="1" max="12"

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
      <!-- ****** Popular Brands Area Start ****** -->
      <section class="karl-testimonials-area section_padding_100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section_heading text-center">
                <h2>Testimonials</h2>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 col-md-8">
              <div class="karl-testimonials-slides owl-carousel">
                <!-- Single Testimonial Area -->
                <div class="single-testimonial-area text-center"> <span class="quote">"</span>
                  <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis
                    interdum mollis. Aliquam finibus nulla quam, a iaculis justo
                    finibus non. Suspendisse in fermentum nunc.Nunc pulvinar
                    molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                  <div class="testimonial-info d-flex align-items-center justify-content-center">
                    <div class="tes-thumbnail"> <img src="img/bg-img/tes-1.jpg"

                        alt=""> </div>
                    <div class="testi-data">
                      <p>Michelle Williams</p>
                      <span>Client, Los Angeles</span> </div>
                  </div>
                </div>
                <!-- Single Testimonial Area -->
                <div class="single-testimonial-area text-center"> <span class="quote">"</span>
                  <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis
                    interdum mollis. Aliquam finibus nulla quam, a iaculis justo
                    finibus non. Suspendisse in fermentum nunc.Nunc pulvinar
                    molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                  <div class="testimonial-info d-flex align-items-center justify-content-center">
                    <div class="tes-thumbnail"> <img src="img/bg-img/tes-1.jpg"

                        alt=""> </div>
                    <div class="testi-data">
                      <p>Michelle Williams</p>
                      <span>Client, Los Angeles</span> </div>
                  </div>
                </div>
                <!-- Single Testimonial Area -->
                <div class="single-testimonial-area text-center"> <span class="quote">"</span>
                  <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis
                    interdum mollis. Aliquam finibus nulla quam, a iaculis justo
                    finibus non. Suspendisse in fermentum nunc.Nunc pulvinar
                    molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                  <div class="testimonial-info d-flex align-items-center justify-content-center">
                    <div class="tes-thumbnail"> <img src="img/bg-img/tes-1.jpg"

                        alt=""> </div>
                    <div class="testi-data">
                      <p>Michelle Williams</p>
                      <span>Client, Los Angeles</span> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ****** Popular Brands Area End ****** -->
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
                  <form action="#" method="post"> 
                    <input name="email" class="mail" placeholder="Your email here" type="email">
                    <button type="submit" name="email-submit" class="submit">Subscribe</button> 
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
