<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <h1>Danh sách bài viết</h1>
    <ul>
    @if(session('status'))

        <p style="color: green;">{{ session('status') }}</p>
    @endif  
    @foreach($posts as $p)
        <li>
            <a href=""> {{ $p->title }}</a>
            <!-- <img src ="{{ asset($p -> thumbnail) }}" alt="" width="100px"> -->
             <p>{{ $p->content }}</p>

        </li>
    @endforeach
    </ul>

    {{ $posts->appends(['sort' => 'created_at'])->links('pagination::bootstrap-4') }}

</body>
</html>