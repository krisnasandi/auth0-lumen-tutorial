<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return Author::all();
    }

    public function show($id)
    {
        return Author::findOrFail($id);
    }

    public function create(Request $request)
    {
        $author = Author::create($request->all());

        return response()->json($author, 201);
    }

    public function update(Request $request, $id)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        $author = Author::findOrFail($id)->delete();

        return response()->json('Deleted succsessfully', 200);
    }
}