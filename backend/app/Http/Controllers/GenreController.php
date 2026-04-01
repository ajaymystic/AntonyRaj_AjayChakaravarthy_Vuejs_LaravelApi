<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Http\Resources\GenreResource;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        return GenreResource::collection($genres);  //displays all genres
    }

    public function store(Request $request)
    {
        $genre = Genre::create($request->all());

        return new GenreResource($genre);//store newly created genre in the db.
    }

    public function show($id)
    {
        $genre = Genre::find($id); //Display single genre by ID.

        //returning 404 manually if the genre doesn't exist
        if (!$genre) {
            return response()->json(['message' => 'Genre not found'], 404);
        }

        return new GenreResource($genre);
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json(['message' => 'Genre not found'], 404);
        }

        $genre->update($request->all()); //update an existing genre by ID.

        return new GenreResource($genre);
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json(['message' => 'Genre not found'], 404);
        }

        $genre->delete(); //delete a genre by ID.

        return response()->json(['message' => 'Genre deleted successfully']);
    }

}
