@extends('frontend.main')
@section('content')
<div class="container content height-500" style="padding-top:0px !important;">
<div class="headline"><h2>Available Trips : <span class="badges"></span></h2></div>
@foreach ($trips as $info)
<div class="tripListViewWrapperDiv" style="display:block;">
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

                            <!-- <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="fw-tripinfo-label">Reporting</div>
                                        <div class="fw-tripinfo-time">05:45 AM</div>
                                        <div class="fw-tripinfo-day">Thursday</div>
                                        <div class="fw-tripinfo-date">14 April, 2022</div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="fw-tripinfo-label">Departure</div>
                                        <div class="fw-tripinfo-time">06:00 AM</div>
                                        <div class="fw-tripinfo-day">Thursday</div>
                                        <div class="fw-tripinfo-date">14 April, 2022</div>
                                    </div> -->

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
                                      <button type="button" class="btn btn-primary arrow-down pull-right" data-toggle="0"><i class="fa fa-list"></i>&nbsp;&nbsp;View Seats</button>
                                    </div>
                                </div>
                                                            </div>
                        </div>
                        <div class="row trip-details" style="display: none;"></div>

                         

                    </div> 
                     
               <!-- new trips -->
              
                         <!-- table -->
                    <table class="table tripTable" style="display: none;">
                <tbody>
                                        <tr class="trip" data-coach-code="2088" data-date="14/04/2022" data-std-fair="690.00" data-business-fair="$f.currency($businessFares.get($trip.getCoachCode()).getTravelCharge().getAmount())">
                        <td style="text-align: center">
                            <div class="fw-area-code">
                                KHL
                            </div>
                            
                            <div class="fw-coach-code-info">
                                <i class="icon-arrow-down" style="font-size: 180%;"></i>
                            </div>
                            <div class="fw-area-code">
                                DHK
                            </div>
                            <div class="fw-are-name">
                                
                                <label class="fw-tripinfo-route-note">
                                    
                                </label>
                            </div>

                            <div class="fw-are-name" style="padding-top: 20px">
                                <div class="fw-area-code">Coach</div>
                                <div class="fw-are-name" style="font-size: 110%;">207</div>
                            </div>
                        </td>
                        <td>
                            <table class="innerTripListTable">
                                <tbody>
                                                                    <tr>
                                    <td>
                                        <div class="headerTitle">Reporting : <label class="tripLabel">05:45 AM</label>, Thu 14 April, 22
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="headerTitle">Departure : <label class="tripLabel">06:00 AM</label>, Thu 14 April, 22
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="headerTitle">Boarding : <label class="fw-tripinfo-destination">ROYAL</label></div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="headerTitle">Destination : <label class="fw-tripinfo-destination">DHAKA</label>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="headerTitle">Standard
                                            :                                                  <label class="amountLabelMobile">BDT 690.00</label>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="headerTitle">Business
                                            : </div>

                                    </td>
                                </tr>

                                    
                                <tr>
                                    <td colspan="2" style="padding: 2px; border-bottom-width: 0px;">
                                        <div class="row trip-details" style="margin: 0px 0px; border: none;padding-left:0px !important; padding-right:0px !important">

                                        </div>
                                        <div class="row" style="padding-top: 5px;">
                                            <div class="col-md-12 col-xs-12 col-lg-1 col-sm-12">
                                                <button class="btn btn-success btn-block show-trip-details" ismobileview="1" data-toggle="0">View Seat Plan
                                                </button>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr> 

                    <!-- uuuu -->
                                        <!-- <tr class="trip" data-coach-code="201" data-date="14/04/2022" data-std-fair="690.00" data-business-fair="$f.currency($businessFares.get($trip.getCoachCode()).getTravelCharge().getAmount())">
                        <td style="text-align: center">
                            <div class="fw-area-code">
                                KHL
                            </div>
                            
                            <div class="fw-coach-code-info">
                                <i class="icon-arrow-down" style="font-size: 180%;"></i>
                            </div>
                            <div class="fw-area-code">
                                DHK
                            </div>
                            <div class="fw-are-name">
                                
                                <label class="fw-tripinfo-route-note">
                                    
                                </label>
                            </div>

                            <div class="fw-are-name" style="padding-top: 20px">
                                <div class="fw-area-code">Coach</div>
                                <div class="fw-are-name" style="font-size: 110%;">201</div>
                            </div>
                        </td>
                        <td>
                            <table class="innerTripListTable">
                                <tbody>
                                                                    <tr>
                                    <td>
                                        <div class="headerTitle">Reporting : <label class="tripLabel">06:30 AM</label>, Thu 14 April, 22
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="headerTitle">Departure : <label class="tripLabel">06:45 AM</label>, Thu 14 April, 22
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="headerTitle">Boarding : <label class="fw-tripinfo-destination">ROYAL</label></div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="headerTitle">Destination : <label class="fw-tripinfo-destination">DHAKA</label>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="headerTitle">Standard
                                            :                                                  <label class="amountLabelMobile">BDT 690.00</label>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="headerTitle">Business
                                            : </div>

                                    </td>
                                </tr>

                                    
                                <tr>
                                    <td colspan="2" style="padding: 2px; border-bottom-width: 0px;">
                                        <div class="row trip-details" style="margin: 0px 0px; border: none;padding-left:0px !important; padding-right:0px !important">

                                        </div>
                                        <div class="row" style="padding-top: 5px;">
                                            <div class="col-md-12 col-xs-12 col-lg-1 col-sm-12">
                                                <button class="btn btn-success btn-block show-trip-details" ismobileview="1" data-toggle="0">View Seat Plan
                                                </button>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr class="trip" data-coach-code="201" data-date="14/04/2022" data-std-fair="690.00" data-business-fair="$f.currency($businessFares.get($trip.getCoachCode()).getTravelCharge().getAmount())">
                        <td style="text-align: center">
                            <div class="fw-area-code">
                                KHL
                            </div>
                            
                            <div class="fw-coach-code-info">
                                <i class="icon-arrow-down" style="font-size: 180%;"></i>
                            </div>
                            <div class="fw-area-code">
                                DHK
                            </div>
                            <div class="fw-are-name">
                                
                                <label class="fw-tripinfo-route-note">
                                    
                                </label>
                            </div>

                            <div class="fw-are-name" style="padding-top: 20px">
                                <div class="fw-area-code">Coach</div>
                                <div class="fw-are-name" style="font-size: 110%;">201</div>
                            </div>
                        </td>
                        <td>
                            <table class="innerTripListTable">
                                <tbody>
                                                                    <tr>
                                    <td>
                                        <div class="headerTitle">Reporting : <label class="tripLabel">06:30 AM</label>, Thu 14 April, 22
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="headerTitle">Departure : <label class="tripLabel">06:45 AM</label>, Thu 14 April, 22
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="headerTitle">Boarding : <label class="fw-tripinfo-destination">ROYAL</label></div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="headerTitle">Destination : <label class="fw-tripinfo-destination">DHAKA</label>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="headerTitle">Standard
                                            :                                                  <label class="amountLabelMobile">BDT 690.00</label>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="headerTitle">Business
                                            : </div>

                                    </td>
                                </tr>

                                    
                                <tr>
                                    <td colspan="2" style="padding: 2px; border-bottom-width: 0px;">
                                        <div class="row trip-details" style="margin: 0px 0px; border: none;padding-left:0px !important; padding-right:0px !important">

                                        </div>
                                        <div class="row" style="padding-top: 5px;">
                                            <div class="col-md-12 col-xs-12 col-lg-1 col-sm-12">
                                                <button class="btn btn-success btn-block show-trip-details" ismobileview="1" data-toggle="0">View Seat Plan
                                                </button>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr> -->


                    <!-- kkk -->



                  
                 </tbody>
                    </table> 



@endforeach
                                       
         @endsection