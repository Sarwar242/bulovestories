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
notactive
@endsection
@section('act6')
active
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


            <div style="display:flex">
                <form action="{{ route('admin.story.approve',$story->id) }}" method="post">
                    @csrf
                    <button class="btn btn-primary" type="submit">Approve</button>
                </form>&nbsp;
                <form action="#">

                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>

            <div class="para">
                <p class="paraa"> <a href="#"> <?php
$value = $story->story;

echo $value;

?></a></p>
                <div class="read"><a class="active" href="{{ route('review') }}"><span
                            class="glyphicon glyphicon-chevron-left"></span> Back To UnderReview Page</a></div>
                <br>
            </div>
        </div>
    </div>

</div>

@endsection