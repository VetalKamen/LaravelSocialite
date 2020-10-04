@extends('base')
@section('content')
    <div class="row">
        <div class="col-8">
            @forelse($authors as $author)
                <div class="container">

                    <h3>author name: {{$author->name}}</h3>

                    <h5>author surname: {{$author->surname}}</h5>

                </div>
            @empty
                <p>{{ __('No authors yet!') }}</p>
            @endforelse
        </div>
    </div>
@endsection

