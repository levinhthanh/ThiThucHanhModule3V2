<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thống kê</title>
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/dist/css/bootstrap.css') }}">
</head>

<body>

    <div class="container">
        <a href="{{ route('productList') }}" class="btn btn-success mt-3">Return List</a>
        <p class="h4 mt-5">THỐNG KÊ SẢN PHẨM</p>
        @if ($categories == '')
            <tr>
                <td colspan="4">Không có dữ liệu</td>
            </tr>
        @else
            @foreach ($categories as $key => $category)
                <table class="table w-50 table-striped table-bordered">
                    <tr>
                        <td scope="row">{{ $category->title }}</td>
                        <td scope="row">{{ $category->count }}</td>
                    </tr>
                </table>
            @endforeach
        @endif
    </div>


</body>
<script src="{{ asset('libs/bootstrap/dist/js/bootstrap.js') }}"></script>

</html>
