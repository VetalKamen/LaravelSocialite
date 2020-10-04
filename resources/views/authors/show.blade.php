@extends('base')
@section('content')
    <div>
        <h3>{{$author->name}}</h3>
        <hr>
        <p>{{$author->surname}}</p>
        <hr>
    </div>
    <a href="{{route('admin.authors')}}" class="btn btn-success">
        {{ __('Go to Admin Table') }}</a>
@endsection
