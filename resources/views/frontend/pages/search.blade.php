@extends('frontend.main')
@section('content')
<div class="container content height-500" style="padding-top:0px !important;">

@if($trips->count()>0)
<div class="headline"><h2>Available Trips :{{$trips->count()}} <span class="badges"></span></h2>
<div class="tripListViewWrapperDiv" style="display:block;">
@foreach ($trips as $info)
<div class="trip"  data-date="14/04/2022" data-std-fair="690.00" data-business-fair="$f.currency($businessFares.get($trip.getCoachCode()).getTravelCharge().getAmount())">

 
                        <div class="row trip-summary show-trip-details">
                            <div class="col-md-2">
                                <div class="fw-area-code">
                                    {{$info->route->fromLocation->Location_name}}
                                </div>
                                
                                <div class="fw-coach-code-info">
                                    <i class="icon-arrow-down"></i>
                                    <div>
                                        <div class="fw-coach-code-label"> coach</div>
                                        <div class="fw-coach-code"></div>
                                    </div>
                                </div>
                                <div class="fw-area-code">
                                {{$info->route->toLocation->Location_name}}

                                </div>
                                
                            </div>

                            
                                    <div class="col-md-2">
                                        <div class="fw-tripinfo-label">
                                        {{$info->time->time}}

                                        </div>
                                        <div class="fw-tripinfo-busstation">
                                        {{$info->Date}}
 
                                        </div>
                                        <div class="fw-tripinfo-label" style="padding-top: 10px;">
                                        {{$info->bus_type}}
 
                                        </div>
                                        <div class="fw-tripinfo-destination">
                                            DHAKA
                                        </div> 
                                    </div>
                                    <div class="fw-fareinfo col-md-2">
                                        <div class="fw-tripinfo-label">
                                            Standard
                                        </div>
                                                                                    <div class="fw-fare-currency-label">BDT</div>
                                            <div class="fw-fare-currency standard-fare">
                                            {{$info->price}}

                                            </div>
                                     </div>
                                    <div class="fw-fareinfo col-md-2">
                                        <div class="fw-tripinfo-label">
                                            Bus information
                                        </div>
                                        <div class="fw-tripinfo-busstation">
                                        {{$info->Bus->Bus_name}}
 
                                        </div>
                                        <div class="fw-tripinfo-label" style="padding-top: 10px;">
                                        {{$info->bus_type}}
 
                                        </div>
                                      </div>
                                    <div class="col-md-2 show-trip-details">
                                         <button type="button" class="btn btn-primary arrow-down pull-right" data-toggle="0"><i class="fa fa-list"></i>&nbsp;&nbsp;<a href="{{route('seat.view',$info->id)}}">view seat</a></button>
                                    </div>
                                </div>
                                
                        </div>
                      @endforeach
                        </div>
                        @else
                        <p>No trips available.</p>

                        @endif
                        <div class="row trip-details" style="display: none;"></div>

                         </div> 
                    </div>
                    @endsection
                     
            


                                       
         