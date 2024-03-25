<?php
require_once "pdo.php";
function loadall_tintuc(){
    $sql="select * from tintuc";
    return pdo_query($sql);
}
function themtintuc($noidung,$hinhanh,$id_nguoitao){
    $sql = "INSERT INTO tintuc (noidung,img,id_nguoitao) VALUES ('$noidung','$hinhanh','$id_nguoitao')";
    pdo_execute($sql);
}
function xoa_tintuc($id_tt){
    $sql = "DELETE FROM tintuc WHERE id_tintuc = '$id_tt'";
    pdo_execute($sql);
}
function sua_tintuc($noidung,$hinhanh,$id_tt){
    $sql = "UPDATE tintuc SET noidung='$noidung',img = '$hinhanh' WHERE id_tintuc = '$id_tt'";
    pdo_execute($sql);
}
function tintuc($id_tt) {
    $sql = "SELECT * FROM tintuc WHERE id_tintuc = '$id_tt'";
    return pdo_query_one($sql);
}