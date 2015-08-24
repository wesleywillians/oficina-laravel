@extends('books')

@section('content')
	<h1>Books</h1>

	<a href="{!! route('books.create') !!}" class="btn btn-primary pull-right">Novo livro</a>
	<table class="table">
		<thead>
			<tr>
				<th>Titulo</th>
				<th class="text-center">Ações</th>
			</tr>
		</thead>
		<tbody>
		    @foreach($books as $book)
				<tr>
					<td>{{$book->title}}</td>
					<td class="text-center">
						<a href="{!! route('books.delete', $book->id) !!}" class="btn btn-danger">Delete</a>
						<a href="{!! route('books.edit', $book->id) !!}" class="btn btn-warning">Atualizar</a>
					</td>
				</tr>
		    @endforeach
		</tbody>
	</table>

@stop