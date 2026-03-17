<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Phim Đánh Giá Cao</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f4; }
        .movie-table { width: 100%; max-width: 1000px; margin: 0 auto; border-collapse: collapse; background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .movie-table th, .movie-table td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        .movie-table th { background-color: #f8f9fa; color: #333; }
        .movie-img { max-width: 100px; border-radius: 5px; object-fit: cover; }
        .movie-table td.overview { max-width: 400px; line-height: 1.5; color: #555; }
        h1 { text-align: center; color: #333; }
    </style>
</head>
<body>
    <h1>Phim Có Điểm Bình Chọn > 8.0 & Lượt Bình Chọn > 10000</h1>
    <table class="movie-table">
        <thead>
            <tr>
                <th>Ảnh Đại Diện</th>
                <th>Tên Bộ Phim</th>
                <th>Ngày Phát Hành</th>
                <th>Mô Tả</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
                <tr>
                    <td><img src="{{ $movie->image_link }}" alt="{{ $movie->movie_name }}" class="movie-img"></td>
                    <td><strong>{{ $movie->movie_name }}</strong></td>
                    <td>{{ date('d-m-Y', strtotime($movie->release_date)) }}</td>
                    <td class="overview">{{ $movie->overview }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
