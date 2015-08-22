<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a new book</title>
</head>
<body>

<h1>Edit: {{$book->title}}</h1>

<form method="post" action="/books/update/{{$book->id}}">
    {!! Form::model($book, ['route'=>['book.update', $book->id]]) !!}

    @include('book._form')

    <input type="submit" value="Update book">

    {!! Form::close() !!}

</body>
</html>