<?php
require_once "pdo.php";
function list_bl($id_sp){
    $sql= "SELECT * FROM binhluan WHERE id_sanpham =$id_sp ORDER BY id_binhluan DESC ";
    return pdo_query($sql);
}
function them_binhluan($id_tk,$noidung,$id_sp,$trangthai=1){
 $sql="INSERT INTO binhluan (id_taikhoan,noidung,id_sanpham,trangthai) VALUES ('$id_tk','$noidung','$id_sp','$trangthai')";
 pdo_execute($sql);

}
function hienthi_binhluan($id_sp){
    $sql= "SELECT * FROM binhluan WHERE id_sanpham =$id_sp AND trangthai=1 ORDER BY id_binhluan DESC ";
    return pdo_query($sql);
}
// function date(){
//     $sql= "SELECT * ,DATE_FORMAT(ngaytao,'%Y-%m-%d') AS ngaytaodate FROM binhluan ";
//     return pdo_query($sql);
// }
?>