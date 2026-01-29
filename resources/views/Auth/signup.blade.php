<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
</head>
<body>

<h2>Đăng ký tài khoản</h2>

<form method="POST" action="/check-signup">
    @csrf

    <p>
        Username:
        <input type="text" name="username">
    </p>

    <p>
        Password:
        <input type="password" name="password">
    </p>

    <p>
        Re-Password:
        <input type="password" name="repass">
    </p>

    <p>
        MSSV:
        <input type="text" name="mssv">
    </p>

    <p>
        Lớp môn học:
        <input type="text" name="lopmonhoc">
    </p>

    <p>
        Giới tính:
        <select name="gioitinh">
            <option value="nam">Nam</option>
            <option value="nu">Nữ</option>
        </select>
    </p>

    <button type="submit">Sign Up</button>
</form>

</body>
</html>
