<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<h1>Thêm bài viết</h1>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/post/store" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Tiêu đề"><br>
    @error('title')
        <small class="form-text text-danger">{{ $message }}</small><br>
    @enderror
    <textarea name="content"    placeholder="Nội dung"></textarea><br>
    <div class="mb-3">
        <label for="formFile" class="form-label">Hình ảnh đại diện</label>
        <input class="form-control" type="file" id="formFile" name="file">
</div>
    <input type="submit" value="Thêm bài viết">
</form>