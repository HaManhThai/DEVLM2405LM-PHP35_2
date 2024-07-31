<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STUDENTS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Danh sách sinh viên</h2>
            </div>

            @if (Session::has('sinhvien_created'))
                <div class="alert alert-success">
                    {{ Session::get('sinhvien_created') }}
                </div>
            @endif
            @if (Session::has('sinhvien_edited'))
                <div class="alert alert-success">
                    {{ Session::get('sinhvien_edited') }}
                </div>
            @endif
            @if (Session::has('sinhvien_deleted'))
                <div class="alert alert-success">
                    {{ Session::get('sinhvien_deleted') }}
                </div>
            @endif

            <div class="card-body">
                <form class="form-inline" action="{{ route('sinhvien.search') }}" method="POST">
                    @csrf
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Tên sinh viên</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2"
                            placeholder="Nhập tên sinh viên" name="kitutensv" value="{{ $kitu }}">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>
                </form>
            </div>


            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th class=text-center>STT</th>
                        <th class=text-center>Mã sinh viên</th>
                        <th class=text-center>Họ sinh viên</th>
                        <th class=text-center>Tên sinh viên</th>
                        <th class=text-center>Ngày sinh</th>
                        <th class=text-center>Thao tác</th>

                    </tr>
                </thead>
                <tbody class="">
                    @php
                        $stt = 0;
                    @endphp

                    @foreach ($students as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td class=text-center>{{ $stt }}</td>
                            <td class=text-center>{{ $item->MaSV }}</td>
                            <td class=text-center>{{ $item->HoSV }}</td>
                            <td class=text-center>{{ $item->TenSV }}</td>
                            <td class=text-center>{{ $item->NgaySinh }}</td>
                            <td class=text-center>
                                <a href="{{ route('sinhvien.detail', $item->MaSV) }}" class="btn btn-info">Chi tiết</a>
                                <a href="{{ route('sinhvien.editGet', $item->MaSV) }}" class="btn btn-success">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="{{ route('sinhvien.delete', $item->MaSV) }}" class="btn btn-danger"
                                    onclick="return confirm('Bạn có chắc chắn muốn xoá thông tin của sinh viên {{ $item->HoSV }} {{ $item->TenSV }} không?')">
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
                <h3>Tổng số : {{ $students->count() }}</h3>
                <a class="btn btn-primary" href="{{ route('sinhvien.createPost') }}">Thêm mới</a>
            </div>

        </div>
    </div>
    </div>
</body>

</html>
