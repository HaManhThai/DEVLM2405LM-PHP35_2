<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KHOA EDIT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Chỉnh sửa thông tin khoa có mã khoa <b>{{ $xemBanGhi->MaKH }}</b></h2>
            </div>
            <div class="card-body">
                <form action="{{ route('khoa.editSubmit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="makh">Mã khoa: </label>
                        <input type="text" name="makh" class="form-control" placeholder="Nhập mã khoa"
                            id="makh" readonly value="{{ $xemBanGhi->MaKH }}">
                    </div>
                    <div class="form-group">
                        <label for="tenkh">Tên khoa: </label>
                        <input type="text" name="tenkh" class="form-control" placeholder="Nhập tên khoa"
                            id="tenkh" value="{{ $xemBanGhi->TenKH }}">
                    </div>

            </div>
            <div class="card-footer">
                <span><a href="{{ route('khoa.back') }}" class="btn btn-secondary">Trở lại</a></span>
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                </form>
            </div>
        </div>

    </div>

</body>

</html>
