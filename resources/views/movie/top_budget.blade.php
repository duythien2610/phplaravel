@extends('layouts.app')

@section('title', 'Top 10 Phim Doanh Thu Cao Nhất')

@section('content')
    <h2>Top 10 Phim Có Doanh Thu (Budget) Cao Nhất</h2>

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>#</th>
                <th>Tên Bộ Phim</th>
                <th>Ngày Phát Hành</th>
                <th>Doanh Thu (Budget)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $index => $movie)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $movie->movie_name }}</td>
                    <td>{{ $movie->release_date }}</td>
                    <td>{{ number_format($movie->budget) }} $</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
