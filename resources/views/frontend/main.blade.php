
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <title>Bus Ticket Booking</title>
    <!-- Meta -->
<meta charset="utf-8">
<meta name="google-site-verification" content="YAPHCtc6Pzx1ZQiwmNUMA6rGAQyqjtLUUpMk-Vjp0zI" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="Shohagh Paribahan, Shohagh bus, Shohagh online ticket, Online bus ticket in bangladesh,shohag,online bus ticket booking, Buy Bus tickets, Bus service, Bus routes, Bus tickets, Bus booking, Bus fares, ticket fare, ticket price, online booking, Online ticket booking, Book bus tickets, Buy Bus Tickets online, Bus booking online"></meta>
<meta name="description"
      content="Shohagh Paribahan (Pvt.) Ltd started its journey in 1972 lead by late Mr. Younus Talukdar.At the course of time, Shohagh Paribahan has proved itself as the most modern, Time befitting and the pioneer of modern public transport service provider of Bangladesh."></meta>
<meta name="author" content="shohagh.com"></meta>




    <!-- Favicon -->
<link rel="shortcut icon" href="/assets/img/fab.png">

<!-- Web Fonts -->
<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
    <!-- CSS Global Compulsory -->
<link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">

<!-- CSS Header and Footer -->
<link rel="stylesheet" href="{{url('/frontend/css/header-default.css')}}">
<link rel="stylesheet" href="{{url('/frontend/css/footer-v1.css')}}">

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="{{url('/frontend/css/animate.css')}}">
<link rel="stylesheet" href="{{url('/frontend/css/line-icons.css')}}">
<link rel="stylesheet" href="{{url('/frontend/css/font-awesome.min.css')}}"> 
<link rel="stylesheet" href="{{url('/frontend/css/parallax-slider.css')}}">
<link rel="stylesheet" href="{{url('/frontend/css/owl.carousel.css')}}">
<!-- 
<link rel="stylesheet" href="{{url('/frontend/css/sky-forms.css')}}">
<link rel="stylesheet" href="{{url('/frontend/css/custom-sky-forms.css')}}"> -->
<link rel="stylesheet" href="{{url('/frontend/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{url('frontend/css/dataTables.responsive.css')}}">
<!-- CSS Theme -->
<link rel="stylesheet" href="{{url('frontend/css/red.css')}}">
    <!-- CSS Customization -->

<link rel="stylesheet" href="{{url('frontend/css/bootstrap-timepicker.css')}}">
<link rel="stylesheet" href="{{url('frontend/css/custom.css')}}">

</head>

<body>
<div class="wrapper">

    <!--=== Header ===-->
<style type="text/css">
    .imgwrapper {
        max-width: 150px !important;
    }
</style>


<style>
    .tab {
        overflow: hidden;
        border: 1px solid #da4c4d;
        background-color: #da4c4d;
    }

    /*.fa fa-ticket,fa-cog{*/
    /*color: white;*/
    /*}*/

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        /*transition: 0.3s;*/
        font-size: 17px;
        color: white;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #9e372c;
        color: white;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #9e372c;
        color: white;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #da4c4d;
        border-top: none;
    }
</style>


@include('frontend.partials.header')
    <div class="bodyWrapperDiv">
                <!--=== Slider ===-->
        <div class="slider-inner">
            <div id="da-slider" class="da-slider">
                <div class="da-slide">
                    <h2><i>Best &amp; Most Professional</i> <br/> <i>Travel Option in</i> <br/> <i>Bangladesh</i></h2>
                    <p><i>We have the widest range of</i> <br/> <i>luxury inter-city bus. </i></p>
                </div>
                <div class="da-arrows">
                    <span class="da-arrows-prev"></span>
                    <span class="da-arrows-next"></span>
                </div>
            </div>
        </div><!--/slider-->
        <!--=== End Slider ===-->

        <!--=== Purchase Block ===-->
        <div>
            



<div class="container content">

@yield('content')
</div>


  @include('frontend.partials.footer')


</div><!--/wrapper-->


