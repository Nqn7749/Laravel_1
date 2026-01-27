<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Đăng nhập</h2>

<form method="POST" action="{{ url('/checklogin') }}">
    @csrf

    <p>
        Username:
        <input type="text" name="username">
    </p>

    <p>
        Password:
        <input type="password" name="password">
    </p>

   

    <button type="submit">Đăng nhập</button>
</form>

</body>
</html>
