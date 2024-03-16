<?php
require_once 'model/danhmuc.php';
if (isset($_GET['id'])) {
    xoa_danhmuc($_GET['id']);
}
header('Location: index.php?act=listdanhmuc');
?>