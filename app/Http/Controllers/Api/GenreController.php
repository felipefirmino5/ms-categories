<?php

namespace App\Http\Controllers\Api;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenreController extends Controller
{

    public function index()
    {
        return Genre::all();
    }

    private $rules = ['name' => 'required|max:255', 'is_active' => 'boolean'];

    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        return Genre::create($request->all());;
    }


    public function show(Genre $genre)
    {
        return $genre;
    }



    public function update(Request $request, Genre $genre)
    {
        $this->validate($request, $this->rules);
        $genre->update($request->all());
        return $genre;
    }


    public function destroy(Genre $genre)
    {
        $genre->delete();
        return  response()->noContent();
    }
}
