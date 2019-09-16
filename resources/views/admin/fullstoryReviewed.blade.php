@extends('admin/main')

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

@section('content')
<br><br><br><br>


<link rel="stylesheet" type="text/css" href="{{asset('css/like.css')}}">

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
            </div>

        </div>

        <div class="contents">

            <h2><a href="">Title : {!! $story->title !!}</a>&nbsp;</h2>
            <div class="para">
                <p class="paraa"> <a href="#"> <?php
$value = $story->story;

echo $value;

?></a></p>
                <div class="read"><a class="active" href="{{ route('reviewed') }}"><span
                            class="glyphicon glyphicon-chevron-left"></span> Back To Reviewed Page</a></div>
                <br>
            </div>
        </div>
    </div>

</div>

@endsection
