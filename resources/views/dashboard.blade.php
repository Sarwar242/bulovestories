@extends('master')
@section('title')
Dashboard | Campus Life
@endsection
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
active
@endsection
@section('act6')
notactive
@endsection
@section('act7')
notactive
@endsection


@section('content')
<br><br>
<div class="dashboard">


    <div class="cover">
        <img class="img-responsive" src="{{asset('images/cover.jpg')}}">
    </div>
    <div class="profilepic">
        <img class="img-responsive" src="{{asset('images/cover.jpg')}}">
    </div>
    <div class="profilename">
        <h2>{{ Auth::user()->name }}</h2>

    </div>
    <div class="dashfollow">
        <p>Followers <span class="badge"> 300 </span>&nbsp; </p>

    </div>
    <div class="editprofile">
        <p><a class="btndashboard btn-primary" href="{{route('editprofile',Auth::user()->id)}}">Edit Profile</a></p>
        </form>

    </div>

</div>


<div class="posts clear">
    @foreach ($stories as $story)
    <div class="stories">
        <div class="profilesection">
            <div class="image clear">
                <img class="imagemain" src="{{asset('images/cover.jpg')}}">
            </div>
            <div class="userpf clear">
                <div class="name">
                    <h2>{{ Auth::user()->name }}</h2>
                </div>
                <div class="following">
                    <p>
                        <a class="btn" href="{{route('editstory',$story->id)}}">
                            Edit</a>

                        <a class="btn" onclick="return confirm('Are you sure?')" href="{{route('deletestory',$story->id)}}">
                            Delete</a><span class="status">&nbsp;&nbsp;
                            Approved</a></span></p>
                </div>
            </div>
        </div>

        <div class="contents">
            <h2><a href=""> {!! $story->title !!}</a></h2>


            <div class="para">
                <p class="paraa"> <a href="#"><?php
$value = $story->story;
$value = Str::limit($value, $limit = 300, $end = '......');
echo $value;

?></a></p>
                <div class="read"><a class="active" href="#">Read More<span
                            class="glyphicon glyphicon-chevron-right"></span></a></div>
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
            <h3><a href="{{route('sharestory')}}">Share your story</a> &nbsp; <span
                    class="glyphicon glyphicon-pencil"></span></h3>
            <h3><a href="{{route('confessions')}}">Confessions</a> &nbsp; <span
                    class="glyphicon glyphicon-heart-empty"></span></h3>
            <h3><a href="{{route('dashboard')}}">Dashboard</a> &nbsp; <span class="glyphicon glyphicon-user"></span>
            </h3>
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
