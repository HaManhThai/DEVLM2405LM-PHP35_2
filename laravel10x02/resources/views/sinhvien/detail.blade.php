<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết thông tin sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Chi tiết thông tin sinh viên {{ $sinhvien->HoSV }} {{ $sinhvien->TenSV }} </h1>
            </div>
            <div class="card-body">
                <p>Mã sinh viên: {{ $sinhvien->MaSV }}</p>
                <p>Họ sinh viên: {{ $sinhvien->HoSV }}</p>
                <p>Tên sinh viên: {{ $sinhvien->TenSV }}</p>
                <p>Ngày sinh : {{ $sinhvien->NgaySinh }}</p>
            </div>
            <div class="card-footer">         
                    <a class="btn btn-secondary" href="{{route('sinhvien.back')}}">Trở lại</a>
            </div>
        </div>
    </div>
<body>

</body>

</html>
