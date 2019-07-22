@extends('layouts.main')

@section('assets')
<?php
$title = "";
?>
@endsection

@section('content')
@include('partials.slider')

<section class="marketing-service-area mt-120 mt-md-80 mt-sm-60">
    <!-- Start Section title -->
    <div class="col-lg-6 m-auto text-center">
            <div class="section-title-wrap layout--2">
                <h2>SELECT. PAY . FINISH</h2>
            </div>
        </div>
        <!-- End Section title -->
        <div class="container">
            <div class="row mtm-40">
                <!-- Single Service item #01 -->
                <div class="col-md-4 text-center">
                    <div class="single-service-item">
                        <span class="service-serial-no">01</span>
                        <h3>Select your Service</h3>
                        <p>Submit the text you want us to edit,
                            proof read or rewrite & we handle the rest.</p>
                        <a href="#" class="btn-read-more">+ Our Services</a>
                    </div>
                </div>

                <!-- Single Service item #02 -->
                <div class="col-md-4 text-center">
                    <div class="single-service-item">
                        <span class="service-serial-no">02</span>
                        <h3>Pay Securely Online</h3>
                        <p>We use the paypal to ensure your information is fully protected.</p>
                        <a href="#" class="btn-read-more">+ Read More</a>
                    </div>
                </div>

                <!-- Single Service item #03 -->
                <div class="col-md-4 text-center">
                    <div class="single-service-item">
                        <span class="service-serial-no">03</span>
                        <h3>Sit back and relax</h3>
                        <p>Use your time to get on with more important stuff while we do all the hard work.</p>
                        <a href="#" class="btn-read-more">+ Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--== Start Our About Us Area ==-->
<section class="marketing-about-area mt-114 mt-md-74 mt-sm-54" style="padding:10px 0 40px 0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-1 m-auto">
                    <div class="restaurant-about-content">
                        <h2>More About Our Editing &  Proofreading Service</h2>
                        <p>
                                Our English proofreaders and editors have extensive experience specialising in editing the work of ESL students/speakers and international businesses.
                                We have expertise in a range of subjects, from Science and Engineering to Business, Economics and more.
                                In 2012 alone, we have helped over 500 clients with their English Proofreading and Editing requirements, achieving 94% customer satisfaction.
                                We offer professional proofreading and editing services in both UK English and US English.
                            </p>
                        <a href="#" class="btn btn-bordered">Order Now</a>
                    </div>
                </div>

                <div class="col-lg-7 order-0 order-lg-1">
                    <figure class="marketing-about-thumb mb-md-40 mb-sm-40">
                        <img src="{{asset('img/suad-kamardeen-760160-unsplash.jpg')}}" alt="About">

                        {{-- <figcaption class="about-video-btn">
                            <a href="https://www.youtube.com/watch?v=v9nBysHSzhE" class="btn-play btn-video-popup"><i class="fa fa-play"></i></a>
                        </figcaption> --}}
                    </figure>
                </div>
            </div>
        </div>
    </section>
<!--== End Our About Us Area ==-->

<!--== Start Startup Banner Area ==-->
<section class="startup-banner-wrapper pb-sm-60" style="padding:10px 0 5px 0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <!-- Startup Banner Image Area -->
                <figure class="startup-banner-image">
                    <img src="{{asset('/img/linkedin-sales-navigator-406826-unsplash.jpg')}}" alt="Banner"/>
                </figure>
            </div>

            <div class="col-md-6 my-auto mt-md-40" >
                <!-- Startup Banner Content Area -->
                <div class="startup-banner-content" style="padding-top:40px;">
                    <h2>Excellent Benefits for Your Grade.</h2>
                    <p>
                       What you Get:
                        <ol>
                            <li>Improved and developed english as you see where you are making mistakes</li>
                            <li>Quality feedback sessions that will greatly help you with your ability in written english</li>
                            <li>Gained confidence in your writing</li>
                            <li>Improved vocabulary and grammar</li>
                            <li>Top quality editors with Masters degrees or PhDs from leading UK/US universities and are associets of the society for editors and proofreaders.</li>
                        </ol>
                    </p>
                    <a href="#" class="btn btn-bordered">Free Instant Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== End Startup Banner Area ==-->

