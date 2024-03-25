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
function themsanpham($id_dm,$tensp,$gia,$hinhanh,$ghichu,$soluong,$NSX,$xuatxu){
    $sql = "INSERT INTO sanpham (id_danhmuc,ten_sanpham,img,gia,ghichu,so_luong,nha_san_xuat,xuatxu) VALUES ('$id_dm','$tensp','$hinhanh','$gia','$ghichu','$soluong','$NSX','$xuatxu')";
    return pdo_execute_return_id($sql);
}
function xoa_sanpham($id_sp){
    $sql = "DELETE FROM sanpham WHERE id_sanpham = '$id_sp'";
    pdo_execute($sql);
}
function sua_sanpham($id_dm,$id_sp,$tensp,$gia,$hinhanh,$ghichu){
    $sql = "UPDATE sanpham SET id_danhmuc='$id_dm', ten_sanpham = '$tensp',img = '$hinhanh',gia = '$gia',ghichu = '$ghichu' WHERE id_sanpham = '$id_sp'";
    pdo_execute($sql);
}
function sanpham($id_sp) {
    $sql = "SELECT * FROM sanpham WHERE id_sanpham = '$id_sp'";
    return pdo_query_one($sql);
}
function get_ten_sanpham_by_id($id_sp){
    $sql= "SELECT * FROM sanpham WHERE id_sanpham = $id_sp";
    return pdo_query_one($sql)['ten_sanpham'];
}
