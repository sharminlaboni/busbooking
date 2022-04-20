

<div class="container content height-500" style="padding-top:0px !important;">
<div class="card"  id="invoice">


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bus Ticket</title>
  </head>
  <body>
   

  

<div class="headline"><h2> Ticket <span class="badges"></span></h2>
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
                                        <div class="fw-tripinfo-busstation">
                                        {{$info->date}}
 
                                        </div>
                                        <div class="fw-tripinfo-label" style="padding-top: 10px;">
                                        {{$info->bus_type}}
 
                                        </div>
                                      </div>
                                   
                        </div>
                      @endforeach
                        </div>
                    
                        <div class="row trip-details" style="display: none;"></div>

                         </div> 
                    </div>
</div>
                    
  
            



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 
  </body>
</html>
<div class="col-md-4">

<button class="btn btn-success" onclick="printInvoice('invoice')">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z"/></svg>Print</button>
</div>


<script type="text/javascript">
function printInvoice(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>        


                                       
         