<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THÊM SINH VIÊN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card">
            <h2 class="text-center">THÊM SINH VIÊN</h2>
        </div>
        <form action="{{ route('sinhvien.createPost') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="masv">Mã sinh viên: </label>
                <input type="text" name="masv" class="form-control" placeholder="Nhập mã sinh viên" id="masv">
            </div>
            <div class="form-group">
                <label for="hosv">Họ sinh viên:</label>
                <input type="text" name="hosv" class="form-control" placeholder="Nhập họ sinh viên" id="hosv">
            </div>
            <div class="form-group">
                <label for="tensv">Tên sinh viên:</label>
                <input type="text" name="tensv" class="form-control" placeholder="Nhập tên sinh viên" id="tensv">
            </div>
            <div class="form-group">
                <label for="ngaysinh">Ngày sinh:</label>
                <input type="text" name="ngaysinh" class="form-control" placeholder="Nhập ngày tháng năm sinh theo mẫu YY/MM/DD" id="ngaysinh">
            </div>
            <span><a href="{{route('khoa.back')}}" class="btn btn-secondary">Back</a></span>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>

</body>

</html>
