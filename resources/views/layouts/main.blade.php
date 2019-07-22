<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Cheap Academic Editing &amp; Proofreading Services | Business Document Editors</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon"/>

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700%7CPlayfair+Display:400,400i"
          rel="stylesheet">

    <!--=== All Plugins CSS ===-->
<link href="{{asset('/css/plugins.css')}}" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="{{asset('/css/vendor.css')}}" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{asset('/css/style.min.css')}}" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="{{asset('/js/modernizr-2.8.3.min.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
@yield('assets')
</head>

<body class="preloader-active">

@include('partials.header')

@yield('content')


<!--== Start Off Canvas Area Wrapper ==-->
<aside class="off-canvas-area-wrapper">
    <!-- Off Canvas Overlay -->
    <div class="off-canvas-overlay"></div>

    <!-- Start Off Canvas Content Area -->
    <div class="off-canvas-content-wrap">
        <div class="off-canvas-content">
            <!-- Start Search Box Wrap -->
            <div class="search-box-wrap off-canvas-item">
                <form action="#" method="post">
                    <input type="search" placeholder="Search.."/>
                    <button class="btn-search"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <!-- Start About Content Wrap -->
            <div class="about-content off-canvas-item">
                <h2>Who We Are</h2>
                <p>Organic seitan post-ironic, four loko bicycle rights art party tousled. Mlkshk tote bag
                    stumptown.</p>
            </div>

            <!-- Start Useful Links Content -->
            <div class="useful-link-wrap off-canvas-item">
                <h2>Useful Links</h2>

                <ul class="useful-link-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>

            <!-- Start Social Links Content -->
            <div class="social-links-wrap off-canvas-item">
                <h2>Connect</h2>

                <div class="social-links">
                    <a href="#" class="trio-tooltip" data-tippy-content="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="trio-tooltip" data-tippy-content="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="trio-tooltip" data-tippy-content="Pinterest"><i class="fa fa-pinterest"></i></a>
                    <a href="#" class="trio-tooltip" data-tippy-content="Instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Off Canvas Close Icon -->
        <button class="btn-close trio-tooltip" data-tippy-content="Close" data-tippy-placement="left"><i
                class="fa fa-close"></i></button>
    </div>
    <!-- End Off Canvas Content Area -->
</aside>
<!--== End Off Canvas Area Wrapper ==-->

<!--== Start Off Canvas Area Wrapper ==-->
<aside class="off-canvas-responsive-menu">
    <!-- Off Canvas Overlay -->
    <div class="off-canvas-overlay"></div>

    <!-- Start Off Canvas Content Area -->
    <div class="off-canvas-content-wrap">
        <div class="off-canvas-content">

        </div>
        <!-- Off Canvas Close Icon -->
        <button class="btn-close trio-tooltip" data-tippy-content="Close" data-tippy-placement="right"><i
                class="fa fa-close"></i></button>
    </div>
    <!-- End Off Canvas Content Area -->
</aside>
<!--== End Off Canvas Area Wrapper ==-->

<!--== Start Off Canvas Area Wrapper ==-->
<aside class="off-canvas-search-box">
    <!-- Off Canvas Overlay -->
    <div class="off-canvas-overlay"></div>

    <!--== Start Search Box Area ==-->
    <div class="search-box-wrapper text-center">
        <div class="search-box-content">
            <form action="#" method="post">
                <input type="search" placeholder="Search"/>
                <button class="btn-search"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!--== End Search Box Area ==-->
</aside>
<!--== End Off Canvas Area Wrapper ==-->

<!--=== Start Quick View Content Wrapper ==-->
<div class="modal fade" id="quick-view">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="quick-view-content-wrap">
                    <div class="row">
                        <!-- Start Product Thumbnail Area -->
                        <div class="col-md-6">
                            <div class="product-thumb-area">
                                <div class="ht-slick-slider dots-style-three prod-thumb-inner"
                                     data-slick='{"slidesToShow": 1, "infinite": false, "dots": true}'>
                                    <figure class="port-details-thumb-item">
                                        <img src="{{asset('/img/home-landing-page/portfolio/05.jpg')}}" alt="product"/>
                                    </figure>
                                    <figure class="port-details-thumb-item">
                                        <img src="{{asset('/img/home-landing-page/portfolio/02.jpg')}}" alt="product"/>
                                    </figure>
                                    <figure class="port-details-thumb-item">
                                        <img src="{{asset('/img/home-landing-page/portfolio/03.jpg')}}" alt="product"/>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Thumbnail Area -->

                        <!-- Start Product Info Area -->
                        <div class="col-md-6">
                            <div class="product-details-info-content-wrap">
                                <div class="prod-details-info-content">
                                    <h2>Lamp Shade</h2>
                                    <div class="price-group">
                                        <span class="price">$9.99</span>
                                    </div>

                                    <p>Created from either wood or recycled materials, it can be moulded into just about
                                        any
                                        shape and hardens to provide a hard shell. Additives can make it water
                                        resistant.</p>

                                    <div class="product-action mt-38 mb-20">
                                        <div class="action-top mb-40">
                                            <div class="pro-qty mr-10">
                                                <input type="text" id="quantity" title="Quantity" value="1"/>
                                            </div>
                                            <button class="btn btn-brand">Add to Cart</button>
                                        </div>

                                        <button class="btn-wishlist trio-tooltip" data-tippy-content="Add to Wishlist">
                                            <i
                                                    class="fa fa-heart-o"></i>Add to Wishlist
                                        </button>
                                    </div>

                                    <div class="port-details-con-inner">
                                        <div class="single-post-details__footer m-0">
                                            <div class="single-post-details__footer__item">
                                                <div class="footer-item-left">
                                                    <h5 class="item-head"><i class="fa fa-tags"></i> Categories:</h5>
                                                </div>
                                                <div class="footer-item-right">
                                                    <ul class="cate-list nav">
                                                        <li><a href="#">Design</a></li>
                                                        <li><a href="#">Interior</a></li>
                                                        <li><a href="#">Multi</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="single-post-details__footer__item">
                                                <div class="footer-item-left">
                                                    <h5 class="item-head"><i class="fa fa-share-alt"></i> Share:</h5>
                                                </div>

                                                <div class="footer-item-right">
                                                    <div class="share-item">
                                                        <a href="#" class="trio-tooltip"
                                                           data-tippy-content="Share On Facebook"><i
                                                                class="fa fa-facebook"></i></a>
                                                        <a href="#" class="trio-tooltip"
                                                           data-tippy-content="Share On Twitter"><i
                                                                class="fa fa-twitter"></i></a>
                                                        <a href="#" class="trio-tooltip"
                                                           data-tippy-content="Share On Google Plus"><i
                                                                class="fa fa-google-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Info Area -->
                    </div>
                </div>
            </div>

            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
    </div>
</div>
<!--=== End Quick View Content Wrapper ==-->

<!--=======================Javascript============================-->
<!--=== All Vendor Js ===-->
<script src="{{asset('/js/vendor.js')}}"></script>
<!--=== All Plugins Js ===-->
<script src="{{asset('/js/plugins.js')}}"></script>
<!--=== Active Js ===-->
<script src="{{asset('/js/active.min.js')}}"></script>

<!--=== Revolution Slider Js ===-->
<script src="{{asset('/js/revslider/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('/js/revslider/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('/js/revslider/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('/js/revslider/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('/js/revslider/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('/js/revslider/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('/js/revslider/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('/js/revslider/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('/js/revslider/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('/js/revslider/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('/js/revslider/extensions/revolution.extension.video.min.js')}}"></script>


<script src="{{asset('/js/revslider/revslider-active.js')}}"></script>
</body>
@yield('scripts')
</html>



