@extends('books')

@section('content')

	<h1>Create a new book</h1>

    {!! Form::open(['route' => 'books.store']) !!}

    	@include('book._form')

    	<input type="submit" class="btn btn-primary" value="Create book">
	{!! Form::close() !!}
@stop