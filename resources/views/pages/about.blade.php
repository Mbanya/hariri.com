@extends('layouts.main')
@section('assets')
<?php
$title = "About";
?>
@endsection
@section('content')
<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <!-- Start About Us Container Wrapper -->
    <section class="about-us-content-wrapper">
        <div class="container-fluid p-0">
            <div class="row align-items-center no-gutters">
                <!-- Start About Thumbnail Area -->
                <div class="col-md-6">
                    <div class="about-thumbnail-area">
                        <img src="{{asset('/img/about/about_01.jpg')}}" alt="">
                    </div>
                </div>
                <!-- End About Thumbnail Area -->

                <!-- Start About Content Area -->
                <div class="col-md-6 my-auto text-center">
                    <div class="about-us-content">
                        <h2>About Us</h2>
                        <p class="paragraph-width">We offer our clients with on-demand draft editing and proofreading
                            service in the English language to meet all writing needs. Whether your goals are
                            scholastic, professional, or artistic, you can rest assured that <i>hariri.com</i> will
                            be with you every step of the way, today, tomorrow, and beyond.</p>
                    </div>
                </div>
                <!-- End About Content Area -->
            </div>
        </div>
    </section>
    <!-- End About Us Container Wrapper -->

    <!-- Start Our Story Wrapper -->
    <section class="story-content-wrapper">
        <div class="container-fluid p-0">
            <div class="row align-items-center no-gutters">

                <!-- Start Story Content Area -->
                <div class="col-md-6 order-1 my-auto text-center">
                    <div class="about-us-content">
                        <h2>The Story</h2>
                        <p class="paragraph-width">It is a few days before presenting your final draft for review. You
                            have researched; scribbled, underlined, highlighted and even lost sleep to ensure your piece
                            is of an A-class status. For anyone to achieve such a goal there is importance for one to
                            follow the guidelines of a writing process. The last stage is revising, editing and
                            proofreading. Here is where <i>hariri.com</i> comes in. Equipped with highly professional
                            draft editing experts, we aim to provide our clients with excellent draft editing services
                            to ensure they reach their highest writing potentials and reap the fruits of their labor.
                        </p>

                    </div>
                </div>
                <!-- End Story Content Area -->

                <!-- Start Story Thumbnail Area -->
                <div class="col-md-6 order-0 order-md-1">
                    <div class="about-thumbnail-area">
                        <img src="{{asset('/img/about/about_02.jpg')}}" alt="">
                    </div>
                </div>
                <!-- End Story Thumbnail Area -->
            </div>
        </div>
    </section>
    <!-- End Our Story Wrapper -->

    <!--== Start Discover Area Wrapper ==-->
    <section class="counters-content-wrapper pt-30 pb-30 hv-100 bg-egg-white">
        <div class="counter-element-1 pt-120 pt-md-8- -t-sm-60 pb-12- pb-md-8- pb-sm-60">
            <div class="container">
                <div class="row mtm-30">
                    <!-- Start Single Funfact Item -->
                    <div class="col-sm-6 col-md-4 text-center">
                        <div class="funfact-item-wrap">
                            <p class="funfact-number"><span class="odometer odometer-auto-theme" data-count="770">
                                    <div class="odometer-inside"><span class="odometer-digit"></span>
                                    </div>
                                </span>+</p>
                            <h4 class="funfact-title">Working Hours</h4>
                            <span class="funfact-icon"><i class="fa fa-hourglass-o"></i></span>
                        </div>
                    </div>
                    <!-- End Single Funfact Item -->

                    <!-- Start Single Funfact Item -->
                    <div class="col-sm-6 col-md-4 text-center">
                        <div class="funfact-item-wrap">
                            <p class="funfact-number"><span class="odometer odometer-auto-theme" data-count="98">
                                    <div class="odometer-inside"><span class="odometer-digit"></span>
                                    </div>
                                </span>%</p>
                            <h4 class="funfact-title">Happy Customers</h4>
                            <span class="funfact-icon"><i class="fa fa-smile-o"></i></span>
                        </div>
                    </div>
                    <!-- End Single Funfact Item -->

                    <!-- Start Single Funfact Item -->
                    <div class="col-sm-6 col-md-4 text-center">
                        <div class="funfact-item-wrap">
                            <p class="funfact-number"><span class="odometer odometer-auto-theme" data-count="299">
                                    <div class="odometer-inside"><span class="odometer-digit"></span>
                                    </div>
                                </span>+</p>
                            <h4 class="funfact-title">Projects Done</h4>
                            <span class="funfact-icon"><i class="fa fa-folder-o"></i></span>
                        </div>
                    </div>
                    <!-- End Single Funfact Item -->
                </div>
            </div>
        </div>

    </section>
    <!--== End Discover Area Wrapper ==-->

    <!--== Start Banner Area Wrapper ==-->
    <div class="banner-area-wrapper">
        <img src="{{asset('/img/about/about_03.jpg')}}" alt="Banner" />
    </div>
    <!--== End Banner Area Wrapper ==-->

    <!--== Start Process Area Wrapper ==-->
    <section class="process-area-wrapper pt-56 pb-40 hv-100 bg-soft-pink">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12 my-auto text-center">
                    <div class="about-us-content p-0">
                        <h2 class="mb-40 mb-md-18 mb-sm-18">The Process</h2>
                        <p class="paragraph-width">We deliver innovative solutions in content writing,
                            proof reading, and editing.</p>
                    </div>

                    <div class="showcase-description-content mt-90 mt-md-42 mt-sm-42">
                        <div class="row mtm-50 text-left">
                            <!-- Single Description Item #1 -->
                            <div class="col-md-4">
                                <div class="single-desc-item-wrap">
                                    <span class="desc-number">1</span>
                                    <h3>Select your Service</h3>
                                    <p>Submit the text you want us to edit, proof read or rewrite & we handle the rest.</p>
                                </div>
                            </div>

                            <!-- Single Description Item #2 -->
                            <div class="col-md-4">
                                <div class="single-desc-item-wrap">
                                    <span class="desc-number">2</span>
                                    <h3>Pay Securely Online</h3>
                                    <p>We use the paypal to ensure your information is fully protected.</p>
                                </div>
                            </div>

                            <!-- Single Description Item #3 -->
                            <div class="col-md-4">
                                <div class="single-desc-item-wrap">
                                    <span class="desc-number">3</span>
                                    <h3>Sit back and relax</h3>
                                    <p>Use your time to get on with more important stuff while we do all the hard work.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Process Area Wrapper ==-->

    <!--=== Start Testimonial Area Wrapper ===-->
    <section class="testimonial-area-wrapper pt-lg-64 pb-lg-38">
        <div class="container-fluid p-0">
            <div class="row align-items-center no-gutters">
                <!-- Start Testimonial Thumbnail Area -->
                <div class="col-md-6 d-lg-none d-xl-block">
                    <div class="about-thumbnail-area">
                        <img src="{{asset('/img/about/about_04.jpg')}}" alt="Banner" />
                    </div>
                </div>
                <!-- End Testimonial Thumbnail Area -->

                <!-- Start Story Content Area -->
                <div class="col-md-6 col-lg-8 col-xl-6 m-auto text-center">
                    <div class="about-us-content pb-sm-20">
                        <h2>Testimonials</h2>
                        <p class="paragraph-width">Thanks for your belief in our website during the long time, we are
                            trying to provide the best products for clients.</p>
                    </div>

                    <!-- Start About Page Testimonial -->
                    <div class="about-page-testimonial pb-60 mt-10 col-xl-8 mx-auto">
                        <div class="ht-slick-slider-wrapper">
                            <div class="ht-slick-slider"
                                data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots": true}'>
                                <!-- Single Testimonial Start -->
                                <div class="single-testimonial-wrap layout--4">
                                    <figure class="author-thumb">
                                        <img src="{{asset('/img/testimonial/testimonial-1.jpg')}}" alt="Testimonial" />
                                    </figure>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur architecto vitae delectus provident quod aperiam.
                                    </p>
                                    <h3 class="client-name">Jane Doe <span class="client-designation">Student</span>
                                    </h3>
                                </div>
                                <!-- Single Testimonial End -->

                                <!-- Single Testimonial Start -->
                                <div class="single-testimonial-wrap layout--4">
                                    <figure class="author-thumb">
                                        <img src="{{asset('/img/testimonial/testimonial-2.jpg')}}" alt="Testimonial" />
                                    </figure>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nemo est adipisci velit tempore reprehenderit repudiandae provident nulla quas laudantium?</p>
                                    <h3 class="client-name">John Doe <span class="client-designation">Postgraduate Student</span>
                                    </h3>
                                </div>
                                <!-- Single Testimonial End -->

                            </div>
                        </div>
                    </div>
                    <!-- End About Page Testimonial -->
                </div>
                <!-- End Story Content Area -->
            </div>
        </div>
    </section>
    <!--=== End Testimonial Area Wrapper ===-->



    <!--== Start Team Area Wrapper ==-->
    {{-- <section class="team-area-wrapper pt-xl-0 pt-56 pb-58 hv-100 bg-dodger-blue">
        <div class="container hv-100">
            <div class="row align-items-center hv-100">
                <div class="col-lg-12 my-auto text-center">
                    <div class="about-us-content p-0">
                        <h2 class="mb-40 mb-md-18 mb-sm-18">The Team</h2>
                        <p>Our team are build by all professional members who always try to get the efficiency work.</p>
                    </div>

                    <!-- Start Team Content -->
                    <div class="about-team-content-wrap mt-90 mt-md-42 mt-sm-42">
                        <div class="row mtm-50">
                            <!-- Start Team Member #01 -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="speaker-member-wrap">
                                    <figure class="speaker-thumbnail">
                                        <img src="{{asset('/img/about/team/tm-01.jpg')}}" alt="Team" />
                                    </figure>
                                    <div class="speaker-info">
                                        <h3>Charlie puth</h3>
                                        <h6 class="designation">Founder</h6>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Team Member #02 -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="speaker-member-wrap">
                                    <figure class="speaker-thumbnail">
                                        <img src="{{asset('/img/about/team/tm-02.jpg')}}" alt="Team" />
                                    </figure>
                                    <div class="speaker-info">
                                        <h3>Lana denity</h3>
                                        <h6 class="designation">Graphic Designer</h6>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Team Member #03 -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="speaker-member-wrap">
                                    <figure class="speaker-thumbnail">
                                        <img src="{{asset('/img/about/team/tm-03.jpg')}}" alt="Team" />
                                    </figure>
                                    <div class="speaker-info">
                                        <h3>Autumn Quins</h3>
                                        <h6 class="designation">Marketer</h6>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Team Member #04 -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="speaker-member-wrap">
                                    <figure class="speaker-thumbnail">
                                        <img src="{{asset('/img/about/team/tm-04.jpg')}}" alt="Team" />
                                    </figure>
                                    <div class="speaker-info">
                                        <h3>Henry Frank</h3>
                                        <h6 class="designation">Salesman</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Content -->
                </div>
            </div>
        </div>
    </section> --}}
    <!--== End Team Area Wrapper ==-->

    <!--== Start Banner Area Wrapper ==-->
    <section class="about-banner-area hv-100 parallaxBg bg-img" data-bg="{{asset('/img/about/about_06.jpg')}}">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-11 m-auto text-center">
                    <div class="about-banner-content">
                        <h2 class="bolder-heading">Choose Us To Feel The Difference.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Banner Area Wrapper ==-->
