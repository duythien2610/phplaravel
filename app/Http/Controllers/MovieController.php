<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * topMovies - Hiển thị 10 phim có vote_average cao nhất (branch tri)
     */
    public function topMovies()
    {
        $movies = DB::table('movie')
                    ->orderBy('vote_average', 'desc')
                    ->limit(10)
                    ->get(['movie_name', 'release_date', 'vote_average']);

        return view('phplaravel.top_movies', compact('movies'));
    }

    /**
     * 7.3 - Hiển thị 10 bộ phim có doanh thu (budget) cao nhất (branch thien)
     */
    public function topBudget()
    {
        $movies = Movie::orderBy('budget', 'desc')
                        ->take(10)
                        ->get();

        return view('movie.top_budget', compact('movies'));
    }

    /**
     * 7.4 - Hiển thị 10 bộ phim có thời lượng (runtime) lớn hơn 120 phút (branch thien)
     */
    public function longRuntime()
    {
        $movies = Movie::where('runtime', '>', 120)
                        ->orderBy('runtime', 'desc')
                        ->take(10)
                        ->get();

        return view('movie.long_runtime', compact('movies'));
    }

    /**
     * canada - Hiển thị phim của Canada (branch sang)
     */
    public function canada()
    {
        $movies = DB::table('movie')
            ->where('country_name', 'Canada')
            ->select('movie_name', 'release_date', 'runtime')
            ->get();

        return view('movie.canada', compact('movies'));
    }
}
