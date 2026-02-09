<!DOCTYPE html>
<html>
<head>
    <title>Thêm sản phẩm</title>
</head>
<body>

<h2>Thêm sản phẩm</h2>

<form method="POST" action="{{ route('product.store') }}">
    @csrf

    <label for="name">Tên sản phẩm:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="price">Giá sản phẩm:</label>
    <input type="number" id="price" name="price"><br><br>
    <label for="stock">Số lượng:</label>
    <input type="number" id="stock" name="stock"><br><br>

    <input type="submit" value="Thêm sản phẩm">
</form>

<br>
<a href="{{ route('product.index') }}">⬅ Quay lại</a>

</body>
</html>
