<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chỉnh sửa thông tin sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<div class="container my-3">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Chỉnh sửa thông tin sinh viên </h1>
        </div>
        <div class="card-body">
            <form action="{{ route('sinhvien.editPOST') }}" method="POST">
                @csrf
                <div class="form-group my-3">
                    <label for="makh">Mã khoa</label>
                    <select class="custom-select" name="" id="makh">
                        <option value="">Chọn khoa</option>
                        <option value="">AV</option>
                        <option value="">DT</option>
                        <option value="">KT</option>
                        <option value="">TH</option>
                        <option value="">TR</option>
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="masv">Mã sinh viên</label>
                    <input class="form-control" type="text" name="masv" id="masv"
                        placeholder="Nhập mã sinh viên" value="{{ $sinhvien->MaSV }}" readonly>
                </div>
                <div class="form-group my-3">
                    <label for="hosv">Họ sinh viên</label>
                    <input class="form-control" type="text" name="hosv" id="hosv"
                        placeholder="Nhập họ sinh viên" value="{{ $sinhvien->HoSV }}">
                </div>
                <div class="form-group my-3">
                    <label for="tensv">Tên sinh viên</label>
                    <input class="form-control" type="text" name="tensv" id="tensv"
                        placeholder="Nhập tên sinh viên" value="{{ $sinhvien->TenSV }}">
                </div>
                <div class="form-group my-3">
                    <label for="ngaysinh">Ngày sinh</label>
                    <input class="form-control" type="text" name="ngaysinh" id="ngaysinh"
                        placeholder="Nhập ngày sinh theo mẫu YY/MM/DD" value="{{ $sinhvien->NgaySinh }}">
                </div>

        </div>
        <div class="card-footer">
            <a class="btn btn-secondary" href="{{ route('sinhvien.back') }}">Trở lại</a>
            <button type="submit" name="btn-Save" class="btn btn-primary">Ghi lại</button>
            </form>
        </div>
    </div>
</div>

<body>

</body>

</html>
