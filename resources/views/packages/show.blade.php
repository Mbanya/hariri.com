@extends('layouts.main')
@section('assets')
{{-- <link rel="stylesheet" href="css/custom.css"> --}}
<?php
$title = 'Package';
?>
@endsection
@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-offwhite" style="background-image:url('images/)">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content d-flex">
                    <h2 style="font-size:45px; font-weight:700;">
                        {{$package->name}} <br>
                        <p style="font-size:20px; font-weight:500;">
                            {{$package->sub_heading }}
                        </p>
                        {{-- <p style="font-size:18px;">
                            {{ $package->sub_heading_description }}
                        </p> --}}

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
            {!!$package->description!!}
        </div>
    </div>

    <div class="container clearfix">
        <h4>Select a service to get an instant quote.</h4>
        <div class="row no-gutters">
            @foreach ($package->services as $item)
            <!-- Start Single Custom Search Item #01 -->
            <div class="col-lg-4 col-sm-6 text-center">
                <div class="single-custom-search-item">
                    <h2>{{$item->name}}</h2>
                    <p>
                        {{$item->sub_heading_description}}
                    </p>
                    <a href="{{route('service.show',$item->slug)}}" class="btn-know-more">+ Know More</a>
                </div>
            </div>
            <!-- End Single Custom Search Item #01 -->
            @endforeach
        </div>
    </div>

</div>

<!--== End Page Content Wrapper ==-->
@include('partials.footer')
@endsection


@section('scripts')
<script>

</script>

@endsection
