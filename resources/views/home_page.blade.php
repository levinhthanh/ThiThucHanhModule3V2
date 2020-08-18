<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TRANG CHỦ</title>
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/dist/css/bootstrap.css') }}">
</head>


<body>
    <div class="container h1 mt-5 mb-5">DANH SÁCH SẢN PHẨM :</div>
    <div class="container">
        <a href="{{ route('activeProduct') }}" class="btn btn-success mb-3">Product Active</a>
        <a href="{{ route('inActiveProduct') }}" class="btn btn-success mb-3">Product Inactive</a>
    </div>

    <div class="container">
        <a href="{{ route('createProduct') }}" class="btn btn-success mb-3">Creat</a>
        <a href="{{ route('calculationProduct') }}" class="btn btn-success mb-3">Thống kê</a>
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





</body>
<script src="{{ asset('libs/bootstrap/dist/js/bootstrap.js') }}"></script>

</html>
