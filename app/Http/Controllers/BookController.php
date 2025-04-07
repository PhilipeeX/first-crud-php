<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create() {
        $book = new Book();
        return view('books.create', ['book' => $book]);
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
      $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'rate' => 'required|numeric|min:0|max:10',
      ]);

      $book = Book::create($request->only(['title', 'description', 'rate']));

      return redirect()->route('books.show', $book->id)
        ->with('status', 'Livro criado com sucesso!');
    }

    public function show($id) {
      $book = Book::findOrFail($id);
      return view('books.show', ['book' => $book]);
    }

    public function update() {
        abort(501, 'Função não implementada');
    }

    public function delete() {
        abort(501, 'Função não implementada');
    }
}
