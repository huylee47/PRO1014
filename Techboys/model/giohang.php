<?php
require_once "model/pdo.php";

function insertGioHang($idTk, $soluong, $idSp)
{
    if (kiemTraCoHangChua($idTk, $idSp) == false) {
        $sql = "INSERT INTO chitiet_giohang (id_taikhoan, so_luong, id_sanpham) VALUES ('$idTk', '$soluong', '$idSp')";
    } else {
        $soLuong = laySoLuongTheoIdSp($idTk, $idSp) + 1;
        $sql = "UPDATE chitiet_giohang SET so_luong = '$soLuong' WHERE id_taikhoan = '$idTk' AND id_sanpham = '$idSp'";
    }
    pdo_execute($sql);
}

function kiemTraCoHangChua($idTk, $idSp)
{
    $sql = "select * from chitiet_giohang where id_taikhoan=$idTk and id_sanpham=$idSp";
    $result = pdo_query($sql);
    if (count($result) == 0) {
        return false;
    }
    return true;
}

function laySoLuongTheoIdSp($idTk, $idSp)
{
    $sql = "select * from chitiet_giohang where id_taikhoan=$idTk and id_sanpham=$idSp";
    return pdo_query_one($sql)['so_luong'];
}

function layChiTietGioHang($id_tk)
{
    $sql = "SELECT sp.ten_sanpham, sp.gia, sp.img, gh.so_luong as soluong, sp.id_sanpham FROM 
    `chitiet_giohang` gh inner join sanpham sp on gh.id_sanpham = sp.id_sanpham where gh.id_taikhoan = $id_tk";
    return pdo_query($sql);
}
function xoa_giohang($id)
{
    $sql = "DELETE FROM chitiet_giohang WHERE id_sanpham =$id";
    pdo_execute($sql);
}