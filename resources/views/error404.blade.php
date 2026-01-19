<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>404 - Không tìm thấy trang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .box {
            background: white;
            padding: 40px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,.1);
        }
        h1 {
            font-size: 80px;
            margin: 0;
            color: #e74c3c;
        }
        p {
            font-size: 18px;
            margin: 15px 0;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
        }
        a:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>404</h1>
        <p>Trang bạn tìm không tồn tại</p>
        <a href="{{ url('/') }}">Quay về trang chủ</a>
    </div>
</body>
</html>
