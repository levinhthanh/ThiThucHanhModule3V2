<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sản phẩm active</title>
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/dist/css/bootstrap.css') }}">
</head>

<div class="container h1 mt-5 mb-5">DANH SÁCH SẢN PHẨM ACTIVE :</div>
<div class="container">
    <a href="{{ route('productList') }}" class="btn btn-success mt-3 mb-3">Return List</a>
</div>

<table class="container table table-striped table-bordered ">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên</th>
            <th scope="col">Giá</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Loại sản phẩm</th>
            <th scope="col">Chỉnh sửa</th>
        </tr>
    </thead>
    <tbody>
        @if ($products == '')
            <tr>
                <td colspan="4">Không có dữ liệu</td>
            </tr>
        @else
            @foreach ($products as $key => $product)
                <tr>
                    <td scope="row">{{ ++$key }}</td>
                    <td scope="row">{{ $product->name }}</td>
                    <td scope="row">{{ $product->price }}</td>
                    <td scope="row">{{ $product->description }}</td>
                    <td scope="row">
                        @php
                        if($product->category_id){
                        echo $product->category->title;
                        }else {
                        echo "unknow";
                        }
                        @endphp
                    </td>
                    <td scope="row">
                        <a href="/product/{{ $product->id }}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
            @endforeach
        @endif

    </tbody>
</table>



<body>

</body>
<script src="{{ asset('libs/bootstrap/dist/js/bootstrap.js') }}"></script>

</html>
