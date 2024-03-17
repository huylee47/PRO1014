<?php
require_once "pdo.php";
function check_user($username,$password){
    $sql= "SELECT * FROM taikhoan WHERE user ='".$username."' AND password ='".$password."' ";
    return pdo_query_one($sql);
}
?>