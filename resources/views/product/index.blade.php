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

<h1>{{ $title }}</h1>
<h2>Danh sách sản phẩm</h2>

<a href="{{ route('product.add') }}"> Thêm sản phẩm </a>

<br><br>

<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th></th>Hành động</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>
                    <a href="{{ route('product.detail',  $product['id']) }}">
                        Xem chi tiết
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
