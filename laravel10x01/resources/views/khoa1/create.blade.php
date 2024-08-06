<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Thêm mới khoa</h1>
            </div>
            <div class="card-body">
                <form action="{{route('khoa.createKhoaPOST')}}" method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="makh" class="form-label">Mã khoa :</label>
                        <input type="text" class="form-control" id="makh" placeholder="Nhập mã khoa"
                            name="makh">
                    </div>
                    <div class="mb-3">
                        <label for="tenkh" class="form-label">Tên khoa :</label>
                        <input type="text" class="form-control" id="tenkh" placeholder="Nhập tên khoa "
                            name="tenkh">
                    </div>
                    
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="/khoa1/back">Trở lại</a>
                <button type="submit" class="btn btn-primary">Ghi lại</button>
            </form>
            </div>
        </div>
    </div>
</body>

</html>
