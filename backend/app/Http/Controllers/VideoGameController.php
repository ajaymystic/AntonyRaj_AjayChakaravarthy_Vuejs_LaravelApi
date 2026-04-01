<?php

namespace App\Http\Controllers;

use App\Models\VideoGame;
use App\Http\Resources\VideoGameResource;
use Illuminate\Http\Request;

class VideoGameController extends Controller
{
    public function index(Request $request)
    {
        // Starting with a query builder so I can chain filters conditionally
        $query = VideoGame::with('genre');
        //Displaying all video games with optional filters for search.
        if ($request->has('search')) {
            $searchTerm = $request->input('search');

            //searching both title and description to give broader results
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                  ->orWhere('description', 'like', '%' . $searchTerm . '%');
            });
        }

        if ($request->has('genre_id')) {
            $query->where('genre_id', $request->input('genre_id'));
        }

        if ($request->has('platform')) {
            $query->where('platform', $request->input('platform'));
        }

        return VideoGameResource::collection($query->get());
    }

    public function store(Request $request)
    {
        $videoGame = VideoGame::create($request->all()); //storing newly created video game in DB.

         $videoGame->load('genre');
        return new VideoGameResource($videoGame);
    }

    public function show($id)
    {
        $videoGame = VideoGame::with('genre')->find($id); //Display a single video game by its ID.

        if (!$videoGame) {
            return response()->json(['message' => 'Video game not found'], 404);
        }

        return new VideoGameResource($videoGame);
    }

    public function update(Request $request, $id)
    {
        $videoGame = VideoGame::find($id);

        if (!$videoGame) {
            return response()->json(['message' => 'Video game not found'], 404);
        }

        $videoGame->update($request->all()); //updating an existing video game by its ID.

        return new VideoGameResource($videoGame);
    }

    public function destroy($id)
    {
        $videoGame = VideoGame::find($id);

        if (!$videoGame) {
            return response()->json(['message' => 'Video game not found'], 404);
        }

        $videoGame->delete();

        return response()->json(['message' => 'Video game deleted successfully']); //deleting a video game by its ID.
    }
}
