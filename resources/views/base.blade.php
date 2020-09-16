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
<div class="container">
@yield('content')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
