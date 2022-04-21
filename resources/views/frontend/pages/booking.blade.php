<style>
    * {
        box-sizing: border-box;
    }
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    .header {
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 20px 10px;
    }
    .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 2px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
    }
    .header a.logo {
        font-size: 25px;
        font-weight: bold;
    }
    .header a:hover {
        background-color: #ddd;
        color: black;
    }
    .header a.active {
        background-color: dodgerblue;
        color: white;
    }
    .header-right {
        float: right;
    }
    @media screen and (max-width: 500px) {
        .header a {
            float: none;
            display: block;
            text-align: left;
        }
        .header-right {
            float: none;
        }
    }
    .card {
        margin: auto;
        border: solid 1px #dbdad7;
        width: 40%;
        padding-left: 10px !important;
        padding-bottom: 10px !important;
        padding-right: 10px !important;
        padding-top: 0px !important
    }
    .card-title {
        margin: auto;
        padding: 15px;
        background-color: #2f7fad;
        color: white;
        width: 80%
    }
    div.card-body {
        padding: 0px
    }
    .custom-select {
        width: 100%
    }
    .btn2 {
        margin-left: 10%
    }
    input {
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #d1d1cf !important
    }
    input:focus {
        border-color: #d1d1cf !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }
    select {
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #d1d1cf !important
    }
    select:focus {
        border-color: #d1d1cf !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }
    .radiobtn {
        margin-left: 3.5%
    }
    .icons {
        margin: auto !important
    }
    .fa {
        border-radius: 25px;
        width: 10%;
        margin-left: 5%;
        border: solid 2px #dbdad7;
        margin-top: 5%;
        text-align: center
    }
    .fa-plane {
        color: #1cad9f
    }
    .fa-taxi {
        color: #c2f700
    }
    .fa-train {
        color: red
    }
    @media only screen and (max-width: 600px) {
        .card {
            margin: auto;
            border: solid 1px #dbdad7;
            width: 90%;
            padding-left: 10px !important;
            padding-bottom: 10px !important;
            padding-right: 10px !important;
            padding-top: 0px !important
        }
        .fa {
            border-radius: 25px;
            width: 15%;
            margin-left: 5%;
            border: solid 2px #dbdad7;
            margin-top: 5%;
            text-align: center
        }
    }
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

<body>
    <div class="header">
        <a href="#" style="text-decoration: none" class="logo">Here is your booking information</a>
        <div class="header-right">
            <a class="" href="{{url('/')}}" style="margin-right: 15px;
    text-decoration: none">Home</a>
        </div>
    </div>
</body>
       
<br>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">seat name </th>     
       <th scope="col">Counter</th>
       <th scope="col">Status</th>
       
        <th scope="col">Total amount</th> 
     <th scope="col">Date</th>      
      <th scope="col">Action</th>  
    </tr>
  </thead>
  <tbody>
    @foreach($booking as $key=>$book)
    <tr>
        <td>{{$key}}</td>
   
      <td>{{$booking[$key]->first()->user->name}}</td>
      
      <td>
      @foreach($book as $data)
       <p> {{$data->seat_number}}</p>
      @endforeach
      </td>
        
      
      <td>
            {{$booking[$key]->first()->counter->counter_name}}
        </td>
        <td>
            {{$booking[$key]->first()->booking_status}}
        </td>
        
        <td>{{$book->sum('totalAmount')}}</td>
        <td>
        {{$booking[$key]->first()->date}}
      </td>
      <td>
         <a class="btn btn-primary" href="{{route('view.invoice',[$book->first()->user_id,$book->first()->trip_id])}}">view Ticket</a>  
      </td>
      <!-- <td>
         <a class="btn btn-danger" href="{{route('show.ticket')}}">Ticket</a>  
      </td> -->
      
    @endforeach
    </tr>
    
  </tbody>
  
 