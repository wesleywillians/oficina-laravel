<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contracts\BookRepositoryInterface;

class BookController extends Controller
{
    protected $book;

    public function __construct(BookRepositoryInterface $book)
    {
        $this->book = $book;
    }

    public function index()
    {
        $books = $this->book->all();

        return view('book.books', ['books' => $books]);
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        $this->book->create($request);

        return redirect()->route('books.index');
    }

    public function edit($id)
    {
        $book = $this->book->find($id);

        return view('book.edit', ['book' => $book]);
    }

    public function update(Request $request, $id)
    {
        $this->book->update($request, $id);
        return redirect()->route('books.index');
    }

    public function delete($id)
    {
        $this->book->delete($id);

        return redirect()->route('books.index');

    }
}
