<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a new book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4">
<h1>Edit: {{$book->title}}</h1>

<form method="post" action="/books/update/{{$book->id}}">
    {!! Form::model($book, ['route'=>['book.update', $book->id]]) !!}

    @include('book._form')

    <input type="submit" value="Update book" class="btn btn-primary">

    {!! Form::close() !!}
        </div>
    </div>
</div>
</body>
</html>