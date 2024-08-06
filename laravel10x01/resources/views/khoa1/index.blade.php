<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Danh sách thông tin khoa</h1>
            </div>
            <div class="card-body">
                @if (Session::has('khoa_created'))
                    <div class="alert alert-success">
                        {{ Session::get('khoa_created') }}
                    </div>
                @endif
                @if (Session::has('khoa_edited'))
                    <div class="alert alert-success">
                        {{ Session::get('khoa_edited') }}
                    </div>
                @endif
                @if (Session::has('khoa_deleted'))
                    <div class="alert alert-success">
                        {{ Session::get('khoa_deleted') }}
                    </div>
                @endif
                {{-- <form action="{{ route('khoa.search') }}" method="POST" class="row gx-3 gy-2 align-items-center">
                    @csrf
                    <div class="col-sm-3">
                        <label class="visually-hidden" for="specificSizeInputGroupUsername">Mã khoa</label>
                        <div class="input-group">
                            <div class="input-group-text">Tên khoa</div>
                            <input type="text" name="tenkh" class="form-control"
                                id="specificSizeInputGroupUsername" placeholder="Tên khoa">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                </form> --}}
                <table class="table table-bodered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Mã khoa</th>
                            <th class="text-center">Tên khoa</th>
                            <th class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 0;
                        @endphp
                        @foreach ($khoas as $item)
                            @php
                                $stt++;
                            @endphp
                            <tr>
                                <td class="text-center">{{ $stt }}</td>
                                <td class="text-center">{{ $item->MaKH }}</td>
                                <td class="text-center">{{ $item->TenKH }}</td>
                                <td class="text-center">
                                    <a class="btn btn-success" href="/khoa1/detail/{{ $item->MaKH }}">Chi tiết</a>
                                    <a class="btn btn-primary" href="/khoa1/edit/{{ $item->MaKH }}">Chỉnh sửa</a>
                                    <a class="btn btn-danger" href="/khoa1/delete/{{ $item->MaKH }}">Xoá</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <h3>Tổng số : {{ $khoas->count() }}</h3>
                    <a class="btn btn-success" href="/khoa1/create">Thêm mới</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
