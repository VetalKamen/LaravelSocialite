@extends('base')
@section('content')
    <div>
        <h3>{{$book->title}}</h3>
        <hr>
        <p>{{$book->content}}</p>
        <hr>
        <p>{{$book->author->name}}</p>
    </div>
    <a href="{{route('admin.books')}}" class="btn btn-success">
        {{ __('Go to Admin Table') }}</a>
@endsection
