<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    const PATH_VIEW = 'admin.books.';
    const PATH_UPLOAD = 'books';
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
        return view(self::PATH_VIEW . __FUNCTION__, ['highestPricedBooks' => $highestPricedBooks, 'lowestPricedBooks' => $lowestPricedBooks, 'cate' => $cate]);
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
        return view(self::PATH_VIEW . __FUNCTION__, ['books' => $books, 'cate' => $cate]);
    }
    public function show($id)
    {
        $books = DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.*', 'categories.name as category_name')
            ->where('books.id', $id)
            ->first();


        return view(self::PATH_VIEW . __FUNCTION__, ['books' => $books]);
    }
    public function create()
    {
        $cate = DB::table('categories')
            ->get();
        return view(self::PATH_VIEW . __FUNCTION__, ['cate' => $cate]);
    }
    public function store(Request $request)
    {
        $data = $request->except('thumbnail');
        $data = [
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'publisher' => $request->input('publisher'),
            'publication' => $request->input('publication'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'category_id' => $request->input('category_id'),
        ];
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = Storage::put(self::PATH_UPLOAD, $request->file('thumbnail'));
        }

        DB::table('books')->insert($data);
        return redirect()->route('admin.books.index');
    }
    public function edit($id)
    {
        $books = DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.*', 'categories.name as category_name')
            ->where('books.id', $id)
            ->first();

        $cate = DB::table('categories')
            ->get();
        return view(self::PATH_VIEW . __FUNCTION__, ['books' => $books, 'cate' => $cate]);
    }
    public function update(Request $request, $id)
    {
        $model = DB::table('books')->where('id', $id)->first();

        if (!$model) {
            abort(404);
        }

        $data = $request->except('thumbnail');
        $data = [
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'publisher' => $request->input('publisher'),
            'publication' => $request->input('publication'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'category_id' => $request->input('category_id'),
        ];
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = Storage::put(self::PATH_UPLOAD, $request->file('thumbnail'));
        }

        $currentThumbnail = $model->thumbnail;

        DB::table('books')->where('id', $id)->update($data);

        if ($request->hasFile('thumbnail') && $currentThumbnail && Storage::exists($currentThumbnail)) {
            Storage::delete($currentThumbnail);
        }

        return redirect()->route('admin.books.show', $id);
    }
    public function destroy($id)
    {
        $book = DB::table('books')->where('id', $id)->first();

        if (!$book) {
            abort(404);
        }

        if ($book->thumbnail && Storage::exists($book->thumbnail)) {
            Storage::delete($book->thumbnail);
        }
        DB::table('books')->where('id', $id)->delete();

        return redirect()->route('admin.books.index')->with('success', 'Sách đã được xóa thành công.');
    }
}
