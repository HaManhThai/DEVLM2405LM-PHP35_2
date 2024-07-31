<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KHOA Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Chi tiết thông tin sinh viên <b>{{$student->HoSV}} {{$student->TenSV}}</b></h2>
            </div>
            <div class="card-body">
                <p><b>Mã sinh viên : </b> {{$student->MaSV}}</p>
                <p><b>Họ sinh viên : </b> {{$student->HoSV}}</p>
                <p><b>Tên sinh viên : </b> {{$student->TenSV}}</p>
                <p><b>Ngày sinh : </b> {{$student->NgaySinh}}</p>
            </div>
            <div class="card-footer">
                <p><a href="{{route('sinhvien.back')}}" class="btn btn-secondary">Trở lại</a></p>
            </div>
        </div>
        
    </div>
</body>

</html>
