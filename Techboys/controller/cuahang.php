<?php
require_once './view/header.php';
require_once "model/sanpham.php";
$listsanpham = load_sanpham();
require_once './view/cuahang.php';
require_once './view/footer.php';
