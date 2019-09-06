@extends('master')
@section('title')
Edit Profile | Campus Life
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
notactive
@endsection
@section('act6')
notactive
@endsection
@section('act7')
notactive
@endsection


@section('content')
<br><br><br>
<div class="dashboard clear">
    <!-- Material form contact -->
    <div class="card">

        <h1 class="card-header info-color white-text text-center py-4">
            <strong>Edit Profile</strong>
        </h1>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
            <!-- Form -->
            <form action="{{ route('updateprofile',$user->id) }}" method="post" class="text-center" style="color: #757575;">
                @csrf
                <!-- Name -->
                <br>
                <div class="md-form mt-5">
                    <input name="name" type="text" id="materialContactFormName" class="form-control" value="{{$user->name}}">
                    <label for="materialContactFormName">Name</label>
                </div><br><br>

                <!-- E-mail -->
                <div class="md-form mt-5">
                    <input name="email" type="email" id="materialContactFormEmail" class="form-control" value="{{$user->email}}" disabled>
                    <label for="materialContactFormEmail">E-mail</label>
                </div><br><br>



                <!--Message-->
                <div class="md-form mt-10">
                    <input name="profession" type="text" id="materialContactFormMessage" class="form-control"  value="{{$user->profession}}">
                    <label for="materialContactFormMessage">Occupation</label>
                </div><br><br>

                <!-- Send button -->
                <button class="btn btn-lg btn-primary btn-block pt-3 mt-10" type="submit">
                    <i class="glyphicon glyphicon-scissors"></i>
                    &nbsp&nbsp&nbsp&nbsp&nbspUpdate</button>

            </form>
            <!-- Form -->

        </div>
    </div>
</div>
<!-- Material form contact -->


@endsection
