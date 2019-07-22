@extends('layouts.main')
@section('assets')
<link rel="stylesheet" href="css/custom.css">
<?php
$title = 'Order';
?>
@endsection
@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-offwhite">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content d-flex">
                    <h2 style="font-size:40px; font-weight:500;">
                        Order Here In Three Simple Steps <br>
                        <p style="font-size:22px;">Safe, Secure, Confidential</p>

                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->
<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <div class="icon-box-item-1 pt-120 pt-md-80 pt-sm-60 pb-120 pb-md-80 pb-sm-60">
        <div class="container">
            <div class="row mtm-60 mtm-sm-0 mtm-md-0">
                <!-- Start Single Welcome Feature -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-welcome-feature d-flex">
                        <div class="feature-icon">
                            <i class="fa fa-codepen"></i>
                        </div>
                        <div class="feature-info">
                            <h3>Certified Private</h3>
                            <p>Confidentiality guaranteed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Welcome Feature -->
                <!-- Start Single Welcome Feature -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-welcome-feature d-flex">
                        <div class="feature-icon">
                            <i class="fa fa-file-o"></i>
                        </div>

                        <div class="feature-info">
                            <h3>Money-Back Promise</h3>
                            <p>Don't pay if you're not happy.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Welcome Feature -->
                <!-- Start Single Welcome Feature -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-welcome-feature d-flex">
                        <div class="feature-icon">
                            <i class="fa fa-folder-open-o"></i>
                        </div>

                        <div class="feature-info">
                            <h3>100% Secure Checkout</h3>
                            <p>Certified private connection.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Welcome Feature -->

            </div>
        </div>
    </div>

    <div class="container clearfix">
        <div class="divcenter center clearfix" style="max-width: 900px;" float="left">

            <script src="/bitrix/templates/.default/components/custom/new.order.form/template1/script.js?1548424264"
                type="text/javascript"></script>

            <div id="order-form">

                <div id="groups" class="active">
                    <h2>
                        <span class="number">
                            <span class="corner left-top"></span>
                            <span class="corner right-top"></span>
                            <span class="corner left-bottom"></span>
                            <span class="corner right-bottom"></span>
                            1
                        </span>
                        <span class="corner right-top"></span>
                        <span class="corner right-bottom"></span>
                        <span class="text">How can we help you?</span>
                    </h2>
                    <ul>
                        <li>
                            <a list_id="32" class="normal" href="?group=32">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Academic Documents</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a list_id="1" class="normal" href="?group=1">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Business Documents</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a list_id="2" class="normal" href="?group=2">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">English as a second language</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a list_id="34" class="normal" href="?group=34">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Personal Documents</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a list_id="37" class="normal" href="?group=37">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Statements of Purpose / Application Essays / Personal
                                                    Statements</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a list_id="35" class="normal" href="?group=35">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Website Content</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a list_id="36" class="normal" href="?group=36">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">I don't fit in these categories: just help me</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div id="services" class="inactive">
                    <h2>
                        <span class="number">
                            <span class="corner left-top"></span>
                            <span class="corner right-top"></span>
                            <span class="corner left-bottom"></span>
                            <span class="corner right-bottom"></span>
                            2
                        </span>
                        <span class="corner right-top"></span>
                        <span class="corner right-bottom"></span>
                        <span class="text">Select&nbsp;a&nbsp;service</span>
                    </h2>
                    <ul list_id="32" class="inactive">
                        <li>
                            <a item_id="1519" price_12="0.090" price_24="0.038" price_48="0.034" price_72="0.030"
                                class="normal" href="?item=1519">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Editing (grammar, structure, and clarity
                                                    improvements)</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a item_id="1377" price_12="0.070" price_24="0.024" price_48="0.022" price_72="0.020"
                                class="normal" href="?item=1377">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Proofreading (final check for minor mistakes)</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a item_id="4149" price_12="0.150" price_24="0.070" price_48="0.060" price_72="0.055"
                                class="normal" href="?item=4149">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Rewriting</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <ul list_id="1" class="inactive">
                        <li>
                            <a item_id="1884" price_12="0.090" price_24="0.038" price_48="0.034" price_72="0.030"
                                class="normal" href="?item=1884">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Editing (grammar, structure, and clarity
                                                    improvements)</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a item_id="113" price_12="0.070" price_24="0.024" price_48="0.022" price_72="0.020"
                                class="normal" href="?item=113">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Proofreading (final check for minor mistakes)</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a item_id="4148" price_12="0.150" price_24="0.070" price_48="0.060" price_72="0.055"
                                class="normal" href="?item=4148">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Rewriting</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <ul list_id="2" class="inactive">
                        <li>
                            <a item_id="106" price_12="0.090" price_24="0.038" price_48="0.034" price_72="0.030"
                                class="normal" href="?item=106">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Editing (grammar, structure, and clarity
                                                    improvements)</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a item_id="4147" price_12="0.150" price_24="0.070" price_48="0.060" price_72="0.055"
                                class="normal" href="?item=4147">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Rewriting</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <ul list_id="34" class="inactive">
                        <li>
                            <a item_id="1886" price_12="0.090" price_24="0.038" price_48="0.034" price_72="0.030"
                                class="normal" href="?item=1886">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Editing (grammar, structure, and clarity
                                                    improvements)</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a item_id="1885" price_12="0.070" price_24="0.024" price_48="0.022" price_72="0.020"
                                class="normal" href="?item=1885">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Proofreading (final check for minor mistakes)</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a item_id="4150" price_12="0.150" price_24="0.070" price_48="0.060" price_72="0.055"
                                class="normal" href="?item=4150">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Rewriting</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <ul list_id="37" class="inactive">
                        <li>
                            <a item_id="23782" price_12="0.20" price_24="0.075" price_48="0.060" price_72="0.050"
                                class="normal" href="?item=23782">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Editing (grammar, structure, and clarity
                                                    improvements)</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a item_id="23783" price_12="0.150" price_24="0.038" price_48="0.035" price_72="0.030"
                                class="normal" href="?item=23783">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Proofreading (final check for minor mistakes)</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a item_id="23784" price_12="0.20" price_24="0.15" price_48="0.10" price_72="0.09"
                                class="normal" href="?item=23784">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Rewriting</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <ul list_id="35" class="inactive">
                        <li>
                            <a item_id="1888" price_12="0.090" price_24="0.038" price_48="0.034" price_72="0.030"
                                class="normal" href="?item=1888">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Editing (grammar, structure, and clarity
                                                    improvements)</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a item_id="1887" price_12="0.070" price_24="0.024" price_48="0.022" price_72="0.020"
                                class="normal" href="?item=1887">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Proofreading (final check for minor mistakes)</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a item_id="4151" price_12="0.150" price_24="0.070" price_48="0.060" price_72="0.055"
                                class="normal" href="?item=4151">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Rewriting</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <ul list_id="36" class="inactive">
                        <li>
                            <a item_id="1890" price_12="0.090" price_24="0.038" price_48="0.034" price_72="0.030"
                                class="normal" href="?item=1890">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Editing (grammar, structure, and clarity
                                                    improvements)</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a item_id="1889" price_12="0.070" price_24="0.024" price_48="0.022" price_72="0.020"
                                class="normal" href="?item=1889">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Proofreading (final check for minor mistakes)</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a item_id="4152" price_12="0.150" price_24="0.070" price_48="0.060" price_72="0.055"
                                class="normal" href="?item=4152">
                                <span class="border top">
                                    <span class="border bottom">
                                        <span class="border left">
                                            <span class="border right">
                                                <span class="corner left-top"></span>
                                                <span class="corner right-top"></span>
                                                <span class="corner left-bottom"></span>
                                                <span class="corner right-bottom"></span>
                                                <span class="text">Rewriting</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div id="selected-item" class="inactive">
                    <h2>
                        <span class="number">
                            <span class="corner left-top"></span>
                            <span class="corner right-top"></span>
                            <span class="corner left-bottom"></span>
                            <span class="corner right-bottom"></span>
                            3
                        </span>
                        <span class="corner right-top"></span>
                        <span class="corner right-bottom"></span>
                        <span class="text">Selected&nbsp;item</span>
                    </h2>
                    <form id="add-form" name="iblock_add" action="/order_here/" method="post">
                        <input type="hidden" name="sessid" id="sessid" value="aa41206061d0956de7c4662e15674ee6">
                        <div id="order-item">
                            <input id="item" name="item" type="hidden" value="0">
                            <h3>
                                <span class="corner left-top"></span>
                                <span class="corner right-top"></span>
                                <span class="corner left-bottom"></span>
                                <span class="corner right-bottom"></span>
                                <span class="text"></span>
                                <span class="price">$0.000</span>
                            </h3>
                            <div class="label">Number of words</div>
                            <div class="input">
                                <input class="form-field page-count" name="page_count" type="text" value="1"
                                    price_12="0" price_24="0" price_48="0" price_72="0">
                            </div>
                            <div class="clear"></div>
                            <div class="label">Required time</div>

                            <div class="input">
                                <select id="hours" name="hours">
                                    <option value="12">12 hours</option>
                                    <option value="24" selected="1">24 hours</option>
                                    <option value="48">48 hours</option>
                                    <option value="72">72 hours</option>


                                </select>




                            </div>
                            <div class="clear"></div>
                        </div>
                        <div id="total-sum" style="display: block;">
                            <h3>
                                <span class="corner left-top"></span>
                                <span class="corner right-top"></span>
                                <span class="corner left-bottom"></span>
                                <span class="corner right-bottom"></span>
                                Total sum
                                <span class="price" style="display: inline;">$0.000</span>
                            </h3>
                        </div>

                        <div id="button-wrap">
                            <input type="submit" class="btn-blue-small" name="iblock_submit" value="Next">
                        </div>
                    </form>
                </div>

                <div class="clear"></div>
            </div>
            <script>
                $('#order-form').orderForm();

            </script>




        </div>




    </div>
    @include('partials.footer');
</div>
<!--== End Page Content Wrapper ==-->
@endsection
@section('scripts')

@endsection
