<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'BULoveStories')</title>

      <link rel="stylesheet" href="{{asset('slider/css/nivo-slider.css')}}" type="text/css" media="screen" />
    	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/navbar.css')}}">
      <link rel="icon" href="{{asset('images/bulovestorieslogo.png')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">




<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
  $('#slider').nivoSlider({
    effect:'random',
    slices:10,
    animSpeed:500,
    pauseTime:2200,
    startSlide:0, //Set starting Slide (0 index)
    directionNav:false,
    directionNavHide:false, //Only show on hover
    controlNav:false, //1,2,3...
    controlNavThumbs:false, //Use thumbnails for Control Nav
    pauseOnHover:true, //Stop animation while hovering
    manualAdvance:false, //Force manual transitions
    captionOpacity:0.8, //Universal caption opacity
    beforeChange: function(){},
    afterChange: function(){},
    slideshowEnd: function(){} //Triggers after all slides have been shown
  });
});
</script>






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
            <li class=" @yield('act','active') "><a href="{{route('index')}}">News Feed <span class="sr-only">(current)</span></a></li>
            <li class=" @yield('act2','active') "><a  href="{{route('topstories')}}">Top Stories</a></li>
            <li role="presentation" class=" @yield('act3','active') "><a  href="{{route('notifications')}}">Notifications<span class="badge">3</span></a></li>
            <li  class=" @yield('act4','active') "><a  href="{{route('sharestory')}}">Share Story</a></li>
            <li class=" @yield('act5','active') "><a  href="{{route('dashboard')}}">Dashboard</a></li>
            <li class=" @yield('act6','active') "><a  href="{{route('faq')}}">FAQ</a></li>
            <li class=" @yield('act7','active') "><a  href="{{route('about')}}">About</a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
          	@if(Auth::Check())
          	@else
          	 <li><a  href="">Login</a></li>
            <li><a  href="">Register</a></li>
          	@endif



          </ul>


        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>







    <div class="container">

@yield('content')


</div>


<footer>

  <!-- Copyright -->
  <center>
  <div class="footerpp">
    <p>© 2019 Copyright : BULoveStories . Developed by Pranta & Sarwar. </p>
  </div>
  <center>

</footer>

<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}} "></script>

</body>
</html>
