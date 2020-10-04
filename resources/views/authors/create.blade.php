@extends('base')
@section('content')
    <form method="POST" action="{{ route('author.store') }}"
          enctype="multipart/form-data">
        @csrf

        @include('authors/__form')

        <button type="submit" class="brn btn-primary btn-block">{{ __('Create') }}</button>
    </form>

@endsection
