<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::Where('id',$id)->first();
        return view('show', compact('book'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->name = $request->input('name');
        $book->author = $request->input('author');
        $book->description = $request->input('description');
        $book->count = $request->input('count');
        $book->public = $request->input('public');
        $book->save();

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $book = Book::Where('id',$id)->first();
        return view('edit', compact('book'));
    }

    public function update(Request $request,$id)
    {
        $book = Book::Where('id',$id)->first();
        $book->name = $request->input('name');
        $book->author = $request->input('author');
        $book->description = $request->input('description');
        $book->count = $request->input('count');
        $book->public = $request->input('public');
        $book->save();

        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $book = Book::Where('id',$id)->first();
        $book->delete();
        return redirect()->route('index');
    }

}
