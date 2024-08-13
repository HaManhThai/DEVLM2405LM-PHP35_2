<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Thêm mới</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('posts.createPOST') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="id"></label>
                        <input type="hidden" name="id" id="id" class='form-control'>
                    </div>
                    <div class="form-group">
                        <label for="title">Title: </label>
                        <input type="text" name="title" id="title" class='form-control'>
                    </div>
                    <div class="form-group">
                        <label for="body">Body: </label>
                        <textarea name="body" id="body" class='form-control'> </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image: </label>
                        <input name="image" class="form-control" type="file" id="image">
                    </div>

            </div>
            <div class="card-footer">
                <a href="{{ route('posts.back') }}" class="btn btn-secondary">Trở lại</a>
                <button class="btn btn-primary" type="submit">Ghi lại</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
