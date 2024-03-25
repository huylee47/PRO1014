<?php
function insert_hoadon($name, $sdt, $email, $ghichu, $diachi, $pttt) {
        $sql = "INSERT INTO `hoadon` (hoten, sdt, email, ghichu, diachi, pttt) VALUES ('$name', '$sdt', '$email', '$ghichu', '$diachi', '$pttt')";
        return pdo_execute_return_id($sql);
    }

    function insert_chitethoadon($id_hoadon, $id_sanpham, $gia, $soluong) {
        $sql = "INSERT INTO `chitiethoadon` (id_hoadon, id_sanpham, gia, soluong) VALUES ('$id_hoadon', '$id_sanpham', '$gia', '$soluong')";
        pdo_execute($sql);
    }