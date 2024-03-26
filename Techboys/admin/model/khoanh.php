<?php
require_once 'model/pdo.php';
function insert_khoanh($id,$ten){
    $sql=" insert into khoanh (id_sanpham,ten_anh) values ('$id','$ten')";
    pdo_execute($sql);
}
function loadAnhTheoIdSanPham($id){
    $sql="select * from khoanh where id_sanpham=$id";
    return pdo_query($sql);    
}
function xoa_anh($id)
{
    $sql = "DELETE FROM khoanh WHERE id_anh =$id";
    pdo_execute($sql);
}
