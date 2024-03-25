<?php
require_once "model/hoadon.php";
$listhoadonAll = loadall_hoadon();
$listchitiethoadon = loadall_chitiethoadon();
require_once "view/hoadon/list.php";
?>
