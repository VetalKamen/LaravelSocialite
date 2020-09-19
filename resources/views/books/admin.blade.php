@extends('base')
@section('content')
    <div class="row">
        <div class="col-8">
            <div>
                <a href="{{route('book.create')}}" class="btn btn-warning">
                    {{__('Create')}}</a>
            </div>
            <table class="table table-stripped">
                <thead>
                <tr>
                    <th>Book</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>
                            <div class="d-flex">
                                <div class="form-group row">
                                    <div class="col-5 offset-3">
                                        <a href="{{ route('book.edit', ['book' => $book->id]) }}" class="btn btn-success">
                                            {{ __('Edit') }}</a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-5 offset-3">
                                        <form method="POST" class="fm-inline"
                                              action="{{ route('book.destroy', ['book' => $book->id]) }}">
                                            @csrf
                                            @method('DELETE')

                                            <input type="submit" value="{{ __('Delete') }}" class="btn btn-dark"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
