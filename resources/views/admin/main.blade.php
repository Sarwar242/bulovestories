<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Admin | CampusLife')</title>

      <link rel="stylesheet" href="{{asset('slider/css/nivo-slider.css')}}" type="text/css" media="screen" />
    	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/navbar.css')}}">
      <link rel="icon" href="{{asset('images/bulovestorieslogo.png')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">










  </head>
  <body>




    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
         
           <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('index')}}">
        <img alt="Brand" class="logopng" src="{{asset('images/bulovestorieslogo.png')}}">
      </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav nav-tabs">
            <li class=" @yield('act','active') "><a href="{{route('homeadmin')}}">Home <span class="sr-only">(current)</span></a></li>
            <li class=" @yield('act2','active') "><a  href="{{route('confessionpage')}}">Confessions</a></li>
            <li role="presentation" class=" @yield('act3','active')"><a  href="{{route('admins')}}">Admins</a></li>
            <li  class=" @yield('act4','active') "><a  href="{{route('members')}}">Members</a></li>
            

          </ul>

          <ul class="nav navbar-nav navbar-right">
          	
          	 <li><a  href="{{route('index')}}">Logout</a></li>
            
          	



          </ul>


        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>







    <div class="container">




@yield('content')


</div>


<footer>

  <!-- Copyright -->
 
  <div class="footerpp">
    <p>© 2019 Copyright : BUCampusLife. Developed by Pranta & Sarwar. </p>
  </div>
 

</footer>

<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}} "></script>

</body>
</html>
