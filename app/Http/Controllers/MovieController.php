<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function canada()
    {
        $movies = DB::table('movie')
            ->where('country_name', 'Canada')
            ->select('movie_name', 'release_date', 'runtime')
            ->get();

        return view('movie.canada', compact('movies'));
    }
}
