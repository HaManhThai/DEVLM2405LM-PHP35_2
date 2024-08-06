<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Chi tiết thông tin khoa  {{ $khoa->TenKH }}</h1>
            </div>
            <div class="card-body">
                <p>Mã khoa: {{ $khoa->MaKH }}</p>
                <p>Mã khoa: {{ $khoa->TenKH }}</p>
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="/khoa1/back">Trở lại</a>
            </div>
        </div>
    </div>
</body>
</html>