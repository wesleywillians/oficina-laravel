@extends('books')

@section('content')

	<h1>Edit: {{$book->title}}</h1>

    {!! Form::model($book, ['route'=>['books.update', $book->id]]) !!}

    	@include('book._form')

    	<input type="submit" class="btn btn-warning" value="Update book">

    {!! Form::close() !!}
@stop