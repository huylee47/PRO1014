<?php
require_once "pdo.php";
function loadall_tintuc(){
    $sql="select * from tintuc";
    return pdo_query($sql);
}