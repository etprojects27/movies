<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class MoviesApiController extends Controller
{

    public function index()
    {

    $movies = Movie::with('artists')->visible()->ratingOverFive()->get();

    $jsonData = ['status' => 'SUCCESS', 'movies' => []];

    foreach ($movies as $movie){

        $jsonData ['movies'][] = [
            'id' => $movie->id,
            'status' => $movie->status,
            'name' => $movie->name,
            'rating' => $movie->rating,
            'description' => $movie->description,
            'image' => $movie->image,
            'artists' => $movie->artists    
        ];
    }

    return response()->json($jsonData);
    }

    public function delete($id)
    {
        $movie = Movie::find($id);

        if ($movie){
            return $movie->delete();
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($data) {
            $movie = Movie::create($data);

            if ($movie) {
               return [
                    'status' => 'SUCCESS',
                    'movie' => [
                        'id' => $movie->id,
                        'status' => $movie->status,
                        'name' => $movie->name,
                        'rating' => $movie->rating,
                        'description' => $movie->description,
                        'image' => $movie->image,
                        'created_at' => $movie->created_at,
                        'updated_at' => $movie->updated_at,
                        'deleted_at' => $movie->deleted_at
                    ]
                ];
            }

        }

    }
}