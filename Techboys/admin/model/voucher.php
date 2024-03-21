<?php
require_once "pdo.php";
function list_voucher()
{
    $sql = "SELECT * FROM voucher";
    return pdo_query($sql);
}
?>