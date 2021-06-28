<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function all() {
      return view('market', ['books' => Book::allBooks()]);
    }

    public function getOne($id) {
      $book = Book::getBooks($id);
      if (!$book) {
        return abort(404);
      }
      return view('book', ['book' => $book]);
    }
}
