<?php
require_once "model/taikhoan.php";
if (isset($_POST['dangky'])) {
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['password'];
    // Thực hiện thêm tài khoản
    insert_taikhoan($email, $user, $pass);?>
                <script>
                  alert('Đăng ký thành công');
                  window.location.href = 'dangnhap.php';
                </script><?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/dangnhap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Techboys | Register</title>
</head>
<body>
<div class="container">
  <h2>Đăng ký</h2>
  <form action="#" method="post">
    <div class="input-group">
      <label>Tên đăng nhập:</label>
      <input type="text" name="user" required>
    </div>
    <div class="input-group">
      <label>Mật khẩu:</label>
      <input type="password" name="password" required>
    </div>
    <div class="input-group">
      <label>Email:</label>
      <input type="email" name="email" required>
    </div>
    <button type="submit" class="btn" name="dangky">Đăng ký</button>
  </form>
  <p>Đã có tài khoản? <a href="dangnhap.php">Đăng nhập</a></p>
</div>
</body>
</html>