<div id="matchedWarnings" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-header-bg">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 style="text-align: center;font-size: 20px;font-weight: 300">HOW TO BUY TICKET</h2>
            </div>
            <!-- <div class="modal-body">
                <div class="row row-design">
                    <div class="col-md-12 alignment">
                        <div class="design">
                            <div class="headline"><h2>STEP 1</h2></div>

                            <p style="font-size: 16px">1. Select <strong>From</strong> location, <strong>To</strong>
                                location, <strong>Journey Date</strong>, <strong>Time Period</strong> and <strong>Coach
                                    Type</strong>.</p>
                            <p style="font-size: 16px">2. Press <strong>Search</strong> button.</p>
                            <p>&nbsp;</p>
                            <img src="../../images/buy-step-1-search.v2.png" alt=""
                                 style="height: auto;width: 75%;margin-left: 50px"/>
                            <p>&nbsp;</p>
                            <p style="font-size: 16px">3. You will get <strong>Available Trips</strong>. Select <strong>View
                                Seats</strong>
                                button to expand the details of a trip.</p>
                            <p>&nbsp;</p>
                            <img src="../../images/buy-step-1-trips.v2.png" alt=""
                                 style="height: auto;width: 75%;margin-left: 50px"/>
                        </div>
                        <div class="design">

                            <div class="headline"><h2>STEP 2</h2></div>
                            <p style="font-size: 16px">1. Select seats.</p>
                            <p style="font-size: 16px">2. Select your preferred boarding point.</p>
                            <p style="font-size: 16px">3. Press <strong>Continue</strong> button.</p>
                            <p>&nbsp;</p>
                            <img src="../../images/buy-step-2-seats.v2.png" alt=""
                                 style="height: auto;width: 75%;margin-left: 50px"/>
                        </div>
                        <div class="design">


                            <div class="headline"><h2>STEP 3</h2></div>
                            <p style="font-size: 16px">1. You will be taken to Login screen. If you already have created your user
                                account before please login using your
                                credentials. If not click on signup link and follow the process.</p>
                            <p>&nbsp;</p>
                            <img src="../../images/buy-step-3-signin.png" alt=""
                                 style="height: auto;width: 75%;margin-left: 50px"/>
                            <p>&nbsp;</p>
                            <p style="font-size: 16px">2. After successful login you will get a glance of the ticket details
                                based on your selections.</p>
                            <p>&nbsp;</p>
                            <img src="../../images/buy-step-3-booking.v2.png" alt=""
                                 style="height: auto;width: 75%;margin-left: 50px"/>
                            <p>&nbsp;</p>
                            <p style="font-size: 16px">3. Select the checkbox agreeing the terms &amp; conditions.</p>
                            <p style="font-size: 16px">4. Press <strong>Proceed to Pay</strong> button.</p>
                            <p>&nbsp;</p>

                        </div>
                        <div class="design">

                            <div class="headline"><h2>STEP 4</h2></div>
                            <p style="font-size: 16px">1. You will be taken to SSL Commerz payment gateway.</p>
                            <p style="font-size: 16px">2. Select your preferred payment method and follow the gateway
                                instructions.</p>
                            <p>&nbsp;</p>
                            <img src="../../images/buy-step-4-payment.v2.jpg" alt=""
                                 style="height: 500px;margin-left: 50px"/>
                            <p>&nbsp;</p>
                            <p style="font-size: 16px">3. Upon successful payment you will be redirected to confirmation
                                page and your reservation is done.</p>

                            <p>&nbsp;</p>
                            <img src="../../images/buy-step-4-confirm.v2.png" alt=""
                                 style="height: auto;width: 75%;margin-left: 50px"/>
                            <p>&nbsp;</p>

                            <p style="font-size: 16px">4. After successful reservation you will get a SMS and email
                                stating the details of your ticket.</p>
                            <p>&nbsp;</p>
                            <p style="font-size: 16px">5. Done.</p>


                        </div>
                    </div>
                </div>


            </div> -->
        </div>
    </div>
</div>


<div id="howToCancelTicket" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-header-bg">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 style="text-align: center;font-size: 20px;font-weight: 300">HOW TO CANCEL TICKET</h2>
            </div>
            <!-- <div class="modal-body">
                <div class="row row-design">
                    <div class="col-md-12 alignment">
                        <div class="design">
                            <div class="headline"><h2>STEP 1</h2></div>

                            <p style="font-size: 16px">1. Select <strong>Ticket Operation</strong> tab.</p>

                            <p style="font-size: 16px">2. Enter ticket<strong> PNR </strong> and click on
                                <strong>Search</strong> then you will get ticket information / details.</p>
                            <p>&nbsp;</p>
                            <img src="../../images/cancel-step-1-search.v2.png" alt=""
                                 style="height: auto;width: 75%;margin-left: 50px"/>

                        </div>
                        <div class="design">

                            <div class="headline"><h2>STEP 2</h2></div>
                            <p style="font-size: 16px">1. From ticket information / details you will see <strong>Cancel
                                Ticket</strong> button if the ticket is eligible for cancellation.</p>
                            <p style="font-size: 16px">2. Read terms and conditions and click on chekbox to agree.</p>
                            <p>&nbsp;</p>
                            <img src="../../images/cancel-step-2-confirm.v2.png" alt=""
                                 style="height: auto;width: 75%;margin-left: 50px"/>
                            <p style="font-size: 16px">3. Press <strong>Cancel Ticket and Refund</strong> button to proceed.</p><br>
                            <p style="font-size: 16px;text-align: center">Refunds will be processed automatically at the
                                time of cancellation. Depending on the customer’s Bank/Card/M-Cash, it may take 3-14
                                business days to reflect the credit in your account.</p>

                        </div>
                    </div>
                </div>


            </div> -->
        </div>
    </div>
</div>

<!-- hv,,, -->

