<!DOCTYPE html>
<html>
<head>
    <title>Thêm sản phẩm</title>
</head>
<body>

<h2>Thêm sản phẩm</h2>

<form method="POST" action="{{ route('product.store') }}">
    @csrf

    <p>
        Tên sản phẩm:
        <input type="text" name="name">
    </p>

    <p>
        Giá:
        <input type="number" name="price">
    </p>

    <button type="submit">Lưu</button>
</form>

<br>
<a href="{{ route('product.index') }}">⬅ Quay lại</a>

</body>
</html>
