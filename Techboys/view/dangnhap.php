
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/dangnhap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Techboys | Login</title>
</head>
<body>
<div class="container">
  <h2>Đăng nhập</h2>
  <form action="" method="post">
    <div class="input-group">
      <label>Tên đăng nhập:</label>
      <input type="text"  name="user" required>
    </div>
    <div class="input-group">
      <label>Mật khẩu:</label>
      <input type="password"name="password" required>
    </div>
    <?php
        session_start();
        require_once "model/taikhoan.php";
        if(isset($_POST['dangnhap'])){
            $username=$_POST['user'];
            $password=$_POST['password'];
            $checkuser= check_user($username,$password);
            if(is_array($checkuser)){
                $_SESSION['user']=$username;
                ?>
                <script>
                  alert('Đăng nhập thành công');
                  window.location.href = 'index.php';
                </script>
                <?php
            }else{
                echo $thongbao= "Tài khoản không tồn tại";
            }
        }
        ?>
    <button type="submit" class="btn" name="dangnhap" >Đăng nhập</button>
  </form>
  <div class="social-icons">
    <a href="test.php"><i class='bx bxl-facebook'></i></a>
    <a href="test.php"><i class='bx bxl-google'></i></a>
    <a href="test.php"><i class='bx bxl-twitter'></i></a>
  </div>
  <p>Chưa có tài khoản? <a href="dangky.php">Đăng ký ngay</a></p>
</div>
</body>
</html>