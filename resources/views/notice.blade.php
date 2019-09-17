@extends('master')

@section('act')
notactive
@endsection
@section('act2')
notactive
@endsection
@section('act3')
active
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
<br><br>
<h1>All Notices Here</h1>
<div class="row clear">
    @foreach ($notices as $notice)
    <div class="stories">
        <div class="profilesection">
            <div class="image clear">
                <img class="imagemain" src="{{asset('images/cover.jpg')}}">
            </div>
            <div class="userpf clear">
                <div class="name">
                    <h2>Admin</h2>
                </div>
            </div>
        </div>

        <div class="contents">
            <h2><a href=""> {!! $notice->title !!}</a></h2>


            <div class="para">
                <p class="paraa"> <a href="#">
                        <?php
$value = $notice->details;
$value = Str::limit($value, $limit = 300, $end = '......');
echo $value;
?>
                    </a></p>
                <br>
            </div>
        </div>
    </div>
    @endforeach
</div>



@endsection