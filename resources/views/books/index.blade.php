@extends('base')
@section('content')
<div class="row">
    <div class="col-8">
        @forelse($books as $book)
            <div class="container">

                <h3>Book name: {{$book->title}}</h3>

                <h5>Book content: {{$book->content}}</h5>

                <h5>Author's name: {{$book->author->name}}</h5>

            </div>
        @empty
            <p>{{ __('No books yet!') }}</p>
        @endforelse
    </div>
</div>
@endsection

