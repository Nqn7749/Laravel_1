<!DOCTYPE html>
<html>
<head>
    <title>Sửa sản phẩm</title>
</head>
<body>

<h2>Sửa sản phẩm</h2>

<form method="POST" action="{{ route('product.update', $product->id) }}">
    @csrf
    @method('PUT')

    <label>Tên sản phẩm:</label>
    <input type="text" name="name" value="{{ $product->name }}"><br><br>

    <label>Giá sản phẩm:</label>
    <input type="number" name="price" value="{{ $product->price }}"><br><br>

    <label>Số lượng:</label>
    <input type="number" name="stock" value="{{ $product->stock }}"><br><br>

    <button type="submit">Sửa sản phẩm</button>
</form>

<br>
<a href="{{ route('product.index') }}">⬅ Quay lại</a>

</body>
</html>
