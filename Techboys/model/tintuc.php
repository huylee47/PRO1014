<?php
require_once "pdo.php";
function loadall_tintuc(){
    $sql="select * from tintuc";
    return pdo_query($sql);
}

function laytintuctheoid(){
    $sql="select * from tintuc where id_tintuc=1";
    return pdo_query_one($sql);
}