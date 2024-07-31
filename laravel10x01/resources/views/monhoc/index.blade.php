<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Thông tin môn học</title>
</head>

<body>
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Danh sách môn học</h2>
                    @if (Session::has('monhoc_created'))
                        <div class="alert alert-success">
                            {{ Session::get('monhoc_created') }}
                        </div>
                    @endif

                    @if (Session::has('monhoc_edited'))
                        <div class="alert alert-success">
                            {{ Session::get('monhoc_edited') }}
                        </div>
                    @endif

                    @if (Session::has('monhoc_deleted'))
                        <div class="alert alert-danger">
                            {{ Session::get('monhoc_deleted') }}
                        </div>
                    @endif
            </div>
            <div class="card-body">
                <form action="{{ route('monhoc.search') }}" method="POST" class="row gx-3 gy-2 align-items-center">
                    @csrf
                    <div class="col-sm-3">
                        <label class="visually-hidden" for="specificSizeInputGroupUsername">Mã môn học</label>
                        <div class="input-group">
                            <div class="input-group-text">Tên môn học</div>
                            <input type="text" name="tenmh" class="form-control"
                                id="specificSizeInputGroupUsername" placeholder="Tên môn học">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                </form>
                <table class="table table-bodered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Mã môn </th>
                            <th class="text-center">Tên môn</th>
                            <th class="text-center">Số tiết</th>
                            <th class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 0;
                        @endphp
                        @foreach ($monHocs as $item)
                            @php
                                $stt++;
                            @endphp
                            <tr>
                                <td class="text-center">{{ $stt }}</td>
                                <td class="text-center">{{ $item->MaMH }}</td>
                                <td class="text-center">{{ $item->TenMH }}</td>
                                <td class="text-center">{{ $item->Sotiet }}</td>
                                <td class="text-center">
                                    <a href="/mon-hoc/detail/{{ $item->MaMH }}" class="btn btn-info">Chi tiết</a>
                                    <a href="/mon-hoc/edit/{{ $item->MaMH }}" class="btn btn-success">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="/mon-hoc/delete/{{ $item->MaMH }}" class="btn btn-danger"
                                        onclick="return confirm('Bạn có chắc chắn muốn xoá môn học {{ $item->TenMH }} không ?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <h3>Tổng số: {{ $monHocs->count() }}</h3>
                    <a href="/mon-hoc/create" class="btn btn-primary">Thêm mới</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
