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