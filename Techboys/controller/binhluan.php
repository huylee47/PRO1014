<?php
require_once "model/binhluan.php";
require_once "model/sanpham.php";
$id=$_GET['id'];
$noidungBL=$_GET['noidung'];
if (preg_match('/^[a-zA-Z0-9][^\p{Z}\r\n]*$/u', $noiDungBL)) {
    them_binhluan($id, $noiDungBL);
  } else {
    header("HTTP/1.1 403");
  }
?>