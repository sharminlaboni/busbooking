 <div class="container">
        <div class="card"  id="invoice">
            <div class="card-header">
                Invoice
                <strong>{{$booking->created_at}}</strong>

            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong>Online Bus ticket Reservation</strong>
                        </div>
                        <div>House #14</div>
                        <div>Road #8</div>
                        <div>Email: info@bus.com</div>
                        <div>Phone: 01857377860</div>
                    </div>

                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                       
                        <div>{{$booking->user->name}}</div>
                        <div>Email:{{$booking->user_email}}</div>
                    </div>



                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="center">#</th>
                            <th>bus seat name</th>
                            <th class="right">counter</th>
                            <th class="center"></th>
                            <th class="right">Total</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td class="left strong">{{$booking->seat_number}}</td>
                            <td class="right">{{$booking->counter_id}} .BDT</td>
                            <td class="right">{{$booking->totalAmount }} .BDT</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                            <tr>
                                <td class="left">
                                    <strong>total</strong>
                                </td>
                                <td class="right">{{$booking->total}} .BDT</td>
                            </tr>

                           
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>

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