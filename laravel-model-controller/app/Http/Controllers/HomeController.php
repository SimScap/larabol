<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // sql query in cui abbiamo chiesto, tutti i libbbri.
        // $books = Book::all();

        $books = Book::where('title', 'like', "A %")
        ->limit(18)
        ->orderBy('title', 'asc')
        ->get();

        $data = [
            "gina" => "Gina Paragone",
            "book" => new Book(),
            "books" => $books,
        ];


        // $newBook = new Book();
        // $newBook->book_id = 5126124;
        // $newBook->title = "A aqualcuno programmò uno studente boolean";
        // $newBook->save();

        return view('books.index', $data);
    }
}
