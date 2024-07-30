<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KHOA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card">
            <h2 class="text-center">KHOA List</h2>
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
                            <a href="{{ route('khoa.detail', $item->MaKH) }}" class="btn btn-success">Detail</a>
                            <a href="{{ route('khoa.edit', $item->MaKH) }}" class="btn btn-primary">Edit</a>
                            {{-- <a href="/khoa/delete/{{ $item->MaKH }}/{{ $item->TenKH }}"
                                class="btn btn-secondary">Chỉnh
                                sửa</a> --}}
                            <a onclick="return confirm('Bạn có chắc chắn muốn xoá không? Mã khoa: {{ $item->MaKH }}')"
                                href="/khoa/delete/{{ $item->MaKH }}" class="btn btn-danger">Delete</a>
                            {{-- <a href="/khoa/detail/{{ $item->MaKH }}" class="btn btn-success">Chi tiết</a> --}}
                        </td>


                    </tr>
                @endforeach

            </tbody>
            <tfoot>

            </tfoot>
        </table>
        <div class="">
            <span><a class="btn btn-primary" href="{{ route('khoa.create') }}">Add</a></span>
        </div>
    </div>
</body>

</html>
