<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Sửa môn học</title>
</head>

<body>
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Sửa môn học có mã môn : {{ $monHoc->MaMH }}</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('monhoc.editPost') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="mamh">Mã môn học: </label>
                        <input type="text" name="mamh" class="form-control" placeholder="Nhập mã môn học" value="{{ $monHoc->MaMH }}"
                            readonly arial-label="mamh" arial-descrybedby="mamh" id="mamh">
                    </div>
                    <div class="form-group">
                        <label for="tenmh">Tên môn học:</label>
                        <input type="text" name="tenmh" class="form-control" placeholder="Nhập tên môn học" value="{{ $monHoc->TenMH }}"
                            id="tenmh">
                    </div>
                    <div class="form-group">
                        <label for="sotiet">Số tiết:</label>
                        <input type="text" name="sotiet" class="form-control" placeholder="Nhập số tiết" value="{{ $monHoc->Sotiet }}"
                            id="sotiet">
                    </div>
                    <div class="card-footer">
                        <a href="/mon-hoc/back" class="btn btn-secondary">Trở lại</a>
                        <input type="submit" name="btnSave" id="" class="btn btn-primary" value="Ghi lại">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
