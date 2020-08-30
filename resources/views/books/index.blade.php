<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>uLaravel</title>
</head>
<body>


    <div class="row">
        <div class="col-8">
            @forelse($books as $book)
                <div class="container">

                    <h3>Book name: {{$book->title}}</h3>

                    <h5>Book content: {{$book->content}}</h5>

                    <h5>Author's name: {{$book->author->name}}</h5>

                </div>
            @empty
                <p>{{__('No books yet!')}}</p>
            @endforelse
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
