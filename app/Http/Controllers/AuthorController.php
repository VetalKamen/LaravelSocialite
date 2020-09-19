<?php

namespace App\Http\Controllers;

use App\Author as Author;
use App\Http\Requests\StoreAutor;

class AuthorController extends Controller
{

    public function admin()
    {
        return view('authors.admin', ['authors' => Author::all(),]);
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('authors.index', ['authors' => Author::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAutor $request)
    {
        $validData = $request->validated();
        $author = Author::create($validData);

        return redirect()->route('author.show', ['author' => $author->id]);
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Author $author)
    {
        return view('authors.show', ['author' => $author,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Author $author)
    {
        return view('authors.edit', ['author' => $author,]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(StoreAutor $request, Author $author)
    {
        $validData = $request->validated();
        $author->fill($validData);
        $author->save();

        return redirect()->route('author.show', ['author' => $author->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('admin.authors');
    }
}
