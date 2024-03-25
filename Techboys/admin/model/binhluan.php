<?php
require_once "pdo.php";
function list_binhluan(){
    $sql= "SELECT * FROM binhluan";
    return pdo_query($sql);
}
function hide_binhluan($id_bl) {
    $sql = "UPDATE binhluan SET trangthai = 0 WHERE id_binhluan=$id_bl";
    pdo_execute($sql);
}
function show_binhluan($id_bl) {
    $sql = "UPDATE binhluan SET trangthai = 1 WHERE id_binhluan=$id_bl";
    pdo_execute($sql);
}
function delete_binhluan($id_bl) {
    $sql = "DELETE FROM binhluan WHERE id_binhluan = $id_bl";
    pdo_execute($sql);
}
?> 
