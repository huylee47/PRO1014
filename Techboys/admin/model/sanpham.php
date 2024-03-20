<?php
require_once "pdo.php";
function layHetSanPhamTheoIdDanhMuc($id){
    $sql="select * from sanpham where id_dm= $id";
    return pdo_query($sql);
}
function loadall_sanpham(){
    $sql="select * from sanpham";
    return pdo_query($sql);
}