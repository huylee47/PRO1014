<?php
require_once "model/pdo.php";
function layHetSanPhamTheoIdDanhMuc($id){
    $sql="select * from sanpham where id_dm= $id";
    return pdo_query($sql);
}