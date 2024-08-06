<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<div class="container my-3">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Danh sách sinh viên</h1>
        </div>
        <div class="card-body">
            @if (Session::has('sv_created'))
                <div class="alert alert-success">
                    {{ Session::get('sv_created') }}
                </div>
            @endif

            @if (Session::has('sv_edited'))
                <div class="alert alert-success">
                    {{ Session::get('sv_edited') }}
                </div>
            @endif

            @if (Session::has('sv_deleted'))
                <div class="alert alert-success">
                    {{ Session::get('sv_deleted') }}
                </div>
            @endif
            <div class="container my-3">
                <form class="form-inline" action="{{ route('sinhvien.search') }}" method="POST">
                    @csrf
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-text">Tên sinh viên</div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2"
                            placeholder="Nhập tên sinh viên" name="kitutensv" value="{{ $kitu }}">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                </form>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Mã sinh viên</th>
                        <th class="text-center">Họ sinh viên</th>
                        <th class="text-center">Tên sinh viên</th>
                        <th class="text-center">Ngày sinh</th>
                        <th class="text-center">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt = 0;
                    @endphp
                    @foreach ($sinhviens as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td class="text-center">{{ $stt }}</td>
                            <td class="text-center">{{ $item->MaSV }}</td>
                            <td class="text-center">{{ $item->HoSV }}</td>
                            <td class="text-center">{{ $item->TenSV }}</td>
                            <td class="text-center">{{ $item->NgaySinh }}</td>
                            <td class="text-center">
                                <a class="btn btn-info" href="{{ route('sinhvien.detail', $item->MaSV) }}"><i
                                        class="fa-solid fa-circle-info"></i></a>
                                <a class="btn btn-success" href="{{ route('sinhvien.editGET', $item->MaSV) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a class="btn btn-danger" href="{{ route('sinhvien.delete', $item->MaSV) }}"
                                    onclick="return confirm('Bạn có muốn xoá sinh viên {{ $item->HoSV }} {{ $item->TenSV }} không ?')"><i
                                        class="fa-solid fa-trash"></i></a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-between">
                <h3>Tổng số sinh viên: {{ $sinhviens->count() }}</h3>
                <a class="btn btn-primary" href="{{ route('sinhvien.createGET') }}"><i
                        class="fa-solid fa-user-plus"></i></a>
            </div>
        </div>
    </div>
</div>

<body>

</body>

</html>
