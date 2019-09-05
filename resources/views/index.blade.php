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
        <h2>Campus Life</h2>
        <p>University of Barishal</p>
        <div id="slider">
            <a href="#"><img  src="{{asset('images/slideshow/01.jpg')}}" alt="nature 1" title="ক্যাম্পাস" /></a>
            <a href="#"><img  src="{{asset('images/slideshow/02.jpg')}}" alt="nature 2" title="ক্যাম্পাসে যখন বর্ষাকাল" /></a>
            <a href="#"><img  src="{{asset('images/slideshow/03.jpg')}}" alt="nature 3" title="শরতের পরিবেশে" /></a>
            <a href="#"><img  src="{{asset('images/slideshow/04.jpg')}}" alt="nature 4" title="মুক্তমঞ্চ থেকে" /></a>

        </div>
    </div>
</center>


<div class="posts clear">
@foreach ($stories as $story)
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
                <p class="paraa"> <a href="#"> <?php 
                $value = $story->story;
                $value = Str::limit($value, $limit = 300, $end = '......');
                echo $value;

                 ?></a></p>
                <div class="read"><a class="active" href="#">Read More
                        <span class="glyphicon glyphicon-chevron-right"></span></a></div>
                <br>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="sidebar clear">

	<div class="sidebar1">
        <div class="sidebartitle">
            <h2><a href="">Quick Links</a></h2>
        </div>
        <div class="storyname">
            <h3><a href="{{route('sharestory')}}">Share your story</a> &nbsp; <span class="glyphicon glyphicon-pencil"></span></h3>
            <h3><a href="{{route('confessions')}}">Confessions</a> &nbsp; <span class="glyphicon glyphicon-heart-empty"></span></h3>
            <h3><a href="{{route('dashboard')}}">Dashboard</a> &nbsp; <span class="glyphicon glyphicon-user"></span></h3>
        </div>

    </div>


    <div class="sidebar1">
        <div class="sidebartitle">
            <h2><a href="{{route('topstories')}}">Top Stories</a></h2>
        </div>
        <div class="storyname">
            <h3><a href=""> মোহোনা</a></h3>
            <h3><a href=""> যদি সে আমার হয়</a></h3>
            <h3><a href=""> হৈমন্তি</a></h3>
            <h3><a href="">আসেনি</a></h3>
        </div>
    </div>

    

</div>


@endsection