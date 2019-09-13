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



@section('content')
<br><br><br>
<div class="posts clear">
  <link rel="stylesheet" type="text/css" href="{{asset('css/adminhome.css')}}">

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
                    <p><a class="btn btn-primary" href="">Approve</a> &nbsp; <span>
                            <a class="btn btn-danger" href="#">Delete</a></span></p>
                </div>
            
            </div>

        </div>

        <div class="contents">
            <h2><a href=""> {!! $story->title !!}</a></h2>
            <div class="para">
                <p class="paraa"> <a href="#"> <?php 
                $value = $story->story;
                
                echo $value;

                 ?></a></p>
                
                <br>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection