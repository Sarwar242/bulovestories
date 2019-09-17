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


<link rel="stylesheet" type="text/css" href="{{asset('css/like.css')}}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
            <div style="display:flex">
                <h2><a href="">Title : {!! $story->title !!}</a>
                    <span style="font-size: 16px;color:grey;">&nbsp;&nbsp;{!! $story->loves !!} People Love this
                        story</span>&nbsp&nbsp
                </h2>
                <form action="{{route('story.love',$story->id)}}" method="post">
                    @csrf

                    @if($lc===1)
                    <button class="xlovebtn" type="submit">
                        <i class="glyphicon glyphicon-heart"></i>
                    </button>
                    @else
                    <button class="lovebtn" type="submit">
                        <i class="glyphicon glyphicon-heart"></i>
                    </button>
                    @endif
                <form>
            </div>
            <div class="para">
                <p class="paraa"> <a href="#"> <?php
$value = $story->story;

echo $value;

?></a></p>
                <div class="read"><a class="active" href="{{ route('index') }}"><span
                            class="glyphicon glyphicon-chevron-left"></span> Back To Newsfeed</a></div>
                <br>
            </div>
        </div>
    </div>

</div>

<div class="sidebar clear">

    <div class="sidebar1">
        <div class="sidebartitle">
            <h2><a href="">Quick Links</a></h2>
        </div>
        <div class="storyname">
            <h3><a href="{{route('sharestory')}}">Share your story</a> &nbsp; <span
                    class="glyphicon glyphicon-pencil"></span></h3>

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

<script type="text/javascript">
$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function() {
        var id = $(this).parents(".contents").data('id');
        var c = $('#' + this.id + '-bs3').html();
        var cObjId = this.id;
        var cObj = $(this);

        $.ajax({
            type: 'POST',
            url: '/ajaxRequest',
            data: {
                id: id
            },
            success: function(data) {
                if (jQuery.isEmptyObject(data.success.attached)) {
                    $('#' + cObjId + '-bs3').html(parseInt(c) - 1);
                    $(cObj).removeClass("like-story");
                } else {
                    $('#' + cObjId + '-bs3').html(parseInt(c) + 1);
                    $(cObj).addClass("like-story");
                }
            }
        });

    });

    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
});
</script>

@endsection