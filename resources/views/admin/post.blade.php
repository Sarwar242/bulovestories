@extends('admin/main')

@section('act')
notactive
@endsection
@section('act2')
active
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

@section('content')
<br><br><br>
<h1>Post Your Notice</h1>
<div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('admin.post.insert') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2 h1" for="title">Title</label>
            <input name="title" type="text" class="form-control col-sm-10" id="title" placeholder="Title here">
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-sm-2 h1" for="details">Details</label>
            <textarea name="details" class="form-control col-sm-10" id="details" rows="15"></textarea>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">
            <i class="glyphicon glyphicon-send"></i>
            &nbsp&nbsp&nbsp&nbsp&nbspPost</button>
    </form>
</div>
<div><br><br></div>
<br><br>

@endsection