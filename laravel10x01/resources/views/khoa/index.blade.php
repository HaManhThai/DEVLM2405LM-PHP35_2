<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KHOA</title>
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
                <h2 class="text-center">Danh sách thông tin khoa</h2>
            </div>

            @if (Session::has('khoa_created'))
                <div class="alert alert-success">
                    {{ Session::get('khoa_created') }}
                </div>
            @endif

            @if (Session::has('khoa_edited'))
                <div class="alert alert-primary">
                    {{ Session::get('khoa_edited') }}
                </div>
            @endif

            @if (Session::has('khoa_deleted'))
                <div class="alert alert-danger">
                    {{ Session::get('khoa_deleted') }}
                </div>
            @endif

            <div class="card-body">
                <form action="{{ route('khoa.search') }}" method="POST">
                    @csrf
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Tên khoa</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" name="kitutenkh"
                                    value="{{ $kitu }}" placeholder="Nhập tên khoa">
                            </div>
                        </div>
                        <div class="col-auto">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th class=text-center>STT</th>
                        <th class=text-center>Mã Khoa</th>
                        <th class=text-center>Tên Khoa</th>
                        <th class=text-center>Thao tác</th>

                    </tr>
                </thead>
                <tbody class="">
                    @php
                        $stt = 0;
                    @endphp

                    @foreach ($khoas as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td class=text-center>{{ $stt }}</td>
                            <td class=text-center>{{ $item->MaKH }}</td>
                            <td class=text-center>{{ $item->TenKH }}</td>
                            <td class=text-center>
                                <a href="{{ route('khoa.detail', $item->MaKH) }}" class="btn btn-info">Chi
                                    tiết</a>
                                <a href="{{ route('khoa.edit', $item->MaKH) }}" class="btn btn-success">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xoá khoa có mã khoa: {{ $item->MaKH }} không? ')"
                                    href="/khoa/delete/{{ $item->MaKH }}" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <h3>Total: {{ $khoas->count() }}</h3>
                    <a class="btn btn-primary" href="{{ route('khoa.create') }}">Thêm mới khoa</a>
                </div>
            </div>
        </div>



    </div>
</body>

</html>
