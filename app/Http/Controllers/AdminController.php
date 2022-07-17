<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;



class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $book = Book::all();
        // dd($book);
        return view ('home', ['listbook'=> $book]);
    }

    public function addbook(Request $request){
        //  dd($request);
        $book = new Book;

        $book->judul = $request->judul;
        $book->penulis = $request->penulis;
        $book->tahun = $request->tahun;
        $book->penerbit = $request->penerbit;

        $book->save(); //insert data ke database
        return redirect()->back()->with('success','data berhasil dimasukan');


    }

    public function editbook(Request $request){
        //  dd($request);
        $book = Book::find($request->id);

        $book->judul = $request->judul;
        $book->penulis = $request->penulis;
        $book->tahun = $request->tahun;
        $book->penerbit = $request->penerbit;

        $book->save(); //insert data ke database
        return redirect()->back()->with('success','data berhasil diupdate');


    }
    public function deletebook($id){
        //  dd($id);
        $book = Book::find($id);
        $book->delete(); //hapus data
        return redirect()->back()->with('success','data berhasil dihapus');


    }

    public function detailbook($id){
        $book = Book::find($id);
        //  dd($book);

        return view('detail', ['book' => $book]);


    }
}
