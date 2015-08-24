<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Entities\Book;
use App\Contracts\BookRepositoryInterface;

class BookRepository implements BookRepositoryInterface
{
	protected $book;

	function __construct(Book $book)
	{
		$this->book = $book;
	}

	public function all()
	{
		return $this->book->all();;
	}

	public function create(Request $request)
	{
		return $this->book->create($request->all());
	}

	public function update(Request $request, $id)
	{
		return $this->book->find($id)->update($request->all());
	}

	public function delete($id)
	{
		return $this->book->find($id)->delete();
	}

	public function find($id)
	{
		return $this->book->find($id);
	}
}