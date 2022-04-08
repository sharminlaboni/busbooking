

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('customer.registration')}}" method="POST">
          @csrf
            <div class="form-group">
                <label form="">Enter customer Name</label>
                <input class="form -control" type="name" required name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label form="">Enter customer email</label>
                <input class="form -control" type="email" required name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label form="">Enter customer password</label>
                <input class="form -control" type="password" required name="password" placeholder="Enter password">
            </div>  
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </div>
</from>
    </div>
  </div>
</div>
<!-- login -->



         <!-- <form action="">
            <div class="form-group">
                <label form="">Enter customer Name</label>
                <input class="form -control" required name="name" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label form="">Enter customer Name</label>
                <input class="form -control" required name="name" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label form="">Enter customer Name</label>
                <input class="form -control" required name="name" placeholder="Enter Email">
            </div>  -->
        
      
     
            



<div class="header d-print-none">
    <div class="container">
        <a href="/"
           class="logo imgwrapper">
            <img src="frontend/img/busticket-logo.png"
                 alt=""
                 class="img-responsive"
                 style="height: 60px; width: 140px;"/>
                 
        </a>

        <div class="topbar" style="text-align: right !important;">
            <ul class="loginbar pull-right"
                style="padding-left: 5px !important;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Rgistration
</button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  login
</button>
          
                 <!-- <li><a href="/signup">Registration</a></li>
                    <li class="topbar-devider"></li>
                     <li><a href="/login">Login</a></li>   -->
                            </ul>
        </div> 

        <button type="button"
                class="navbar-toggle"
                data-toggle="collapse"
                data-target=".navbar-responsive-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-bars"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
        <div class="container">
            <ul class="nav navbar-nav">
                <!-- Home -->
                <li class="active">
                    <a href="/">Home</a>
                </li>
                                <li class="">
                    <a href="/locations">Locations</a>
                </li>
                <li class="">
                    <a href="/contactUs">Contact Us</a>
                </li>
                <li class="">
                    <a href="/faq">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
</div>