<?php
require_once "pdo.php";
function layHetSanPhamTheoIdDanhMuc($id){
    $sql="select * from sanpham where id_danhmuc= $id";
    return pdo_query($sql);
}
function loadall_sanpham(){
    $sql="select * from sanpham";
    return pdo_query($sql);
}
function themsanpham($id_dm,$tensp,$gia,$hinhanh,$nguongoc,$ghichu){
    $sql = "INSERT INTO sanpham (id_danhmuc,ten_sanpham,img,gia,nguongoc,ghichu) VALUES ('$id_dm','$tensp','$hinhanh','$gia','$nguongoc','$ghichu')";
    pdo_execute($sql);
}
function xoa_sanpham($id_sp){
    $sql = "DELETE FROM sanpham WHERE id_sanpham = '$id_sp'";
    pdo_execute($sql);
}
function sua_sanpham($id_dm,$id_sp,$tensp,$gia,$hinhanh,$nguongoc,$ghichu){
    $sql = "UPDATE sanpham SET id_danhmuc='$id_dm', ten_sanpham = '$tensp',img = '$hinhanh',gia = '$gia',nguongoc = '$nguongoc',ghichu = '$ghichu' WHERE id_sanpham = '$id_sp'";
    pdo_execute($sql);
}
function sanpham($id_sp) {
    $sql = "SELECT * FROM sanpham WHERE id_sanpham = '$id_sp'";
    return pdo_query_one($sql);
}