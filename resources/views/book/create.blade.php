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
    Title: <input type="text" name="title"><br>
    Description: <textarea name="description"></textarea><br>
    <input type="submit" value="Create book">
</form>

</body>
</html>