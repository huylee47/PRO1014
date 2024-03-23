<?php
require_once "pdo.php";
function list_voucher()
{
    $sql = "SELECT * FROM voucher";
    return pdo_query($sql);
}

function them_voucher($tenvoucher,$giagiam)
{
    $sql = "INSERT INTO voucher(ten_voucher,giagiam) VALUES ('$tenvoucher','$giagiam')";
    pdo_execute($sql);
}
function xoa_voucher($id)
{
    $sql = "DELETE FROM voucher WHERE id_voucher = '$id'";
    pdo_execute($sql);
}
function list_motvoucher($id)
{
    $sql = "SELECT * FROM voucher WHERE id_voucher =$id";
    return pdo_query_one($sql);
}
function update_voucher($id, $tenvoucher, $giagiam)
{
    $sql = "UPDATE `voucher` SET `ten_voucher` = '$tenvoucher', `giagiam` ='$giagiam'  WHERE id_voucher = '$id'";
    pdo_execute($sql);
}
?>