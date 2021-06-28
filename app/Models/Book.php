<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
      'author', 'name', 'publishing', 'year', 'edition', 'price'
    ];

    public $timestamps = false;

    public static function getBooks($id) {
      return Book::where('id', $id)->first();
    }

    public static function allBooks() {
      return Book::all();
    }
}
