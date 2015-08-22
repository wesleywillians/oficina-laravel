<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index()
    {
        //$book = new \App\Book();
        $books = \App\Book::all();

        return view('book.books', ['books' => $books]);
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $book = new \App\Book;
        $book->create($data);

        return redirect('books');
    }

    public function edit($id)
    {
        $book = new \App\Book;
        $book = $book->find($id);

        return view('book.edit', ['book' => $book]);
    }

    public function update(Request $request, $id)
    {
        $book = new \App\Book;
        $book = $book->find($id)->update($request->all());
        return redirect()->route('book.index');
    }

    public function delete($id)
    {
        $book = new \App\Book;
        $book->find($id)->delete();

        return redirect('books');

    }
}
