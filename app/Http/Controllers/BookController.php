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
        return view('books', ['books' => $books]);
    }
}
