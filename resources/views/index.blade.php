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


        <div class="ism-slider" data-transition_type="fade" data-play_type="loop" data-interval="3000"
            data-image_fx="zoomrotate" data-radio_type="thumbnail" id="my-slider">
            <ol>
                <li>
                    <img src="ism/image/slides/_u/1567748352402_955202.jpg">
                    <div class="ism-caption ism-caption-1" data-delay='200'>বরিশাল বিশ্ববিদ্যালয়</div>
                </li>
                <li>
                    <img src="ism/image/slides/_u/1567748355141_540141.jpg">
                    <div class="ism-caption ism-caption-1" data-delay='200'>বর্ষায় ক্যাম্পাস</div>
                </li>
                <li>
                    <img src="ism/image/slides/_u/1567748354670_766495.jpg">
                    <div class="ism-caption ism-caption-1" data-delay='200'>ক্যাম্পাস মুক্তমঞ্চ</div>
                </li>
                <li>
                    <img src="ism/image/slides/_u/1567748354311_570794.jpg">
                    <div class="ism-caption ism-caption-1" data-delay='200'>ক্যাম্পাস প্লে গ্রাউন্ড</div>
                </li>
                <li>
                    <img src="ism/image/slides/_u/1567748353894_968925.jpg">
                    <div class="ism-caption ism-caption-1" data-delay='200'>একাত্নতার দেয়াল</div>
                </li>
                <li>
                    <img src="ism/image/slides/_u/1567748354689_313519.jpg">
                    <div class="ism-caption ism-caption-1" data-delay='200'>শিক্ষক ডরমেনটরি</div>
                </li>
                <li>
                    <img src="ism/image/slides/_u/1567748352917_95222.jpg">
                    <div class="ism-caption ism-caption-1" data-delay='200'>লাল বাস</div>
                </li>
                <li>
                    <img src="ism/image/slides/_u/1567748353718_947784.jpg">
                    <div class="ism-caption ism-caption-1" data-delay='200'>উপাচার্যের কার্যালয়</div>
                </li>
                <li>
                    <img src="ism/image/slides/_u/1567748355130_59848.jpg">
                    <div class="ism-caption ism-caption-1" data-delay='200'>ক্যাম্পাস রোড</div>
                </li>
                <li>
                    <img src="ism/image/slides/_u/1567748356036_825732.jpg">
                    <div class="ism-caption ism-caption-1" data-delay='200'>নববর্ষ ১৪২৬</div>
                </li>
            </ol>
        </div>
    </div>
</center>


<div class="posts clear">
    @if(!is_null($stories))
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
                <div class="following" style="display:flex;
">
                    <p class="mr-5">Followers <span class="badge"> 300 </span>&nbsp;
                    </p>
                    <followbutton user-id="{{$story->user->id}}"></followbutton>
                </div>
            </div>

        </div>

        <div class="contents">
            <h2><a href="{{route('readmore',$story->id)}}"> {!! $story->title !!}</a><span
                    style="font-size: 16px;color:grey;">&nbsp;&nbsp;100 People Love this story</span></h2>
            <div class="para">
                <p class="paraa"> <a href="#"> <?php
$value = $story->story;
$value = Str::limit($value, $limit = 300, $end = '......');
echo $value;

?></a></p>
                <div class="read"><a class="active" href="{{route('newsfeed',$story->id)}}">Read More
                        <span class="glyphicon glyphicon-chevron-right"></span></a></div>
                <br>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="contents">
        <h2><a href="">Nothing to Show!!</a></h2>
    </div>
    @endif
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