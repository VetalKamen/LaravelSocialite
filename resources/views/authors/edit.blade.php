@extends('base')
@section('content')
    <form method="POST" action="{{ route('author.update', ['author'=>$author]) }}"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('authors/__form')

        <button type="submit" class="brn btn-primary btn-block">{{ __('Update') }}</button>
    </form>

@endsection
