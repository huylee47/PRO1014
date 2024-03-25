<?php
$name = $_POST['hoten'];
      $sdt = $_POST['sdt'];
      $email = $_POST['email'];
      $ghichu = $_POST['ghichu'];
      $diachi = $_POST['diachi'];
      $pttt = $_POST['pttt'];
      $idHoaDon = insert_hoadon($name, $sdt, $email, $ghichu, $diachi, $pttt);
      $sanpham = $_SESSION['giohang'];
      foreach ($sanpham as $sp) {
        insert_chitethoadon($idHoaDon, $sp['id'], $sp['price'], $sp['soluong']);
      }
      $_SESSION['giohang'] = [];
      ?>