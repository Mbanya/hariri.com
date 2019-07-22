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
                        {{$service->name}} <br>
                        <p style="font-size:20px; font-weight:500;">
                            {{$service->sub_heading }}
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
            {!!$service->description!!}
        </div>
    </div>

    <div class="container clearfix">
        <h4>Get an Instant Quote and Place Your Order.</h4>
        <form method="post" action="">
            <div class="row" style="padding-bottom:50px;" id="checkout">
                <div class="col-md-10">
                    <div class="order-item row">
                        <div class="col-md-7 mb-10">
                            <h5>
                                <span>{{$service->name}}</span>
                                <p class="price" data-price="0.030">$0.030 per word</p>
                            </h5>
                        </div>
                        <div class="row" style="padding-left:10px;">
                            <div class="col-md-3">
                                <p>
                                    <b>
                                        Required Time
                                    </b>
                                </p>
                            </div>
                            <div class="col-md-7 mb-10">
                                <select name="time" id="time" class="form-control">
                                    <option value="24">24 Hours</option>
                                    <option value="48">48 hours</option>
                                    <option value="72">72 Hours</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <p>
                                    <b>
                                        Number of words
                                    </b>
                                </p>
                            </div>
                            <div class="col-md-7 mb-10">
                                <input type="text" name="words" id="words" placeholder="Number of Words" value="1" class="form-control words" required />
                            </div>

                        </div>

                    </div>
                    <div class="total-sum">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 style="text-align:left;">
                                    Total
                                </h4>
                                <div class="col-md-4">
                                    <h4>
                                        <p id="total"></p>

                                    </h4>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="quote text-right mt-25">
                        <button type="submit" class="btn btn-lg- btn-scrib-cta mb-10" id="create_quote" name="create_quote">
                            <span class="fa fa-calculator"></span>
                            <span class="confirm"><span class="notranslate">&nbsp;</span>Calculate Quote</span>
                        </button>
                    </div>
                </div>

            </div>

        </form>


        <!-- <table class="table-striped" style="padding-top:100px;" cellpadding="2" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$service->name}}</td>
                        <td>(up to 1,500 words)</td>
                        <td>4 hours</td>
                    </tr>
                    <tr>
                        <td>{{$service->name}}</td>
                        <td>(up to 4000 words)</td>
                        <td>8 hours</td>
                    </tr>
                    <tr>
                        <td>{{$service->name}}</td>
                        <td>(up to 6,000 words)</td>
                        <td>12 hours</td>
                    </tr>
                    <tr>
                        <td>{{$service->name}}</td>
                        <td>(up to 8,000 words)</td>
                        <td>24 hours</td>
                    </tr>
                    <tr>
                        <td>{{$service->name}}</td>
                        <td>(up to 16,000 words)</td>
                        <td>48 hours</td>
                    </tr>
                    <tr>
                        <td>{{$service->name}}</td>
                        <td>(up to 20,000 words)</td>
                        <td>72 hours</td>
                    </tr>
                    <tr>
                        <td>{{$service->name}}</td>
                        <td>(up to 50,000 words)</td>
                        <td>1 week </td>
                    </tr>
                    <tr>
                        <td>{{$service->name}}</td>
                        <td>(50,000 to 90,000 words)</td>
                        <td>1 week </td>
                    </tr>
                </tbody>
            </table> -->


    </div>
</div>

</div>

<!--== End Page Content Wrapper ==-->
@include('partials.footer')
@endsection
<style>
    .text-right {
        text-align: right;
    }

    .mb-10 {
        margin-bottom: 10px !important;
    }

    .mt-25 {
        margin-top: 25px !important;
    }

    .btn-scrib-cta {
        background-color: #ffbe00;
        border: 1px solid #ffb400;
        color: #fff;
    }

    .btn-group-lg>.btn,
    .btn-lg {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px;
    }

    .btn-lg-1 {
        border-radius: 4px;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        color: inherit;
        font: inherit;
        margin: 0;
    }

    .order-item,
    .total-sum {
        text-align: left;
        border: solid 1px #dbdbdb;
        padding: 15px 5px 20px;
        border-radius: 2px;
        margin-top: 26px;
        /* margin: auto; */
    }
</style>
@section('scripts')
<script>
    $(document).ready(function() {
        $("#checkout").on("keyup change keydown", function() {
            var price = +$(".price").data("price");
            var words = +$("#words").val();
            var time = +$("#time").val();
            switch (time) {
                case 24:
                    var total = price * words;
                    $("#total").text("$" + total);
                    break;
                case 48:
                    var newPrice = price - 0.002;
                    var total = newPrice * words;
                    var presentPrice = total.toFixed(2);
                    $("#total").text("$" + presentPrice);
                    break;
                case 72:
                    var newPrice = price - 0.004;
                    var total = newPrice * words;
                    var presentPrice = total.toFixed(2);
                    $("#total").text("$" + presentPrice);
                    break;
                default:
                    $("total").text("$" + price * words);
            }


        })
        // $("#checkout").on("keydown", function() {
        //     var price = +$(".price").data("price");
        //     var words = +$("#words").val();
        //     var time = +$("#time").val();
        //     switch (time) {
        //         case 24:
        //             var total = price * words;
        //             $("#total").text("$" + total);
        //             break;
        //         case 48:
        //             var newPrice = price - 0.002;
        //             var total = newPrice * words;
        //             var presentPrice = total.toFixed(2);
        //             $("#total").text("$" + presentPrice);
        //             break;
        //         case 72:
        //             var newPrice = price - 0.004;
        //             var total = newPrice * words;
        //             var presentPrice = total.toFixed(2);
        //             $("#total").text("$" + presentPrice);
        //             break;
        //         default:
        //             $("total").text("$" + price * words);
        //     }


        // })
    })
</script>
@endsection
