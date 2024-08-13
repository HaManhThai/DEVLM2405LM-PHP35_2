<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Chi tiết sản phẩm</h1>
            </div>
            <div class="card-body">
                <p>ID:  {{ $post->id }} </p>
                <p>Title:  {{ $post->title }} </p>
                <p>Body: {{ $post->body }}  </p> 
                <p>Image: <img src="{{ asset($post->image) }}" alt="" width="100" height="100">  </p>
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="{{ route('posts.back') }}">Trở lại</a>
            </div>
        </div>
    </div>
</body>
</html>
