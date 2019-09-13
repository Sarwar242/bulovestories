<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Document</title>
</head>

<body>

<br><br><br><br>







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
            <h2><a href="">Title : {!! $story->title !!}</a><span>&nbsp;&nbsp;

                    <button class=" btnt btn-primary glyphicon glyphicon-heart-empty"></button></span></h2>
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
</body>
</html>