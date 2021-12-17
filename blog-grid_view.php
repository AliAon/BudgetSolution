       <!-- Main Header Area End Here Two -->
       <?php include('includes/other_header.php')?>
        <!-- Main Header Area End Here Two -->
   

        <!-- Begin Kenne's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Grid View</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Left Sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->

        <!-- Begin Kenne's Blog Grid View Area -->
        <div class="grid-view_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">
                        <div class="kenne-blog-sidebar-wrapper">
                            <div class="kenne-blog-sidebar">
                                <h4 class="kenne-blog-sidebar-title">Search</h4>
                                <div class="search-form_area">
                                    <form class="search-form" action="javascript:void(0)">
                                        <input type="text" class="search-field" placeholder="search here">
                                        <button type="submit" class="search-btn"><i class="ion-ios-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="kenne-blog-sidebar">
                                <h4 class="kenne-blog-sidebar-title">Archives</h4>
                                <ul class="kenne-blog-archive">
                                    <li><a href="javascript:void(0)">October 2019</a></li>
                                </ul>
                            </div>
                            <div class="kenne-blog-sidebar">
                                <h4 class="kenne-blog-sidebar-title">Recent Posts</h4>
                                <div class="recent-post">
                                    <div class="recent-post_thumb">
                                        <a href="blog-details.php">
                                            <img class="img-full" src="assets/images/blog/1.jpg" alt="Kenne's Blog Image">
                                        </a>
                                    </div>
                                    <div class="recent-post_desc">
                                        <span><a href="blog-details.php">Ut eum laborum</a></span>
                                        <span class="post-date">October 25,2019</span>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="recent-post_thumb">
                                        <a href="blog-details.php">
                                            <img class="img-full" src="assets/images/blog/2.jpg" alt="Kenne's Blog Image">
                                        </a>
                                    </div>
                                    <div class="recent-post_desc">
                                        <span><a href="#">Soluta ad tempore</a></span>
                                        <span class="post-date">October 24,2019</span>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="recent-post_thumb">
                                        <a href="blog-details.php">
                                            <img class="img-full" src="assets/images/blog/3.jpg" alt="Kenne's Blog Image">
                                        </a>
                                    </div>
                                    <div class="recent-post_desc">
                                        <span><a href="blog-details.php">Possimus reiciendis</a></span>
                                        <span class="post-date">October 24,2019</span>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="recent-post_thumb">
                                        <a href="blog-details.php">
                                            <img class="img-full" src="assets/images/blog/4.jpg" alt="Kenne's Blog Image">
                                        </a>
                                    </div>
                                    <div class="recent-post_desc">
                                        <span><a href="blog-details.php">Tortor Posuere</a></span>
                                        <span class="post-date">October 24,2019</span>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="recent-post_thumb">
                                        <a href="blog-details.php">
                                            <img class="img-full" src="assets/images/blog/5.jpg" alt="Kenne's Blog Image">
                                        </a>
                                    </div>
                                    <div class="recent-post_desc">
                                        <span><a href="blog-details.php">Hello World!</a></span>
                                        <span class="post-date">October 24,2019</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kenne-blog-sidebar">
                                <h4 class="kenne-blog-sidebar-title">Comments</h4>
                                <div class="recent-comment">
                                    <div class="user-img">
                                        <img class="img-full" src="assets/images/blog/admin.jpg" alt="Kenne's Blog Image">
                                    </div>
                                    <div class="user-info">
                                        <span>HasTech say:</span>
                                        <a href="javascipt:void(0)">Nulla auctor mi vel nisl...</a>
                                    </div>
                                </div>
                                <div class="recent-comment">
                                    <div class="user-img">
                                        <img class="img-full" src="assets/images/blog/user.jpg" alt="Kenne's Blog Image">
                                    </div>
                                    <div class="user-info">
                                        <span>Kathy Young say:</span>
                                        <a href="javascipt:void(0)">Mauris Venenatis Orci Quis...</a>
                                    </div>
                                </div>
                                <div class="recent-comment">
                                    <div class="user-img">
                                        <img class="img-full" src="assets/images/blog/admin.jpg" alt="Kenne's Blog Image">
                                    </div>
                                    <div class="user-info">
                                        <span>HasTech say:</span>
                                        <a href="javascipt:void(0)">Quisque Semper Nunc Vitae...</a>
                                    </div>
                                </div>
                                <div class="recent-comment">
                                    <div class="user-img">
                                        <img class="img-full" src="assets/images/blog/user.jpg" alt="Kenne's Blog Image">
                                    </div>
                                    <div class="user-info">
                                        <span>Kathy Young say:</span>
                                        <a href="javascipt:void(0)">Thanks for the information, anyway :)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="kenne-blog-sidebar">
                                <h4 class="kenne-blog-sidebar-title">Categories</h4>
                                <ul class="kenne-tags_list">
                                <?php
                            
                                $categories=new Categories();
                                $result=$categories->get_all();
                                
                                while($row=$result->fetch_object()){
                                    ?>
                                    
                                    <li><a href="javascript:void(0)"><?php echo $row->name?></a></li>

                                    
                                    <?php
                                }
                                    ?>

                                    
                                </ul>
                            </div>
                            <div class="kenne-blog-sidebar">
                                <h4 class="kenne-blog-sidebar-title">Tags</h4>
                                <ul class="kenne-tags_list">
                                    <li><a href="javascript:void(0)">Shirt</a></li>
                                    <li><a href="javascript:void(0)">Hoodie</a></li>
                                    <li><a href="javascript:void(0)">Jacket</a></li>
                                    <li><a href="javascript:void(0)">Scarf</a></li>
                                    <li><a href="javascript:void(0)">Frocks</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <?php require_once('Widgets/blog_grid-2-col.php'); ?>
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="kenne-paginatoin-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="kenne-pagination-box primary-color">
                                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                                <li><a href="javascript:void(0)">2</a></li>
                                                <li><a href="javascript:void(0)">3</a></li>
                                                <li><a href="javascript:void(0)">4</a></li>
                                                <li><a href="javascript:void(0)">5</a></li>
                                                <li><a class="Next" href="javascript:void(0)">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kenne's Blog Grid View Area End Here -->

        <!-- Begin Brand Area -->
        <div class="brand-area ">
            <div class="container">
                <div class="brand-nav border-top ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="kenne-element-carousel brand-slider slider-nav" data-slick-options='{
                                "slidesToShow": 6,
                                "slidesToScroll": 1,
                                "infinite": false,
                                "arrows": false,
                                "dots": false,
                                "spaceBetween": 30
                                }' data-slick-responsive='[
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 4
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":576, "settings": {
                                "slidesToShow": 2
                                }}
                            ]'>

                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/1.png" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/2.png" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/3.png" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/4.png" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/5.png" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/6.png" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/1.png" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/brand/2.png" alt="Brand Images">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End Here -->

        <!-- Begin Kenne's Footer Area -->
        <div class="kenne-footer_area bg-smoke_color">
            <div class="footer-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="newsletter-area">
                                <div class="newsletter-logo">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/footer/logo/1.png" alt="Logo">
                                    </a>
                                </div>
                                <p class="short-desc">Subscribe to our newsleter, Enter your emil address</p>
                                <div class="newsletter-form_wrap">
                                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletters-form validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div id="mc-form" class="mc-form subscribe-form">
                                                <input id="mc-email" class="newsletter-input" type="email" autocomplete="off" placeholder="Enter email address" />
                                                <button class="newsletter-btn" id="mc-submit"><i
                                                class="ion-android-mail"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="row footer-widgets_wrap">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Shopping</h4>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="javascript:void(0)">Product</a></li>
                                            <li><a href="javascript:void(0)">My Cart</a></li>
                                            <li><a href="javascript:void(0)">Wishlist</a></li>
                                            <li><a href="javascript:void(0)">Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Account</h4>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="javascript:void(0)">Login</a></li>
                                            <li><a href="javascript:void(0)">Register</a></li>
                                            <li><a href="javascript:void(0)">Help</a></li>
                                            <li><a href="javascript:void(0)">Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Categories</h4>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="javascript:void(0)">Men</a></li>
                                            <li><a href="javascript:void(0)">Women</a></li>
                                            <li><a href="javascript:void(0)">Jeans</a></li>
                                            <li><a href="javascript:void(0)">Shoes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom_area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright">
                                <span>Copyright &copy; 2019 <a href="javascript:void(0)">Kenne.</a> All rights reserved.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment">
                                <img src="assets/images/footer/payment/1.png" alt="Kenne's Payment Method">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kenne's Footer Area End Here -->
        <!-- Scroll To Top Start -->
        <a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>
        <!-- Scroll To Top End -->

    </div>

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- Barrating JS -->
    <script src="assets/js/plugins/jquery.barrating.min.js"></script>
    <!-- Counterup JS -->
    <script src="assets/js/plugins/jquery.counterup.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <!-- Jquery-ui JS -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <!-- Waypoints JS -->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!-- jQuery Zoom JS -->
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <!-- Timecircles JS -->
    <script src="assets/js/plugins/timecircles.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>