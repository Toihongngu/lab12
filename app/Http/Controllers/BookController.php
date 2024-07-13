<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $highestPricedBooks = DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->orderBy('books.price', 'desc')
            ->select('books.*', 'categories.name as category_name')
            ->take(8)
            ->get();
        $lowestPricedBooks = DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->orderBy('books.price', 'asc')
            ->select('books.*', 'categories.name as category_name')
            ->take(8)
            ->get();

        $cate = DB::table('categories')
            ->get();
        return view('home', ['highestPricedBooks' => $highestPricedBooks, 'lowestPricedBooks' => $lowestPricedBooks, 'cate' => $cate]);
    }
    public function findbycate($id)
    {
        $books = DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.*', 'categories.name as category_name')
            ->where('category_id', $id)
            ->get();
        $cate = DB::table('categories')
            ->get();
        return view('findbycate', ['books' => $books, 'cate' => $cate]);
    }
    public function show($id)
    {
        $books = DB::table('books')
        ->join('categories', 'books.category_id', '=', 'categories.id')
        ->select('books.*', 'categories.name as category_name')
        ->where('books.id', $id)
        ->first();


        return view('show', ['books' => $books]);
    }
}
