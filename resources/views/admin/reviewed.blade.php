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
<div class="clearfix"></div>
<h1>Under Review Stories</h1>
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
            </div>

        </div>

        <div class="contents">
            <h2><a href="{{route('readmore',$story->id)}}"> {!! $story->title !!}</a></h2>
            <div class="para">
                <p class="paraa"> <a href="#"> <?php
$value = $story->story;
$value = Str::limit($value, $limit = 300, $end = '......');
echo $value;

?></a></p>
                <div class="read"><a class="active" href="{{route('admin.fullstoryreviewed',$story->id)}}">Read More
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
@endsection