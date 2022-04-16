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
<form action="">
    
</form>
    <form action="{{route('trip.search')}}" method="POST" role=""  id="sky-form" class="sky-form">
        @csrf
        <fieldset>
            <section class="col-md-6 col-sm-6 col-xs-12 col-lg-2">
                <label class="select">
                    <select name="fromAreaCode" id="origin">
                        <option value=""> Select an location from </option>


                        @foreach($locations as $info)
                        <option value="{{$info->id}}">
                            {{$info->Location_name}}
                        </option>
                        @endforeach
            
                    </select>

                </label>
            </section>
            <section class="col-md-6 col-sm-6 col-xs-12 col-lg-2">
                <label class="select">
                    <select name="toAreaCode" id="destination">
                        <option value="">Select an location to</option>
                        @foreach($locations as $info)
                        <option value="{{$info->id}}">
                            {{$info->Location_name}}
                        </option>
                        @endforeach
                
                    </select>
                    
                </label>
            </section>

            <section class="col-md-6 col-sm-6 col-xs-12 col-lg-2">
                <label class="input">
                    <i class="icon-append fa fa-calendar"></i>
                    <input type="date" name="travelDate" id="date" data-date-start-date="+0d" placeholder="Trip Date" value="">
                </label>
            </section>

            <section class="col-md-6 col-sm-6 col-xs-12 col-lg-3">
                <label class="select">
                    <select name="timePeriod" id="timePeriod">
                        <option value="">
                            Time Period
                        </option>
                        @foreach($times as $timeinfo)
                        <option value="{{$timeinfo->id}}">
                            {{$timeinfo->time}}
                        </option>
                        @endforeach
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
               
            
            </div>
        </fieldset>
        <button type="submit">SEARCH</button>

    </form>
</div>

<div id="two" class="tabcontent">

    <div class="row">
        <div class="col-md-12">
            <div id="cancelDetails"></div>
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
                   <a herf="{{route('trip.search')}}">Button</a>
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

    <!-- <div class="row">
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
    </div> -->
    <!-- End Service Blokcs -->

    <h2 class="h2-heading" style="margin-top: 50px;margin-bottom: 50px">WHY Online Bus Tiket Reservation</h2>
    <div class="row banner-wrap">
        <div class="col-md-3 col-sm-6 banner-section">
            <div class="box1-img-container">
                <img class="box1-img" src="frontend/img/seat.png" alt="">
            </div>
            <div class="box1-title">COMFORTABLE</div>
            <div class="box1-content">We have very large leg space in between seats.You can spend 12 hours
                without any discomfort in our seats
            </div>
        </div>
          <div class="col-md-3 col-sm-6 banner-section">
            <div class="box1-img-container">
                <img class="box1-img" src="frontend/img/gps.png" alt="">
            </div>
            <div class="box1-title">GPS NAVIGATION</div>
            <div class="box1-content">All of our buses are equipped with GPS and Camera for safety of the valued
                passenger.
            </div>  
        </div>
        <div class="col-md-3 col-sm-6 banner-section">
            <div class="box1-img-container">
                <img class="box1-img" src="frontend/img/ticket.png" alt="">
            </div>
            <div class="box1-title">BUY TICKETS EASILY</div>
            <div class="box1-content">You can buy ticket from our wide range of ticketing booth and online. 
            </div>
        </div>
        <div class="col-md-3 col-sm-6 banner-section">
            <div class="box1-img-container">
                <img class="box1-img" src="frontend/img/entertainment.png" alt="">
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
                        <img class="img-responsive" src="frontend/img/dhaka.jpg" alt="Dhaka">
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
                        <img class="img-responsive" src="frontend/img/Chittagongcity.jpg" alt="">
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
                        <img class="img-responsive" src="frontend/img/barisal.jpg" alt="">
                    </div>
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="">Barisal</a></h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="frontend/img/srimagal.jpg" alt="">
                    </div>
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="">Srimangal</a></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row margin-bottom-20">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="frontend/img/Cox1.jpg" alt="">
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
                        <img class="img-responsive" src="frontend/img/slyhlet.jpg" alt="">
                    </div>
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="">Sylhet</a>
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="frontend/img/Khulna.jpg" alt="">
                    </div>
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="">Khulna</a>
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="frontend/img/rangamati.jpg" alt="">
                    </div>
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="">Rangamati</a>
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