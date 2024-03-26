<?php
require_once 'model/pdo.php';
function insert_khoanh($id,$ten){
    $sql=" insert into khoanh (id_sanpham,ten_anh) values ('$id','$ten')";
    pdo_execute($sql);
}
?>