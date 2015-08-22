<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a new book</title>
</head>
<body>

<h1>Edit: {{$book->title}}</h1>

<form method="post" action="/books/update/{{$book->id}}">
    {!! csrf_field() !!}

    {!! Form::label('title','Title')  !!}
    {!! Form::text('title', $book->title, ['class'=>'form-control']) !!}
    <br>
    {!! Form::label('description','Description')  !!}
    {!! Form::textarea('description', $book->description, ['class'=>'form-control']) !!}
    <br>

    <input type="submit" value="Update book">
</form>

</body>
</html>