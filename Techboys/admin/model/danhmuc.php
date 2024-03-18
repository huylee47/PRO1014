<?php
require_once "pdo.php";
 function list_danhmuc(){
    $sql= "SELECT * FROM danhmuc";
    return pdo_query($sql);
 }
function add_danhmuc($ten_dm){
    $sql= "INSERT INTO danhmuc  (ten_danhmuc) VALUES('$ten_dm')";
    pdo_execute($sql);
}
function change_danhmuc($ten_dm){
    $sql = "UPDATE danhmuc SET ten_danhmuc='.$ten_dm.'";
    pdo_execute($sql);
}
 ?>