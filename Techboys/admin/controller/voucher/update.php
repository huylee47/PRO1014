<?php
require_once 'model/voucher.php';
if (isset($_GET['id'])) {
    $motvoucher = list_motvoucher($_GET['id']);
    require_once 'view/voucher/update.php';
} else if (isset($_POST['capnhat'])) {
    $id = $_POST['id'];
    $tenvoucher = $_POST['ten'];
    $giagiam = $_POST['giagiam'];
    update_voucher($id, $tenvoucher, $giagiam);
    echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=listvoucher';</script>";
    exit;
}
