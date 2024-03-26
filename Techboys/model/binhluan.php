<?php
require_once "pdo.php";
function list_bl($id_sp){
    $sql= "SELECT * FROM binhluan WHERE id_sanpham =$id_sp ORDER BY id_binhluan DESC ";
    return pdo_query($sql);
}
function them_binhluan($id_tk,$noidung){
 $sql="INSERT INTO binhluan (id_taikhoan,nnoidung) VALUES ('$id_tk','$noidung')";
 pdo_execute($sql);

}
// function date(){
//     $sql= "SELECT * ,DATE_FORMAT(ngaytao,'%Y-%m-%d') AS ngaytaodate FROM binhluan ";
//     return pdo_query($sql);
// }
?>