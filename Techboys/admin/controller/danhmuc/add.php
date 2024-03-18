<?php
include 'view/danhmuc/add.php';
if(!isset($_POST['themmoi'])) {
    require_once "view/danhmuc/add.php";
} else {
    require_once "model/danhmuc.php";
    if(isset($_POST['ten_dm'])) {
        $ten_dm = $_POST['ten_dm'];
        add_danhmuc($ten_dm);
    }
    header('Location: index.php?act=listdanhmuc');
}
