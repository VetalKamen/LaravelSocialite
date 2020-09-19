@extends('base')
@section('content')
    <form method="POST" action="{{ route('book.update', ['book'=>$book, 'authors'=>$authors]) }}"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('books/__form')

        <button type="submit" class="brn btn-primary btn-block">{{ __('Update') }}</button>
    </form>

@endsection
