@extends('base')
@section('content')
    <div class="row">
        <div class="col-8">
            @forelse($books as $book)
                <div class="container flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">

                    <h4><strong>{{$book->title}}</strong></h4>

                    <h5>{{ Str::words($book->content,8) }}
                        <hr>
                        <a href="{{ route('book.show', ['book'=>$book->id]) }}">
                            Read more</a>
                    </h5>

                    <h5>Author: {{$book->author->name}}</h5>

                </div>
            @empty
                <p>{{ __('No books yet!') }}</p>
            @endforelse
        </div>
    </div>
@endsection

