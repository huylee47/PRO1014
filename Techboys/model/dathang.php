<?php
require_once "model/pdo.php";
function insert_hoadon($id_taikhoan,$ten, $sdt,  $ghichu, $diachi, $pttt) {
        $sql = "INSERT INTO `hoadon` (id_taikhoan,ten, SDT,  ghichu, diachi, phuongthuc_thanhtoan) VALUES ('$id_taikhoan','$ten', '$sdt',  '$ghichu', '$diachi', '$pttt')";
        return pdo_execute_return_id($sql);
    }

    function insert_chitethoadon($id_hoadon, $id_sanpham, $gia, $soluong) {
        $sql = "INSERT INTO `chitiet_hoadon` (id_hoadon, id_sanpham, gia, so_luong) VALUES ('$id_hoadon', '$id_sanpham', '$gia', '$soluong')";
        pdo_execute($sql);
    }