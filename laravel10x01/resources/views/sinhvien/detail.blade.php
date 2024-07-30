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
            <h2 class="text-center">Student Detail</h2>
        </div>
        <div class="card">
            <span><b>Mã sinh viên : </b> {{$student->MaSV}}</span>
            <span><b>Họ sinh viên : </b> {{$student->HoSV}}</span>
            <span><b>Tên sinh viên : </b> {{$student->TenSV}}</span>
            <span><b>Ngày sinh : </b> {{$student->NgaySinh}}</span>
            <span><a href="{{route('sinhvien.back')}}" class="btn btn-secondary">Back</a></span>
        </div>
    </div>
</body>

</html>
