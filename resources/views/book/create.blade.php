<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a new book</title>
</head>
<body>

<h1>Create a new book</h1>

<form method="post" action="/books/store">
    {!! csrf_field() !!}

    {!! Form::label('title','Title')  !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    <br>
    {!! Form::label('description','Description')  !!}
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
    <br>

    <input type="submit" value="Create book">
</form>

</body>
</html>