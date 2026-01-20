<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        th {
            background: #eee;
        }
    </style>
</head>
<body>

<h2>Danh sách sản phẩm</h2>

<a href="{{ route('add') }}"> Thêm sản phẩm </a>

<br><br>

<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Chi tiết</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>Sản phẩm A</td>
            <td>100.000đ</td>
            <td><a href="{{ route('product.detail', ['id' => 1]) }}">Xem chi tiết</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Sản phẩm B</td>
            <td>200.000đ</td>
            <td><a href="{{ route('product.detail', ['id' => 2]) }}">Xem chi tiết</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Sản phẩm C</td>
            <td>300.000đ</td>
            <td><a href="{{ route('product.detail', ['id' => 3]) }}">Xem chi tiết</a></td>
        </tr>
    </tbody>
</table>

</body>
</html>
