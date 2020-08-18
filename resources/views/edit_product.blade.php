<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SỬA SẢN PHẨM</title>
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/dist/css/bootstrap.css') }}">
</head>


<body>


    <div class="container">
    <a href="{{route('productList')}}" class="btn btn-success ml-5 mt-3">Return List</a>
    </div>
    <div class="container h1 text-center mt-5 mb-5">EDIT PRODUCT:</div>
    <div class="container text-center error-message">
        @if ($errors->any())
            @foreach ($errors->all() as $nameError)
                <p style="color:red">{{ $nameError }}</p>
            @endforeach
        @endif
        <p style='color:green'>{{ isset($success) ? $success : '' }}</p>
    </div>

    <form action="{{ route('updateProduct') }}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="id" id="" value="{{$product->id ?? ""}}">
        <table class="container w-50 text-center table table-bordered">
            <tr>
                <td><label for="name">Tên</label></td>
            <td><input class="text-center form-control" type="text" id="name" name="name" value="{{$product->name ?? ""}}"></td>
            </tr>
            <tr>
                <td><label for="price">Price</label></td>
                <td><input class="text-center form-control" type="text" id="price" name="price" value="{{$product->price ?? ""}}"></td>
            </tr>
            <tr>
                <td><label for="description">Mô tả</label></td>
                <td><input class="text-center form-control" type="text" id="description" name="description" value="{{$product->description ?? ""}}"></td>
            </tr>
            <tr>
                <td><label>Loại sản phẩm</label></td>
                <td>
                    <select name="category_id" class="form-control">
                        @if (!isset($categories))
                            <option value=""></option>
                        @else
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        @endif
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="description">Trạng thái</label></td>
                <td>
                    <select name="active" id="" class="form-control">
                        <option value="Hoạt động">Active</option>
                        <option value="Đã xóa">InActive</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-success text-center " type="submit" value="Update"></td>
            </tr>
        </table>
    </form>




</body>
<script src="{{ asset('libs/bootstrap/dist/js/bootstrap.js') }}"></script>

</html>
