<?php include('Login.php'); ?>
<php* lang="en">
  <head>
    <meta http-equiv="content-type" content="text/php*; charset=UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title  -->
    <title>The Suited Switch | 100% Cases</title>
    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
  </head>
  <body>
  <?php include('menu.php') ?>
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
                      <div class="quickview_pro_img"> <img src="img/product-img/cases/white-alumium.jpg"

                          alt=""> </div>
                    </div>
                    <div class="col-12 col-lg-7">
                      <div class="quickview_pro_des">
                        <h4 class="title">60% Aluminum Case</h4>
                        <div class="top_seller_product_rating mb-15"> <i class="fa fa-star"

                            aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"

                            aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h5 class="price">$89.99</h5>
                        <p>Available in White, Black, Red &amp; Blue</p>
                        <a href="alumnium_case_page.php">View Full Product
                          Details</a> </div>
                      <!-- View Details Form -->
                      <form class="cart" method="post">
                        <div class="quantity"> <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) effect.value--;return false;"><i

                              class="fa fa-minus" aria-hidden="true"></i></span>
                          <input class="qty-text" id="qty" step="1" min="1" max="12"

                            name="quantity" value="1" type="number"> <span class="qty-plus"

                            onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i

                              class="fa fa-plus" aria-hidden="true"></i></span>
                        </div>
                        <button type="submit" name="addtocart" value="5" class="cart-submit">View
                          Details</button>
                        <!-- Wishlist -->
                        <div class="modal_pro_wishlist"> <a href="wishlist.php"

                            target="_blank"><i class="ti-heart"></i></a> </div>
                        <!-- Compare -->
                        <div class="modal_pro_compare"> <a href="compare.php"

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
      <section class="shop_grid_area section_padding_100">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
              <div class="shop_sidebar_area">
                <div class="widget catagory mb-50">
                  <!--  Side Nav  -->
                  <div class="nav-side-menu">
                    <h6 class="mb-0">Catagories</h6>
                    <div class="menu-list">
                      <ul id="menu-content2" class="menu-content collapse out">
                        <!-- Single Item -->
                        <li data-toggle="collapse" data-target="#cases"> <a href="cases-shop.php">Cases</a>
                          <ul class="sub-menu collapse show" id="cases">
                            <li><a href="100cases.php">100% Cases</a></li>
                            <li><a href="80cases.php">80% Cases</a></li>
                            <li><a href="60cases.php">60% Cases</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="widget price mb-50">
                  <h6 class="widget-title mb-30">Filter by Price</h6>
                  <div class="widget-desc">
                    <div class="slider-range">
                      <div data-min="0" data-max="3000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"

                        data-value-min="0" data-value-max="1350" data-label-result="Price:">
                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                        <span class="ui-slider-handle ui-state-default ui-corner-all"

                          tabindex="0"></span> <span class="ui-slider-handle ui-state-default ui-corner-all"

                          tabindex="0"></span> </div>
                      <div class="range-price">Price: 0 - 1350</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-8 col-lg-9">
              <div class="shop_grid_product_area">
                <div class="row">
                  <!-- Single gallery Item -->
                  <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"

                    data-wow-delay="0.2s">
                    <!-- Product Image -->
                    <div class="product-img"> <img src="img/product-img/cases/white-alumium.jpg"

                        alt="">
                      <div class="product-quicview"> <a href="#" data-toggle="modal"

                          data-target="#quickview"><i class="ti-plus"></i></a> </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-description">
                      <h4 class="product-price">$89.90</h4>
                      <p>60% Aluminum Case</p>
                      <!-- View Details --> <a href="alumnium_case_page.php" class="add-to-cart-btn">View
                        Details</a> </div>
                  </div>
                  <!-- Single gallery Item -->
                  <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"

                    data-wow-delay="0.3s">
                    <!-- Product Image -->
                    <div class="product-img"> <img src="img/product-img/cases/60/clear-plastic.jpg"

                        alt="">
                      <div class="product-quicview"> <a href="#" data-toggle="modal"

                          data-target="#quickview"><i class="ti-plus"></i></a> </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-description">
                      <h4 class="product-price">$19.99</h4>
                      <p>60% Plastic Cases</p>
                      <!-- View Details --> <a href="60plastic_case.php" class="add-to-cart-btn">View
                        Details</a> </div>
                  </div>
                  <!-- Single gallery Item -->
                  <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"

                    data-wow-delay="0.4s">
                    <!-- Product Image -->
                    <div class="product-img"> <img src="img/product-img/cases/80/gold-aluminum.jpg"

                        alt="">
                      <div class="product-quicview"> <a href="#" data-toggle="modal"

                          data-target="#quickview"><i class="ti-plus"></i></a> </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-description">
                      <h4 class="product-price">$129.99</h4>
                      <p>80% Aluminum Case</p>
                      <!-- View Details --> <a href="80aluminum_case.php" class="add-to-cart-btn">View
                        Details</a> </div>
                  </div>
                  <!-- Single gallery Item -->
                  <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"

                    data-wow-delay="0.5s">
                    <!-- Product Image -->
                    <div class="product-img"> <img src="img/product-img/cases/60/rosewood.jpg"

                        alt="">
                      <div class="product-quicview"> <a href="#" data-toggle="modal"

                          data-target="#quickview"><i class="ti-plus"></i></a> </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-description">
                      <h4 class="product-price">$49.99</h4>
                      <p>60% Wooden Case</p>
                      <!-- View Details --> <a href="60wooden.php" class="add-to-cart-btn">View
                        Details</a> </div>
                  </div>
                  <!-- Single gallery Item -->
                  <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"

                    data-wow-delay="0.6s">
                    <!-- Product Image -->
                    <div class="product-img"> <img src="img/product-img/cases/100/silver-aluminum.jpg"

                        alt="">
                      <div class="product-quicview"> <a href="#" data-toggle="modal"

                          data-target="#quickview"><i class="ti-plus"></i></a> </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-description">
                      <h4 class="product-price">$139.99</h4>
                      <p>100% Aluminum Case</p>
                      <!-- View Details --> <a href="100aluminum_case.php" class="add-to-cart-btn">View
                        Details</a> </div>
                  </div>
                  <!-- Single gallery Item -->
                  <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"

                    data-wow-delay="0.6s">
                    <!-- Product Image -->
                    <div class="product-img"> <img src="img/product-img/cases/60/white-acryllic.jpg"

                        alt="">
                      <div class="product-quicview"> <a href="#" data-toggle="modal"

                          data-target="#quickview"><i class="ti-plus"></i></a> </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-description">
                      <h4 class="product-price">$39.00</h4>
                      <p>60% Frosted Acrylic Case</p>
                      <!-- View Details --> <a href="60acrylic_case.php" class="add-to-cart-btn">View
                        Details</a> </div>
                  </div>
                </div>
              </div>
              <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-sm">
                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                  </ul>
                </nav>
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
</php*>
