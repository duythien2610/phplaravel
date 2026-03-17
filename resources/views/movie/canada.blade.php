@extends('layouts.app')

@section('title', 'Phim Canada')

@section('content')
    <h1>Danh sách phim của Canada</h1>

    @if($movies->count() > 0)
        <table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr style="background-color: #f2f2f2;">
                    <th>STT</th>
                    <th>Tên phim (Movie Name)</th>
                    <th>Ngày phát hành (Release Date)</th>
                    <th>Thời lượng (Runtime - phút)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $index => $movie)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $movie->movie_name }}</td>
                        <td>{{ $movie->release_date }}</td>
                        <td>{{ $movie->runtime }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Không có phim nào của Canada.</p>
    @endif
@endsection
