<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách tin tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1 class='text-center'>Danh sách tin tức</h1>
            </div>
            <div class="card-body">
                <table class='table table-bordered'>
                    <thead class="thead-dark">
                        <th class="text-center">#</th>       
                        <th class="text-center">ID</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Body</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Action</th>
                                        
                    </thead>
                    <tbody>
                        @php
                            $stt = 0;
                        @endphp
                        @foreach ($posts as $item)
                            @php
                                $stt++;
                            @endphp
                            <tr>
                                <td class="text-center">{{ $stt }}</td>
                                <td class="text-center">{{ $item->id }}</td>                  
                                <td class="text-center">{{ $item->title }}</td>
                                <td class="text-center">{{ $item->body }}</td>
                                <td class="text-center"><img src="{{ asset($item->image) }}" alt="image" class="img-fluid img-rounded" width="100" height="100"></td>
                                <td class="text-center">
                                    <a href="{{ route('posts.detail',$item->id) }}" class="btn btn-info">Chi tiết</a>
                                    <a href="{{ route('posts.editGET',$item->id) }}" class="btn btn-success">Chỉnh sửa</a>
                                    <a href="{{ route('posts.delete',$item->id) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xoá sản phẩm có mã {{ $item->id }} không?')">
                                        Xoá
                                    </a>
                                </td>
                               
                                

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <h3>Tổng số: {{ $posts->count() }}</h3>
                    <a href="{{ route('posts.createGET') }}" class="btn btn-primary">Thêm mới</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
