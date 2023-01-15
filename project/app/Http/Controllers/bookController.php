<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;

class bookController extends Controller
{

    public function index()
    {
        $post = books::latest()->get();

        return view('books.index',compact('post'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'genrce'=>'required',
            'price'=>'required'
        ]);

        books::create($request->all());

        return redirect()->route('books.index')
                        ->with('success','book created successfully.');
    }

    public function show(books $books)
    {
        return view('books.show',compact('books'));
    }
    public function edit(books $books)
    {
        return view('books.edit',compact('books'));
    }

    public function update(Request $request, books $books)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'genrce'=>'required',
            'price'=>'required'
        ]);

        $books->update($request->all());

        return redirect()->route('books.index')
                        ->with('success','book updated successfully');
    }
    public function destroy(books $books)
    {
        $books->delete();

        return redirect()->route('books.index')
                        ->with('success','book deleted successfully');
    }
    // public function index()
    // {
    //     $books = book::latest()->paginate(5);

    //     return view('books.index',compact('books'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);
    // }
    // public function create()
    // {
    //     return view('books.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'author' => 'required',
    //         'genrce' => 'required',
    //         'price' => 'required',
    //     ]);

    //     book::create($request->all());

    //     return redirect()->route('books.index')
    //                     ->with('success','book created successfully.');
    // }
    // public function show(book $book)
    // {
    //     return view('books.show',compact('book'));
    // }
    // public function edit(book $book)
    // {
    //     return view('books.edit',compact('book'));
    // }

    // public function update(Request $request, book $book)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'author' => 'required',
    //         'genrce' => 'required',
    //         'price' => 'required',
    //     ]);

    //     $book->update($request->all());

    //     return redirect()->route('books.index')
    //                     ->with('success','book updated successfully');
    // }

    // public function destroy(book $book)
    // {
    //     $book->delete();

    //     return redirect()->route('books.index')
    //                     ->with('success','book deleted successfully');
    // }
}




