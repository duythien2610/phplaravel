<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Thể Loại Phim</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f5f5f5;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        thead {
            background-color: #4CAF50;
            color: white;
        }
        th, td {
            padding: 12px 16px;
            text-align: left;
            border: 1px solid #ddd;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .no-data {
            text-align: center;
            color: #999;
            font-style: italic;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Danh Sách Thể Loại Phim</h1>

    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên thể loại (Tiếng Anh)</th>
                <th>Tên thể loại (Tiếng Việt)</th>
            </tr>
        </thead>
        <tbody>
            @if(count($theLoai) > 0)
                @foreach($theLoai as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->genre_name }}</td>
                        <td>{{ $item->genre_name_vn }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3" class="no-data">Chưa có thể loại phim nào.</td>
                </tr>
            @endif
        </tbody>
    </table>
</body>
</html>