<script type="text/javascript" src="{{url('frontend/js/jquery.min.js')}}"></script>
<script type="application/javascript">
    $(document).ready(function () {
        $('#origin').change(function (data) {
            var origin = $("#origin option:selected").text().trim();
            var destination = $("#destination option:selected").text().trim();
            if (origin === destination) {
                $('#matchedWarning').modal('show');
                $("#origin").val(null);
            }
            if (origin && destination) {
                getBusStations(origin,destination)
            }
        });
        $('#destination').change(function (data) {
            var destination = $("#destination option:selected").text().trim();
            var origin = $("#origin option:selected").text().trim();
            if (origin === destination) {
                $('#matchedWarning').modal('show');
                $("#destination").val(null);
            }
            if (origin && destination) {
                getBusStations(origin,destination)
            }
        });

        var destination = $("#destination option:selected").text().trim();
        var origin = $("#origin option:selected").text().trim();
        if (origin && destination) {
            getBusStations(origin,destination)
            console.log(origin,destination)
        }

        var busStationId = '-1';

        function getBusStations(origin,destination) {
            $("#busStation").empty();
            $("#busStation").append('<option value="">Dropping Point</option>');
            $.get('/bus-stations', 'origin=' + origin + '&destination=' + destination, function (data) {
                for (var i = 0; i < data.length; i++) {
                    const busStation = data[i];
                    $("#busStation").append(
                            '<option value="' + busStation.id + '" ' + (busStation.id == busStationId ? 'selected' : '') + '>' + busStation.name + '</option>'
                    );
                }
            });
        }

        document.getElementById("defaultOpen").click();
        if (false == true){
            document.getElementById("manageTicket").click();
        }
    });

    function openTab(evt, data) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(data).style.display = "block";
        evt.currentTarget.className += " active";
    }


    /*function checkDateException(event) {
        if ($("#date").val()) {
            const date = $("#date").val()
            const splitDate = date.split("/");
            const updateDate = splitDate[2] + "-" + splitDate[1] + "-" + splitDate[0]
            const newDate = new Date(updateDate)
            if (newDate >= new Date("2021-09-28")) {
                event.preventDefault();
                $('#dateWarning').modal('show');
            }
        }
    }

    function gotToNewWebsite() {
        window.open("https://ticket.shohagh.com", "_blank")
    }*/

</script>

<script type="text/javascript" src="/assets/js/manageTicket.history.js"></script>



    <!-- JS Global Compulsory -->
<script type="text/javascript" src="{{url('frontend/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/bootstrap.min.js')}}"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{url('frontend/js/back-to-top.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/smoothScroll.js')}}"></script>

<script src="{{url('frontend/js/jquery.maskedinput.min.js')}}"></script>
<script src="{{url('frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.validate.min.js')}}"></script>

<script type="text/javascript" src="{{url('frontend/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery.cslider.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/dataTables.responsive.js')}}"></script>
    <!-- JS Customization -->

<script type="text/javascript" src="{{url('frontend/js/bootstrap-timepicker.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/timepicker.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/custom.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/util.js')}}"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{url('frontend/js/app.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/masking.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/datepicker.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/validation.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/owl-carousel.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/parallax-slider.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        App.init();
        Masking.initMasking();
        Datepicker.initDatepicker();
        Timepicker.initTimepicker();
        Validation.initValidation();
        OwlCarousel.initOwlCarousel();
        ParallaxSlider.initParallaxSlider();
        setMinimumBodyHeight();
    });
</script>


<style type="text/css">

    .bt-box {
        width: 100%;
        margin-top: 35px;
        margin-bottom: 35px;
    }

    .banner-wrap {
        margin: auto;
        border: 1px #eee solid;
        margin-top: 12px;
    }

    .banner-section {
        vertical-align: top;
        padding-top: 30px;
        min-height: 350px;
        border-right: 1px #eee solid;

    }

    .box1-title {
        font-weight: 500;
        text-align: center;
        margin-top: 35px;
        font-size: 18px;
    }

    .box1-content {
        margin: auto;
        margin-top: 25px;
        color: #686868;
        padding-top: 26px;
        text-align: center;
    }

    .box1-img {
        width: 100%;
        height: 100%;
        vertical-align: center;
    }

    .box1-img-container {
        width: 80px;
        height: 91px;
        margin-left: auto;
        margin-right: auto;

    }

    .h2-heading {
        font-size: 24px;
        font-weight: 700;
        font-style: normal;
        font-stretch: normal;
        line-height: normal;
        letter-spacing: normal;
        text-align: center;
        color: #404040;
    }

    .alignment {
        margin-left: 30px;
        margin-top: 20px;
        margin-bottom: 20px
    }

    .design {
        margin-top: 40px;
        padding-right: 15px;
    }

    .margine10 {
        margin-top: 5px;
    }

</style>
    <!--[if lt IE 9]>
<script src="/assets/plugins/respond.js"></script>
<script src="/assets/plugins/html5shiv.js"></script>
<script src="/assets/plugins/placeholder-IE-fixes.js"></script>
<script src="/assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
<![endif]-->

<!--[if lt IE 10]>
    <script src="/assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
<![endif]-->





</body>
</html>
