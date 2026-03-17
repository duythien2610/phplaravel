<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * 7.3 - Hiển thị 10 bộ phim có doanh thu (budget) cao nhất
     */
    public function topBudget()
    {
        $movies = Movie::orderBy('budget', 'desc')
                        ->take(10)
                        ->get();

        return view('movie.top_budget', compact('movies'));
    }

    /**
     * 7.4 - Hiển thị 10 bộ phim có thời lượng (runtime) lớn hơn 120 phút
     */
    public function longRuntime()
    {
        $movies = Movie::where('runtime', '>', 120)
                        ->orderBy('runtime', 'desc')
                        ->take(10)
                        ->get();

        return view('movie.long_runtime', compact('movies'));
    }
}
