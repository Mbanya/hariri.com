@extends('layouts.main')
@section('assets')
<?php
$title = "Contact";
?>
@endsection
@section('content')
<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <!-- Start Contact Hero Map Area -->
    <div class="contact-map-hero-area hv-100">
        <div id="map_content" class="h-100" data-lat="23.763491" data-lng="90.431167" data-zoom="6"></div>
    </div>
    <!-- Start Contact Hero Map Area -->

    <!--== Start Contact Content Area ==-->
    <section class="contact-content-area bg-offwhite pt-120 pt-md-80 pt-sm-60 pb-120 pb-md-80 pb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <!-- Start Contact Form Area -->
                    <div class="contact-form-area-wrapper">
                        <div class="area-title mb-52 mb-sm-32">
                            <h2 class="mb-20">Contact Form</h2>
                            <p class="m-0">Let's write down your email in the above box to receive the useful
                                information.</p>
                        </div>

                        <div class="contact-form-wrapper">
                            <form action="http://hasthemes.com/file/mail.php" method="post" id="contact-form">
                                <div class="form-input-item white-layout">
                                    <input type="text" name="con_name" placeholder="Your Name (Required)" required />
                                </div>

                                <div class="form-input-item white-layout">
                                    <input type="email" name="con_email" placeholder="Your Email (Required)" required />
                                </div>

                                <div class="form-input-item white-layout">
                                    <textarea name="con_message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                </div>

                                <div class="form-input-item white-layout">
                                    <button type="submit" class="btn btn-black">Send Message</button>
                                </div>

                                <!-- Show Message Notification -->
                                <div class="form-message"></div>
                            </form>
                        </div>
                    </div>
                    <!-- End Contact Form Area -->
                </div>
            </div>
        </div>
    </section>
    <!--== End Contact Content Area ==-->
</div>
<!--== End Page Content Wrapper ==-->

<!--== Start Footer Area Wrapper ==-->
<footer class="footer-wrapper">
    <!-- Start Footer Widget Area -->
    <div class="footer-widget-wrapper pt-120 pt-md-80 pt-sm-60 pb-116 pb-md-78 pb-sm-60">
        <div class="container">
            <div class="row mtm-44">
                <!-- Start Single Widget Wrap -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget-wrap">
                        <h3 class="widget-title">Booking</h3>
                        <div class="widget-body">
                            <div class="about-text">
                                <address>
                                    Max Weatherall. Productions <br>
                                    562 Sycamore Circle <br>
                                    Atlanta, GA 30342 <br>
                                    T: +920364426
                                </address>
                                <a href="mailto:your@example.com">Email: your@example.com</a><br>
                                <a href="https://www.hastech.company/" target="_blank">www.hastech.company</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget Wrap -->

                <!-- Start Single Widget Wrap -->
                <div class="col-lg-2 col-md-6">
                    <div class="single-widget-wrap">
                        <h3 class="widget-title">Links</h3>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget Wrap -->

                <!-- Start Single Widget Wrap -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-widget-wrap">
                        <h3 class="widget-title">Latest Form Blog</h3>
                        <div class="widget-body">
                            <div class="latest-blog-widget">
                                <div class="single-blog-item">
                                    <h3><a href="blog-details.html">Work Passionately</a></h3>
                                    <span class="post-date"><i class="fa fa-clock-o"></i> March 9, 2019</span>
                                </div>
                                <div class="single-blog-item">
                                    <h3><a href="blog-details.html">Creating electronic beats in the</a></h3>
                                    <span class="post-date"><i class="fa fa-clock-o"></i> March 8, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget Wrap -->

                <!-- Start Single Widget Wrap -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget-wrap">
                        <h3 class="widget-title">Get In Touch</h3>
                        <div class="widget-body">
                            <div class="newsletter-widget-wrap">
                                <p>Enter your email and receive the latest news from us.</p>
                                <div class="newsletter-form-wrap">
                                    <form action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a" method="post" id="mc-form" class="mc-form">
                                        <input type="email" id="mc-email" placeholder="Enter Email Address" required />
                                        <button class="btn-newsletter"><i class="fa fa-envelope"></i></button>
                                    </form>

                                    <!-- MailChimp Alerts Start -->
                                    <div class="mailchimp-alerts text-centre">
                                        <div class="mailchimp-submitting"></div>
                                        <div class="mailchimp-success"></div>
                                        <div class="mailchimp-error"></div>
                                    </div>
                                    <!-- MailChimp Alerts End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget Wrap -->
            </div>
        </div>
    </div>
    <!-- End Footer Widget Area -->

    <!-- Start Footer Bottom Area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-7 order-last">
                    <div class="footer-copyright-area mt-xs-10 text-center text-sm-left">
                        <p>Copyright © 2019 TRIO - All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5 order-first order-sm-last">
                    <div class="footer-social-icons nav justify-content-center justify-content-md-end">
                        <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom Area -->
</footer>
<!--== End Footer Area Wrapper ==-->

@endsection

@section('scripts')

@endsection
