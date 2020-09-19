@extends('base')
@section('content')
    <form method="POST" action="{{ route('book.store', ['authors'=>$authors]) }}"
          enctype="multipart/form-data">
        @csrf

        @include('books/__form')

        <button type="submit" class="brn btn-primary btn-block">{{ __('Create') }}</button>
    </form>

@endsection
