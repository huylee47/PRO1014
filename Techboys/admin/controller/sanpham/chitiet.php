<?php
require_once './model/sanpham.php';
require_once './model/danhmuc.php';
$listdanhmuc = list_danhmuc();
    $id_sp=$_GET['id'];
    $motsanpham= sanpham($id_sp);

    // ,$soluong,$NSX,$xuatxu

    require_once 'view/sanpham/chitietsanpham.php';
?>