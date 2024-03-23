<?php
require_once "pdo.php";
 function load_sanpham(){
    $sql= "SELECT * FROM sanpham";
    return pdo_query($sql);
 }
 function layHetSanPhamTheoId($id){
    $sql="select * from sanpham where id_sanpham= $id";
    return pdo_query_one($sql);
}
?>