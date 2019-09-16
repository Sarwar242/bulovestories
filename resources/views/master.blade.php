<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'CampusLife')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('slider/css/nivo-slider.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/navbar.css')}}">
    <link rel="icon" href="{{asset('images/bulovestorieslogo.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/tabletab.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('ism/css/my-slider.css')}}" />

    <!-- Scripts -->
    <script src="{{asset('ism/js/ism-2.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}} "></script>
</head>

<body>
    <div id="app">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid ">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                        <li class=" @yield('act','active') "><a href="{{route('index')}}">News Feed <span
                                    class="sr-only">(current)</span></a></li>
                        <li class=" @yield('act2','active') "><a href="{{route('topstories')}}">Top Stories</a></li>
                        <li role="presentation" class=" @yield('act3','active')"><a
                                href="{{route('confessions')}}">Confessions</a></li>
                        <li class=" @yield('act4','active') "><a href="{{route('sharestory')}}">Share Story</a></li>
                        <li class=" @yield('act5','active') "><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class=" @yield('act6','active') "><a href="{{route('faq')}}">FAQ</a></li>
                        <li class=" @yield('act7','active') "><a href="{{route('about')}}">About</a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if(Auth::Check())
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">
                                        Profile
                                    </a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>

                        </li>
                        @else
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                        @endif



                    </ul>


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container py-4">

            @yield('content')


        </div>
    </div>
    <br><br>
    <footer>

        <!-- Copyright -->

        <div class="footerpp">
            <p>© 2019 Copyright : BUCampusLife. Developed by Pranta & Sarwar. </p>
        </div>


    </footer>



</body>

</html>
