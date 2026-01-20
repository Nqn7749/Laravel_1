<!DOCTYPE html>
<html>
<head>
    <title>Thêm sản phẩm</title>
</head>
<body>

<h2>Thêm sản phẩm mới</h2>

<form>
    <label>Tên sản phẩm</label><br>
    <input type="text"><br><br>

    <label>Giá</label><br>
    <input type="number"><br><br>

    <button type="submit">Thêm</button>
</form>

<a href="{{ route('product.index') }}"> Quay lại </a>

</body>
</html>
