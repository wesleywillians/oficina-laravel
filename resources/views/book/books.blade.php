<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>books</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Books</h1>
            <a href="/books/create" class="btn btn-primary">Create new book</a>
            <table class="table">
                <thead>                    
                    <tr>
                        <th>Título</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>        
                        <td><a href="/books/edit/{{$book->id}}">{{$book->title}}</a></td>
                        <td><a href="/books/delete/{{$book->id}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>