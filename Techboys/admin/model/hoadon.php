<?php
require_once "pdo.php";
function loadall_hoadon(){
    $sql="select * from hoadon";
    return pdo_query($sql);
}
function xoa_hoadon($id_hoadon){
    $sql = "DELETE FROM hoadon WHERE id_hoadon = '$id_hoadon'";
    pdo_execute($sql);
}
function list_mothoadon($id)
{
    $sql = "SELECT * FROM hoadon WHERE id_hoadon =$id";
    return pdo_query_one($sql);
}
function update_hoadon($id,$tinhtrang)
{
    $sql = "UPDATE hoadon SET tinh_trang = '$tinhtrang' WHERE id_hoadon = '$id'";
    pdo_execute($sql);
}
function loadall_chitiethoadon(){
    $sql="select * from chitiet_hoadon";

    $listchitiethoadon= pdo_query($sql);
    return $listchitiethoadon;
}
function dagiaohang($id_hoadon) {
    $sql = "UPDATE hoadon SET tinhtrang = 2 WHERE id_hoadon=$id_hoadon";
    pdo_execute($sql);
}
function chuagiaohang($id_hoadon) {
    $sql = "UPDATE hoadon SET tinhtrang = 1 WHERE id_hoadon=$id_hoadon";
    pdo_execute($sql);
}
function load_all_cthoadon_by_idhoadon($id) {
    $sql = "SELECT * FROM `chitiet_hoadon` where id_hoadon = $id";
    return pdo_query($sql);
}
?>