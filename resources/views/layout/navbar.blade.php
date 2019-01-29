<div class="navbar navbar-default" style="    background-color: #38c2f4;" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">

    </div>
  </div>
</div>

<!-- for sidebar-->


<section>
  <nav>
    <ul>
      <a href="{{route('home')}}">Home</a><br> <br>
      <a href="{{route('register')}}">Registration</a><br> <br>
      <a href="{{route('login')}}">Login</a><br> <br>
      

                <div class="dropdown">
            <button class="dropbtn">Report</button>
            <div class="dropdown-content">
                <a href="{{route('userreport')}}">User Report</a><br>
                <a href="{{route('department')}}">Department</a>
            </div>
            </div>
    </ul>
  </nav>
</section>


<style>


/* Create two columns/boxes that floats next to each other */
nav {
    margin-top: -20px;
  float: left;
  width: 20%;
  height: 1222px; /* only for demonstration, should be removed */
  background: #0761f2;
}
  a {
    color: white;
}

</style>










<!-- for footer section -->

<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #1dbcf5de;
   color: white;
   text-align: center;
}
</style>
<div class="footer">
  <p>Footer</p>
</div>
