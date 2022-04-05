@extends('frontend.main')

@section('content')

<div class="row">
    <div class="col-sm-12 alert" id="alertMsg" style="margin-bottom: 0px !important; text-align: center;font-size: 18px">
    </div>
</div>
<div class="tab">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding">
            <button class="tablinks btn-block" onclick="openTab(event, 'one')" id="defaultOpen">
                <i class="fa fa-ticket"></i> Buy Ticket
            </button>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  no-padding">
            <button class="tablinks btn-block" onclick="openTab(event, 'two')" id="manageTicket">
                <i class="fa fa-cog"> </i> Ticket Operation
            </button>
        </div>
    </div>
</div>
<div id="one" class="tabcontent">


    <form action="/search" id="sky-form" class="sky-form" method="post">
        <fieldset>
            <section class="col-md-6 col-sm-6 col-xs-12 col-lg-2">
                <label class="select"> <a href="{{route('website.location.show')}}"></a>
                    <select name="fromAreaCode" id="origin">
                        <option value=""> Select an location from </option>


                        @foreach($locations as $info)
                        <option value="{{$info->id}}">
                            {{$info->Location_name}}
                        </option>
                        @endforeach
                        <!--                           <option value="KHL" >
                                    Khulna
                                </option>
                                                            <option value="JSR" >
                                    Jessore
                                </option>
                                                            <option value="SATKHIRA" >
                                    Satkhira
                                </option>
                                                            <option value="BPL" >
                                    Benapole
                                </option>
                                                            <option value="CTG" >
                                    Chittagong
                                </option>
                                                            <option value="COXSBAZAR" >
                                    Cox's Bazar
                                </option> -->
                    </select>

                </label>
            </section>
            <section class="col-md-6 col-sm-6 col-xs-12 col-lg-2">
                <label class="select"><a href="{{route('website.location.show')}}"></a>
                    <select name="toAreaCode" id="destination">
                        <option value="">Select an location to</option>
                        @foreach($locations as $info)
                        <option value="{{$info->id}}">
                            {{$info->Location_name}}
                        </option>
                        @endforeach
                        <!-- <option value="DHK">
                            Dhaka
                        </option>
                        <option value="KHL">
                            Khulna
                        </option>
                        <option value="JSR">
                            Jessore
                        </option>
                        <option value="SATKHIRA">
                            Satkhira
                        </option>
                        <option value="BPL">
                            Benapole
                        </option>
                        <option value="CTG">
                            Chittagong
                        </option>
                        <option value="COXSBAZAR">
                            Cox's Bazar
                        </option> -->
                    </select>
                    
                </label>
            </section>

            <section class="col-md-6 col-sm-6 col-xs-12 col-lg-2">
                <label class="input">
                    <i class="icon-append fa fa-calendar"></i>
                    <input readonly type="text" name="travelDate" id="date" data-date-start-date="+0d" placeholder="Trip Date" value="05/04/2022">
                </label>
            </section>

            <section class="col-md-6 col-sm-6 col-xs-12 col-lg-3">
                <label class="select">
                    <select name="timePeriod" id="timePeriod">
                        <option value="">
                            Time Period
                        </option>
                        <option value="05:00AM-11:59AM">
                            Morning (05:00AM-11:59AM)
                        </option>
                        <option value="12:00PM-05:59PM">
                            Afternoon (12:00PM-05:59PM)
                        </option>
                        <option value="06:00PM-11:59PM">
                            Night (06:00PM-11:59PM)
                        </option>
                    </select>
                    <i></i>
                </label>
            </section>


            <section class="col-md-6 col-sm-6 col-xs-7 col-lg-2">
                <label class="select">
                    <select name="isAc" id="isAc">
                        <option value="">Coach Type</option>
                        <option value="true">AC</option>
                        <option value="false">Non AC
                        </option>
                    </select>
                    <i></i>
                </label>
            </section>
            <div class="col-md-6 col-sm-6 col-xs-5 col-lg-1">
                <button class="btn-u submitBtn form-control" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </fieldset>
    </form>
</div>

<div id="two" class="tabcontent">


    <form action="/search/ticket-details" method="get" class="sky-form">
        <fieldset>
            <section class="col-md-8 col-sm-12 col-xs-12 col-lg-7">
                <label class="input">
                    <input type="text" name="pnr" id="pnr" placeholder="Please Enter Ticket PNR" class="form-control" value="">
                </label>
            </section>
            <div class="col-md-4 col-sm-12 col-xs-12 col-lg-2">
                <button class="btn-u form-control" type="submit">
                    Search
                </button>
            </div>
        </fieldset>
    </form>

    <div class="row">
        <div class="col-md-12">
            <div id="cancelDetails"></div>
        </div>
    </div>
</div>
</div>

