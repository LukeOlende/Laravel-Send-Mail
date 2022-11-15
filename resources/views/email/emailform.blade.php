@extends('email.layout')

@section('title','Send Mail')

@section('content')

<div class="col-md-6 offset-3">
    <form method="POST" action="{{ route('send-mail') }}">
        @csrf

        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="your name">
        </div>

        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="email@example.com">
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="subject" placeholder="subject">
        </div>

        <button type="submit" class="btn btn-primary">Send</button>

    </form>

</div>

@endsection