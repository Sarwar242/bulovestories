@extends('master')

@section('act')
notactive
@endsection
@section('act2')
notactive
@endsection
@section('act3')
notactive
@endsection
@section('act4')
notactive
@endsection
@section('act5')
notactive
@endsection
@section('act6')
notactive
@endsection
@section('act7')
notactive
@endsection


@section('content')
<br><br><br><br>



<center>
    <div class="slidersection">
        <h2>Love & Life Stories</h2>
        <div id="slider">
            <a href="#"><img src="{{asset('images/slideshow/01.jpg')}}" alt="nature 1" title="This is a Title" /></a>
            <a href="#"><img src="{{asset('images/slideshow/02.jpg')}}" alt="nature 2" title="This is a Title" /></a>
            <a href="#"><img src="{{asset('images/slideshow/03.jpg')}}" alt="nature 3" title="This is a Title" /></a>
            <a href="#"><img src="{{asset('images/slideshow/04.jpg')}}" alt="nature 4" title="This is a Title" /></a>
        </div>
    </div>
</center>

@foreach ($stories as $story)
<div class="posts clear">

    <div class="stories">
        <div class="profilesection">
            <div class="image clear">
                <img class="imagemain" src="{{asset('images/cover.jpg')}}">
            </div>
            <div class="userpf clear">
                <div class="name">
                    <h2><a href="">{{ $story->user->name }}</a></h2>
                </div>
                <div class="following">
                    <p>Followers <span class="badge"> 300 </span>&nbsp; <span>
                            <a href="#">+Follow</a></span></p>
                </div>
            </div>

        </div>

        <div class="contents">
            <h2><a href=""> {!! $story->title !!}</a></h2>
            <div class="para">
                <p class="paraa"> <a href="#"> {!! $story->story !!}</a></p>
                <div class="read"><a class="active" href="#">Read More
                        <span class="glyphicon glyphicon-chevron-right"></span></a></div>
                <br>
            </div>
        </div>
    </div>
</div>
@endforeach
<div class="sidebar clear">
    <div class="sidebar1">
        <div class="sidebartitle">
            <h2><a href="">Top Stories</a></h2>
        </div>
        <div class="storyname">
            <h3><a href=""> মোহোনা</a></h3>
            <h3><a href=""> যদি সে আমার হয়</a></h3>
            <h3><a href=""> হৈমন্তি</a></h3>
            <h3><a href="">আসেনি</a></h3>
        </div>
    </div>

    <div class="sidebar1">
        <div class="sidebartitle">
            <h2><a href="">Quick Links</a></h2>
        </div>
        <div class="storyname">
            <h3><a href="">Share your story</a> &nbsp; <span class="glyphicon glyphicon-pencil"></span></h3>
            <h3><a href="">Confessions</a> &nbsp; <span class="glyphicon glyphicon-heart-empty"></span></h3>
            <h3><a href="">Dashboard</a> &nbsp; <span class="glyphicon glyphicon-user"></span></h3>
        </div>

    </div>

</div>


@endsection