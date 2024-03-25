<?php
require_once "model/hoadon.php";
if (isset($_GET['id'])) {
    $id_hoadon = $_GET['id'];
    dagiaohang($id_hoadon);
    echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=listhoadon';</script>";

}
exit;
?>