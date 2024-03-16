<?php
require_once "pdo.php";
 function list_danhmuc(){
    $sql= "SELECT * FROM danhmuc";
    return pdo_query($sql);
 }
function them_danhmuc(){
    $sql= "INSERT INTO danhmuc VALUES";
}
 ?>