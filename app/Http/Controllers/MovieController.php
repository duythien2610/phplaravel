<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function actionMovies()
    {
        $movies = [
            [
                'movie_name' => 'John Wick: Chapter 4',
                'release_date' => '2023-03-24',
                'overview' => 'Sát thủ John Wick tìm cách đánh bại High Table.',
                'image_link' => 'https://images.unsplash.com/photo-1594909122845-11baa439b7bf?w=200',
            ],
            [
                'movie_name' => 'The Dark Knight',
                'release_date' => '2008-07-18',
                'overview' => 'Batman đối đầu với Joker tại thành phố Gotham.',
                'image_link' => 'https://images.unsplash.com/photo-1478720568477-152d9b164e26?w=200',
            ]
        ];

        return view('movies.action', compact('movies'));
    }
}