<!--== Start Why Us Area Wrapper ==-->
<section class="why-us-area-wrapper pt-120 pt-md-80 pt-sm-60 pb-120 pb-md-80 pb-sm-60">
    <div class="container">
        <div class="row">
            <!-- Start Section title -->
            <div class="col-lg-6 m-auto text-center">
                <div class="section-title-wrap layout--2">
                    <h2>Why Choose Us</h2>
                    {{-- <p class="mb-0">We’re a creative agency who pursue brilliance. We create new companies — and fix old
                        ones.</p> --}}
                </div>
            </div>
            <!-- End Section title -->
        </div>

        <div class="row">
            <div class="col-lg-7 order-1 order-lg-0">
                <div class="restaurant-why-us-accordion-wrap">
                    <div class="restaurant-why-us-accordion" id="whyUsAccordion">
                        <!-- Start Why Us Accordion #01 -->
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h3 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                                    <span>01.</span> Experience Editors
                                </h3>
                            </div>

                            <div id="collapseOne" class="collapse show" data-parent="#whyUsAccordion">
                                <div class="card-body">
                                    <p>Our team of editors hold the highest levels of qualifications and experience.
                                        As a minimum, our editors have advanced degrees from leading UK/US institutions
                                        and three years of experience in professional proofreading.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Start Why Us Accordion #02 -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h3 data-toggle="collapse" data-target="#collapseTwo">
                                    <span>02.</span>The Fairest Prices
                                </h3>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#whyUsAccordion">
                                <div class="card-body">
                                    <p>Our prices are highly competitive and represent excellent value.
                                        Our base rates start from £10.90/€15/$16.50 per 1,000 words.
                                        This is cheaper than Cambridge Proofreading and other similar services.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Start Why Us Accordion #03 -->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h3 data-toggle="collapse" data-target="#collapseThree">
                                    <span>03.</span> Effective Deadlines
                                </h3>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#whyUsAccordion">
                                <div class="card-body">
                                    <p>We understand that deadlines are of critical importance to students,
                                        academics and businesses. We are open 24/7 – submit your document
                                        at any time of the day and rest assured we will meet out guaranteed
                                        turnaround times.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Start Why Us Accordion #04 -->
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h3 data-toggle="collapse" data-target="#collapseFour">
                                    <span> 04.</span> Easy & Secure Ordering
                                </h3>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#whyUsAccordion">
                                <div class="card-body">
                                    <p>It is quick and simple to order our academic proofreading service.
                                        Simply upload your document, select your requirements and check
                                        out via PayPal, which is highly secure and accepts all debit/credit cards..</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-5 order-0">
                <!-- Start Why Us Right Content Area -->
                <div class="why-us-left-area-content mb-sm-30 mb-md-30">
                    <img src="{{asset('img/tina-floersch-39144-unsplash.jpg')}}" alt="Why choose us"/>
                </div>
                <!-- End Why Us Right Content Area -->
            </div>
        </div>
    </div>
</section>
<!--== End Why Us Area Wrapper ==-->

<!--== Start Pricing Table Area ==-->

<!--== End Pricing Table Area ==-->

<!--== Start Team Area Wrapper ==-->

<!--== End Team Area Wrapper ==-->

<!--== Start Testimonial Area Wrapper ==-->
<section class="testimonial-area bg-img" data-bg="{{asset('/img/tamarcus-brown-134928-unsplash.jpg')}}">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-8 m-auto text-center">
                            <div class="testimonial-content-wrap">
                                <div class="ht-slick-slider" data-slick='{"slidesToShow": 1, "arrows": false}'>
                                    <!-- Single Testimonial Start -->
                                    <div class="single-testimonial-wrap single-testimonial-wrap-white">
                                        <p>“ Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sit ad ullam autem adipisci, veniam quaerat esse, molestiae optio culpa omnis laboriosam et, saepe maiores quos non illo enim sunt? ”</p>
                                        <h3 class="client-name">Jessica Jung</h3>
                                        <h5 class="client-designation" style="color:#fff;">Writer</h5>
                                    </div>
                                    <!-- Single Testimonial End -->

                                    <!-- Single Testimonial Start -->
                                    <div class="single-testimonial-wrap single-testimonial-wrap-white">
                                        <p>“Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, quis. Doloribus modi dicta est voluptas nobis perferendis quae amet officiis minus a magnam fugiat in porro, nihil quo veritatis expedita molestias at accusamus doloremque sint!”</p>
                                        <h3 class="client-name">Ken Wheeler</h3>
                                        <h5 class="client-designation" style="color:#fff;">Student</h5>
                                    </div>
                                    <!-- Single Testimonial End -->

                                    <!-- Single Testimonial Start -->
                                    <div class="single-testimonial-wrap single-testimonial-wrap-white">
                                        <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi explicabo sapiente eius? Ullam, ea quisquam accusamus animi quas corrupti excepturi voluptatibus voluptas qui aut et!.”</p>
                                        <h3 class="client-name">Raju Ahammad</h3>
                                        <h5 class="client-designation" style="color:#fff;">Post Graduate Student</h5>
                                    </div>
                                    <!-- Single Testimonial End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</section>
<!--== End Testimonial Area Wrapper ==-->

<!-- Start Startup Call to Action -->
<section class="startup-call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="startup-call-to-action">
                    <!-- <img src="{{asset('/img/home-startup/daimond.png')}}" alt="Startup Call Action"/> -->
                    <h2>Are You Ready ? Let’s Work !</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Startup Call to Action -->

@include('partials.footer')

@endsection

@section('scripts')

@endsection
