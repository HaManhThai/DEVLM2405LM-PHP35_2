<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Thông tin chi tiết môn học</title>
</head>

<body>
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Chi tiết thông tin môn : {{ $monHoc->TenMH }}</h1>
            </div>
            <div class="card-body">
                <p><b>Mã môn : </b> {{ $monHoc->MaMH }}</p>
                <p><b>Tên môn : </b> {{ $monHoc->TenMH }}</p>
                <p><b>Số tiết : </b> {{ $monHoc->Sotiet }}</p>
            </div>
            <div class="card-footer">
                <p><a href="/mon-hoc/back" class="btn btn-secondary">Trở lại</a></p>
            </div>
        </div>
    </div>
</body>

</html>
