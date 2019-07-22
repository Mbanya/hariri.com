@extends('layouts.main')
@section('assets')
<?php
$title = '';
?>
@endsection
@section('content')
<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <!--== Start Service Hero Area ==-->
    <section class="service-hero-area hv-100 parallaxBg bg-img"
        data-bg="{{asset('/img/services/service-hero-bg-2.png')}}">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-lg-11 text-center m-auto">
                    <div class="about-us-content white mt-sm-70 mt-md-70">
                        <h2>Our Services</h2>
                        <p class="paragraph-width">World-Class Editing and Proofreading at Your Fingertips</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Service Hero Area ==-->

    <!--== Start Our Services Content Area ==-->
    <section class="our-service-content-area">
        <div class="row no-gutters">
            <!-- Start Single Service Item -->
            <div class="col-md-6">
                <div class="single-call-action-wrap h-100 text-center text-lg-left">
                    <div class="call-action-icon">
                        <i class="fa fa-laptop"></i>
                    </div>
                <a href="{{url('package/english-as-a-second-language')}}">
                    <div class="call-action-info">
                        <h2>English Second Language</h2>
                        <p>English is not my first language. I need English editing and proofreading so that I sound like a native speaker.</p>
                    </div>
                    </a>
                   
                </div>
            </div>
            <!-- End Single Service Item -->

            <!-- Start Single Service Item -->
            <div class="col-md-6">
                <div class="single-call-action-wrap bg-black h-100 text-center text-lg-left">
                    <div class="call-action-icon">
                        <i class="fa fa-camera-retro"></i>
                    </div>
                    <a href="{{url('package/scholar')}}">
                    <div class="call-action-info">
                        <h2>Scholar </h2>
                        <p>I need to have my journal article, dissertation, or term paper edited and proofread,
                            or I need help with things like admissions essays and proposals.</p>
                    </div>
                </a>
                </div>
            </div>
            <!-- End Single Service Item -->

            <!-- Start Single Service Item -->
            <div class="col-md-6">
                <div class="single-call-action-wrap bg-black h-100 text-center text-lg-left">
                    <div class="call-action-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <a href="{{url('package/professional')}}">
                    <div class="call-action-info">
                        <h2>Professional</h2>
                        <p>I need editing and proofreading for my white papers, reports, manuals, press releases, marketing materials, and other business documents..</p>
                    </div>
                </a>
                </div>
            </div>
            <!-- End Single Service Item -->

            <!-- Start Single Service Item -->
            <div class="col-md-6">
                <div class="single-call-action-wrap h-100 text-center text-lg-left">
                    <div class="call-action-icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <a href="{{url('package/writer')}}">
                    <div class="call-action-info">
                        <h2>Writer </h2>
                        <p>I have a novel, manuscript, play, or ebook. I need a critique of my work, editing, copy editing, proofreading, or a query package.</p>
                    </div>
                </a>
                </div>
            </div>
            <!-- End Single Service Item -->

            <!-- Start Single Service Item -->
            <div class="col-md-12">
                <div class="single-call-action-wrap bg-black h-100 text-center text-lg-left">
                    <div class="call-action-icon">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <a href="{{url('package/individual')}}">
                    <div class="call-action-info">
                        <h2>Individual </h2>
                        <p>I want to sound professional and to get hired. I have a resume, letter, email, or personal document that I need to have edited and proofread..</p>
                    </div>
                    </a>
                </div>
            </div>
            <!-- End Single Service Item -->


        </div>
    </section>
    <!--== End Our Services Content Area ==-->

    <!--== Start Newsletter Area Wrapper ==-->
    <section class="newsletter-area-wrapper bg-brand pt-80 pt-sm-60 pb-80 pb-sm-60">
        <div class="container">
            <div class="row">
                <!-- Start Section title -->
                <div class="col-lg-6 m-auto text-center">
                    <div class="section-title-wrap layout--2 white mb-44">
                        <i class="fa fa-envelope-open-o"></i>
                        <h2>Newsletter</h2>
                        <p class="mb-0">Subscribe to get our quarterly newsletter.</p>
                    </div>
                </div>
                <!-- End Section title -->
            </div>
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="newsletter-content">
                        <div class="newsletter-form-wrap layout--2">
                            <form
                                action=""
                                method="post" id="mc-form" class="mc-form d-sm-flex">
                                <input type="email" id="mc-email" placeholder="Enter Email Address" required />
                                <button class="btn btn-black w-sm-100 mt-xs-10">Subscribe</button>
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
    </section>
    <!--== End Newsletter Area Wrapper ==-->
</div>
<!--== End Page Content Wrapper ==-->

<!--== Start Footer Area Wrapper ==-->
@include('partials.footer')
<!--== End Footer Area Wrapper ==-->

@endsection

@section('scripts')

@endsection
