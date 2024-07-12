<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['isbn','title','price','publisher','published'];

    public static $rules = [
      'isbn' => 'required',
      'title' => 'required|string|max:10',
      'price' => 'integer|min:0',
      'publisher' => 'required',
      'published' => 'required|date'
    ];

    use HasFactory;
}
