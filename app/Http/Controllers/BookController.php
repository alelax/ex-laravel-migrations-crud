<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;

class BookController extends Controller
{
    
    public function showBooks()
    {
        $my_books = Book::all();
        return view('home.index', ['books_list'=>$my_books, 'is_home'=>true]);
    }

    public function showDetails(Request $request)
    {
        $book = Book::find($request->id_book);
        return view('details_page.index', ['book_details'=>$book, 'is_home'=>false]);
    }

    public function add(Request $request)
    {

        $new_book = new Book();

        $new_book->titolo = $request->title;
        $new_book->numero_pagine = $request->page_number;
        $new_book->autore = $request->author;
        $new_book->trama = $request->trama;
        $new_book->copertina = $request->image;
        $new_book->save();
        
        $request->session()->flash('status', 'Elemento aggiunto correttamente');

        return redirect()->route('homepage'); 
    }

    public function remove(Request $request)
    {

       $book_to_deleting = Book::find($request->id_book);

       $book_to_deleting -> delete();
       
        return redirect()->route('homepage'); 

    }

    public function editInfo(Request $request)
    {
        $book_to_updating = Book::find($request->book_id);

        $book_to_updating->titolo = $request->title_edited;
        $book_to_updating->numero_pagine = $request->page_edited;
        $book_to_updating->autore = $request->author_edited;
        
        $book_to_updating->save();
        
        return redirect()->route('homepage'); 
    }
}