</div>
<!--== End Page Content Wrapper ==-->

<!-- Start About Page Footer Area -->
<footer class="about-footer-area bg-magic-mint hv-100 pt-56 pb-60">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-12 my-auto text-center">
                <div class="about-us-content p-0">
                    <h2 class="mb-40 mb-md-18 mb-sm-18">Subscription</h2>
                    <p class="paragraph-width">Subscribe in the above box to receive our quarterly newsletter.</p>
                </div>

                <div class="newsletter-form-wrap mt-50 mt-md-40 mt-sm-30 col-lg-6 m-auto layout--transparent">
                    <form
                        action=""
                        method="post" id="mc-form" class="mc-form d-sm-flex">
                        <input type="email" id="mc-email" placeholder="Enter Email Address" required="" name="EMAIL">
                        <button class="btn-newsletter">Subscribe</button>
                    </form>

                    <!-- MailChimp Alerts Start -->
                    <div class="mailchimp-alerts text-centre">
                        <div class="mailchimp-submitting"></div>
                        <div class="mailchimp-success"></div>
                        <div class="mailchimp-error"></div>
                    </div>
                    <!-- MailChimp Alerts End -->
                </div>

                <div class="about-social-icons mt-60 mt-sm-30 mt-md-30">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End About Page Footer Area -->

@endsection

@section('scripts')

@endsection
