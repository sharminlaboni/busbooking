@extends('welcome')
@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>

            </div>


    <div class="row">
        <div class="col-md-3">
            <div class="card" >
                <h5 class="card-header" style="background-color: green">Total Trip</h5>
                <div class="card-body" style="background-color: green">

    
                <h2>{{$total_trip}}</h2>




                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <h5 class="card-header" style="background-color: green" >Total Route</h5>
                <div class="card-body"style="background-color: green" >

                    <h2>{{$total_route}}</h2>

                </div>
            </div>
        </div>
        <div class="col-md-3" >
            <div class="card"  style="background-color: purple">
                <h5 class="card-header" style="background-color: purple">Total Customer</h5>
                <div class="card-body">

                <h2>{{$total_customer}}</h2>


                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"  style="background-color: blue">
                <h5 class="card-header"style="background-color: blue" >Total Booking</h5>
                <div class="card-body">

                <h2>{{$total_booking}}</h2>


                </div>
            </div>
        </div>
    </div>


@endsection