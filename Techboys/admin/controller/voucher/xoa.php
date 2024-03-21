<?php
require_once 'model/voucher.php';
if (isset($_GET['id'])) {
    xoa_voucher($_GET['id']);
}
echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=listvoucher';</script>";
    exit;
    ?>