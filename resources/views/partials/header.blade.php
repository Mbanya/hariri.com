@if($title == 'About')
<!--== Start Header Area Wrapper ==-->
<header class="header-area-wrapper transparent-header black-header header-padding sticky-header">
    <div class="container-fluid">
        <div class="row">
            <!-- Mobile Responsive Menu -->
            <div class="col-3 d-block d-lg-none">
                <button class="mobile-menu "><i class="fa fa-bars"></i></button>
            </div>
            <!-- Start Logo Area Wrap -->
            <div class="col-6 col-lg-2 col-xl-3 text-center text-lg-left">
                <a href="/" class="logo-wrap d-block">
                    <img src="" alt="Hariri White Logo"/>
                    <img src="" class="sticky-logo" alt="Hariri Black Logo"/>
                </a>
            </div>
            <!-- End Logo Area Wrap -->
            @include('partials.nav')
        </div>
    </div>
</header>
<!--== End Header Area Wrapper ==-->
@elseif('app')
<header class="header-area-wrapper black-header header-padding sticky-header">
    <div class="container-fluid">
        <div class="row">
            <!-- Mobile Responsive Menu -->
            <div class="col-3 d-block d-lg-none">
                <button class="mobile-menu"><i class="fa fa-bars"></i></button>
            </div>

            <!-- Start Logo Area Wrap -->
            <div class="col-6 col-lg-2 col-xl-3 text-center text-lg-left">
                <a href="" class="logo-wrap d-block">
                    <img src="" class="sticky-logo" alt="Black Logo"/>
                </a>
            </div>
            <!-- End Logo Area Wrap -->

            <!-- Start Main Navigation Wrap -->
            @include('partials.nav')

            <!-- End Main Navigation Wrap -->
        </div>
    </div>
</header>
@elseif($title == 'Order')
<header class="header-area-wrapper black-header header-padding sticky-header">
    <div class="container-fluid">
        <div class="row">
            <!-- Mobile Responsive Menu -->
            <div class="col-3 d-block d-lg-none">
                <button class="mobile-menu"><i class="fa fa-bars"></i></button>
            </div>
            <!-- Start Logo Area Wrap -->
            <div class="col-6 col-lg-2 col-xl-3 text-center text-lg-left">
                <a href="/" class="logo-wrap d-block">
                    <img src="" class="sticky-logo" alt="Black Logo"/>
                </a>
            </div>
            <!-- End Logo Area Wrap -->

            <!-- Start Main Navigation Wrap -->
            @include('partials.nav')

            <!-- End Main Navigation Wrap -->
        </div>
    </div>
</header>
@elseif($title == 'Package')
<header class="header-area-wrapper black-header header-padding sticky-header">
    <div class="container-fluid">
        <div class="row">
            <!-- Mobile Responsive Menu -->
            <div class="col-3 d-block d-lg-none">
                <button class="mobile-menu"><i class="fa fa-bars"></i></button>
            </div>
            <!-- Start Logo Area Wrap -->
            <div class="col-6 col-lg-2 col-xl-3 text-center text-lg-left">
                <a href="/" class="logo-wrap d-block">
                    <img src="" class="sticky-logo" alt="Black Logo"/>
                </a>
            </div>
            <!-- End Logo Area Wrap -->

            <!-- Start Main Navigation Wrap -->
            @include('partials.nav')

            <!-- End Main Navigation Wrap -->
        </div>
    </div>
</header>
@elseif($title == 'Contact')
<!--== Start Header Area Wrapper ==-->
<header class="header-area-wrapper transparent-header  sticky-header">
    <div class="container-fluid">
        <div class="row">
            <!-- Mobile Responsive Menu -->
            <div class="col-3 d-block d-lg-none">
                <button class="mobile-menu "><i class="fa fa-bars"></i></button>
            </div>
            <!-- Start Logo Area Wrap -->
            <div class="col-6 col-lg-2 col-xl-3 text-center text-lg-left">
                <a href="/" class="logo-wrap d-block">
                    <img src="" alt="Hariri White Logo"/>
                    <img src="" class="sticky-logo" alt="Hariri Black Logo"/>
                </a>
            </div>
            <!-- End Logo Area Wrap -->
            @include('partials.nav')
        </div>
    </div>
</header>
<!--== End Header Area Wrapper ==-->

@endif