<div id="matchedWarning" class="modal fade" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header modal-header-bg">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><b style="color: red">Warning!</b></h4>
            </div>
            <div class="modal-body">
                <p>Origin and Destination cannot be same.</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><span>Ok</span>
                    &nbsp;
                </button>
            </div>
        </div>
    </div>
</div>


<div id="dateWarning" class="modal fade" role="dialog">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header modal-header-bg">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><b style="color: red">Warning!</b></h4>
            </div>
            <div class="modal-body">
                <p style="font-size: 16px">Dear valued customer, to buy online ticket from 28-September-2021 onward
                    please
                    <a target="_blank" href="https://ticket.shohagh.com">CLICK HERE</a>
                </p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span>Cancel</span>
                    &nbsp;
                </button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="gotToNewWebsite()"><span>Continue</span>
                    &nbsp;
                </button>
            </div>
        </div>
    </div>
</div>





</div>
<!--/row-->
<!-- End Purchase Block -->

<!--=== Content Part ===-->
<div class="container content-sm" style="margin-top: -20px">

    <div class="row">
        <div class="margine10">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-4">
                <button class="btn btn-success form-control" style="height: 45px" data-toggle="modal" data-target="#matchedWarnings">
                    <span class="buttonBuy">HOW TO BUY TICKET</span>
                </button>
            </div>
        </div>
        <div class="margine10">
            <div class="col-sm-4">
                <button class="btn btn-warning form-control" style="height: 45px" data-toggle="modal" data-target="#howToCancelTicket">
                    <span class="buttonBuy">HOW TO CANCEL TICKET</span>
                </button>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
    </div>
    <!-- End Service Blokcs -->

    <h2 class="h2-heading" style="margin-top: 50px;margin-bottom: 50px">WHY SHOHAGH PARIBAHAN</h2>
    <div class="row banner-wrap">
        <div class="col-md-3 col-sm-6 banner-section">
            <div class="box1-img-container">
                <img class="box1-img" src="../../images/seat.png" alt="shohagh.com">
            </div>
            <div class="box1-title">COMFORTABLE</div>
            <div class="box1-content">We have very large leg space in between seats.You can spend 12 hours
                without any discomfort in our seats
            </div>
        </div>
        <div class="col-md-3 col-sm-6 banner-section">
            <div class="box1-img-container">
                <img class="box1-img" src="../../images/gps.png" alt="shohagh.com">
            </div>
            <div class="box1-title">GPS NAVIGATION</div>
            <div class="box1-content">All of our buses are equipped with GPS and Camera for safety of the valued
                passenger.
            </div>
        </div>
        <div class="col-md-3 col-sm-6 banner-section">
            <div class="box1-img-container">
                <img class="box1-img" src="../../images/ticket.png" alt="shohagh.com">
            </div>
            <div class="box1-title">BUY TICKETS EASILY</div>
            <div class="box1-content">You can buy ticket from our wide range of ticketing booth and online. You
                can book your seat through our call center +8809606444777.
            </div>
        </div>
        <div class="col-md-3 col-sm-6 banner-section">
            <div class="box1-img-container">
                <img class="box1-img" src="../../images/entertainment.png" alt="shohagh.com">
            </div>
            <div class="box1-title">ENTERTAINMENT ON BOARD</div>
            <div class="box1-content">Our buses are equipped with full HD Display and DVD player to play drama ,
                music and movies in order to make the journey more enjoyable.
            </div>
        </div>
    </div>


    <!-- Destinations -->
    <div class="headline">
        <h2>Destinations</h2>
    </div>
    <div class="row margin-bottom-20">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="../../images/Dhaka.png" alt="Dhaka">
                    </div>
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="">Dhaka</a></h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="../../images/Chittagong.png" alt="">
                    </div>
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="">Chittagong</a>
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="../../images/Jessore.png" alt="">
                    </div>
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="">Jessore</a></h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="../../images/Khulna.png" alt="">
                    </div>
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="">Khulna</a></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row margin-bottom-20">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="../../images/Coxsbazar-02.png" alt="">
                    </div>
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="">Cox's Bazar</a></h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="../../images/Satkhira-02.png" alt="">
                    </div>
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="">Satkhira</a>
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="../../images/Kolkata-02.png" alt="">
                    </div>
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="">Kolkata</a>
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="../../images/Benapole.png" alt="">
                    </div>
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="">Benapole</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="headline">
        <h2></h2>
    </div>
    <a target="_blank" title="SSLCommerz" alt="SSLCommerz"><img style="width:100%;height:auto;" src="https://securepay.sslcommerz.com/public/image/SSLCommerz-Pay-With-logo-All-Size-03.png" /></a>

    <div class="headline">
        <h2></h2>
    </div>


</div>
<!--/container-->
<!-- End Content Part -->

@endsection