<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function topMovies()
    {
        $movies = DB::table('movie')
                    ->orderBy('vote_average', 'desc')
                    ->limit(10)
                    ->get(['movie_name', 'release_date', 'vote_average']);

        return view('phplaravel.top_movies', compact('movies'));
    }
}
